<?php 
// connecting mysql
require("mysqli_connect.php");
// Getting id from url params
$value=$_GET['id'];
// saving id from url params in session
session_start();
$_SESSION['clickedItem'] = $value;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<a href="index.php">Home</a>
<a href="store.php">Book Store</a>

<h1>Check out page</h1>

<?php 

$q = "SELECT * FROM bookinventory where idBooks = '$value'";
$result = mysqli_query($dbc, $q) or die(mysql_error());

if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}

while ($row = mysqli_fetch_assoc($result)){
         echo  $row['title'] . "<br>";  
         echo "quantity Available "  . $row['quantity'] ;
         // echo "<img class=imageWrapper src={$row['image']}>";
     }

?>

<form action="checkOut.php?id=<?php echo $_SESSION['clickedItem'] ?>" method="POST">

    <p>First Name: <input type="text" name="Fname" value="<?php if (isset($_POST['Fname'])) echo $_POST['Fname']; ?>"></p>
    <P>Last Name: <input type="text" name="Lname" value="<?php if (isset($_POST['Lname'])) echo $_POST['Lname']; ?>"></p>
    <p>Please select Payment option</p>
    <input type="radio" id="credit" name="payment" value="credit">
    <label for="credit">Credit Card</label><br>
    <input type="radio" id="debit" name="payment" value="debit">
    <label for="debit">Debit Card</label><br>
    <input type="radio" id="cash" name="payment" value="cash">
    <label for="cash">Cash</label>

    <p><input type="submit" name="submit" value="Buy Now"></p>
  </form>

<?php 
   

  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  

    $Fname = mysqli_real_escape_string($dbc, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($dbc, $_POST['Lname']);
  
    if (empty($Fname)  ) { 
      echo "<br>" . "Fname is empty. Blank entry not allowed ";
      die();
    }

    else if (empty($Lname)){
        echo "<br>". "Lname is empty. Blank entry not allowed ";
        die();     
    }

    else { 
        echo "Order created " . "<br>";
        echo "Customer Name ". "$Fname " . "$Lname". "<br>";
        $q = "INSERT INTO BookInventoryOrder (Fname, Lname) VALUES ('$Fname', '$Lname')";
        mysqli_query($dbc, $q) or die (mysqli_error($dbc)); 
        
        $q1 = "UPDATE bookinventory SET quantity = quantity-1 WHERE idBooks = '$value' " ;
        mysqli_query($dbc, $q1) or die (mysqli_error($dbc)); 

        $q3 = "SELECT * FROM bookinventory WHERE idBooks = '$value' ";
        $result = mysqli_query($dbc, $q3) or die(mysql_error());
        // Checking if there is result in Db
        if (!$result){
            echo "ERROR: " . mysqli_error($dbc);
        }
        // Displaying all the result from table
        while ($row = mysqli_fetch_assoc($result)){
          echo "Product Name " . $row['title'] . "<br>"  ;
          echo "REMAINING QUANTITY " . $row['quantity'];

        }
        
    }
  } 
  
  ?>
    
</body>
</html>



