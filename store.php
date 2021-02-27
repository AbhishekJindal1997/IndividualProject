
<html>
<body>
<a href="index.php">Home</a>
<a href="store.php">Book Store</a>
<h1>Store page</h1>
</body>
</html>


<?php

// Showing Products from tables into store page 
require('mysqli_oop_connect.php');
 $q = "select title,price,image,quantity from bookinventory ";
 $stmtt = $mysqli -> query($q);
 while ($row = $stmtt -> fetch_object()){
    echo "<strong>"."Book Name ". "</strong>". $row ->  title . 
         "&nbsp" . "&nbsp" . "&nbsp" .
         "<strong>"."Book Price ". "</strong>". $row ->  price .
         "&nbsp" . "&nbsp" . "&nbsp" .
         "<strong>"."Quantity ". "</strong>". $row ->  quantity;


    echo "<br>";
}


?>


