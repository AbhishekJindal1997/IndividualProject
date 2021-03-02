






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<a href="index.php">Home</a>
<a href="store.php">Book Store</a>

<h1>Check out page</h1>

<form action="checkOut.php?id=" method="POST">

    <p>First Name: <input type="text" name="Fname" value="<?php if (isset($_POST['Fname'])) echo $_POST['Fname']; ?>"></p>
    <P>Last Name: <input type="text" name="Lname" value="<?php if (isset($_POST['Lname'])) echo $_POST['Lname']; ?>"></p>
    <!-- <P> Quantity : <input type="text" name="quantity" value="<?php if (isset($_POST['quantity'])) echo $_POST['quantity']; ?>"> max available <?php echo $row['quantity'] ?> </p> -->

    <p><input type="submit" name="submit" value="Buy Now"></p>
  </form>

  <?php 


require("mysqli_connect.php");

$value=$_GET['id'];

$cookie_name = "clickedIem";
$cookie_value = $value;
setcookie($cookie_name, $cookie_value, time() + 3600 , "/individualProject" );

$q = "SELECT * FROM bookinventory where idBooks = '$value'";
$result = mysqli_query($dbc, $q) or die(mysql_error());

if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}

while ($row = mysqli_fetch_assoc($result)){
         echo  $row['title'] . "<br>";  
         echo "quantity Available "  . $row['quantity'] ;
     }


  
  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  

    $Fname = mysqli_real_escape_string($dbc, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($dbc, $_POST['Lname']);
   // $quantity = mysqli_real_escape_string($dbc, $_POST['quantity']);
  
  
    if (empty($Fname)  ) { 

      echo "Fname is empty. Blank entry not allowed ";
      //echo  "<script>location.href='checkOut.php?id=" . $_COOKIE[$cookie_name] . "'</script>" ; 
      die();
    }

    else if (empty($Lname)){
        echo "Lname is empty. Blank entry not allowed ";
        die();
    }

    // else if (empty($quantity)){
    //     echo "Quantity is empty. Blank entry not allowed";
    // }
    
    else {
        
        echo "Order created " . "<br>";
        echo "Customer Name ". "$Fname " . "$Lname". "<br>";
        echo "Product Name" . "<br>"  ;
        echo "Remaining Quantity"  . "<br>"; 
        $q = "INSERT INTO BookInventoryOrder (Fname, Lname) VALUES ('$Fname', '$Lname')";
        mysqli_query($dbc, $q) or die (mysqli_error($dbc));
        
      
    }
    
  } 
  
  ?>
    
</body>
</html>



