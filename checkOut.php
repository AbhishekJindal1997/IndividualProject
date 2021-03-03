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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="checkout.css">
</head>
<body>

<nav>
<a href="index.php">Home</a>
<a href="store.php">Book Store</a>
</nav>


<h2 class="checkout">Proceed to Checkout</h2>
<?php 

$q = "SELECT * FROM bookinventory where idBooks = '$value'";
$result = mysqli_query($dbc, $q) or die(mysql_error());

if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}

while ($row = mysqli_fetch_assoc($result)){
        echo "<div class=selected>";
         echo   "<div class=selectedBook>" . $row['title'] . "</div>";  
         echo  "<img class=imageWrapper src={$row['image']} max-width='100' height='150'>" ;
         echo   "<br>". "Total Price " . "<strong>" . $row['price'] . "</strong>";
         echo "<div>" . "Quantity Available: " . "<strong>" . $row['quantity'] . "</strong>".  "</div>";
         echo   "</div>";
       
     }

?>

<form action="checkOut.php?id=<?php echo $_SESSION['clickedItem'] ?>" method="POST">
    <div  class="checkoutForm">
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
    </div>
  </form>

<?php 
   

  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  

    $Fname = mysqli_real_escape_string($dbc, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($dbc, $_POST['Lname']);
  
    if (empty($Fname)  ) { 
      echo "<div align=center>" . "<strong>".  "First Name is empty. Blank entry not allowed " . "</strong>";
      die();
    }

    else if (empty($Lname)){
        echo "<div align=center>" . "<strong>".  "Last Name is empty. Blank entry not allowed " . "</strong>";
        die();     
    }

    else { 
      echo "<div align=center>" . "<strong>";
        echo "Order created " . "<br>";
        echo "Customer Name:  ". "$Fname " . "$Lname". "<br>";
        echo "</strong>" . "</div>";
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
          echo "<div align=center>" . "<strong>";
          echo "Product Name " .filter_var($row['title'], FILTER_SANITIZE_STRING) . "<br>"  ;
          echo "Remaining Quantity " . $row['quantity'];
          echo "</strong>" . "</div>";

        }
        
    }
  } 
  
  ?>

  <!-- Footer -->
<footer>
  <div class="footer">
<div class="footerSection">
  <div>Book Store</div>
  <div>Home</div>
  <div>Store</div>
</div>
<div class="footerSection">
<div>Contact</div>
  <div>abhishek.jindal63@gmail.com</div>
  <div>+1 226-978-8703</div>
</div>
<div class="footerSection">
<div>Address</div>
  <div>37 Princess Street East </div>
  <div>Waterloo</div>
</div>
</div>
<div class="copyright">© Copyright 2021 by Abhishek Jidnal</div>


</footer>
    
</body>
</html>



