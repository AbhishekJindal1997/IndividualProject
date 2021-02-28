
<html>
<body>
<link rel="stylesheet" href="styles.css">
<a href="index.php">Home</a>
<a href="store.php">Book Store</a>
<h1 class="headings">Check out our 
<span class="headingStyles"> Inventory </span></h1>
<div class="subHeading">Latest Products</div>
<div class="linebreak"></div>
<div class="grid-container">
<?php

// connecting mysql 
require('mysqli_oop_connect.php');

// Dispaying Products from DB 
 $q = "select title,price,image,quantity from bookinventory ";
 $stmtt = $mysqli -> query($q);
 while ($row = $stmtt -> fetch_object()){

    echo  "<div class = grid-item> " .
          "<div class = grid-item-one>" . 
         "<img class=imageWrapper src={$row ->  image}>" .
         "</div>" .
          "<div class = grid-item-two>". 
         "<div class= bookTitle>" .  $row ->  title . "</div>" .  
         "<div class= bookPrice>". "$". $row ->  price . "</div>". 
         "<div class= bookQuantity>" . $row ->  quantity . "</div>" . 
          "</div>" . "</div>";
}
?>

</div>
</body>
</html>








