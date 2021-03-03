
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="index.css">
</head>

<body>

<nav>
<a href="index.php">Home</a>
<a href="store.php">Book Store</a>
</nav>

<section class="banner">
 <div class="bannerSection01">
 <div>Best Online Book Shop</div>
 <p> “a bookstore is a place densely populated with 
      tens of thousands of authors, dead or living, residing side by
       side. But books are quiet. They remain dead silent until somebody 
       flips open a page. Only then so they spill out their stories, calmly and thoroughly, 
       just enough at a time for me to handle.” <strong>― Won-pyung Sohn, Almond</strong>
</p>
 </div>

 <div class="bannerSection02">
<img  class="bannerImg1" src="./images/inventory.jpg" alt=" girl reading">
</div>
</section>

<div class="invHeading"> Inventory </div>
<div class="subHeading">Latest Products</div>
<div class="linebreak"></div>


<div class="grid-container">
<?php
// Connecting to Mysql
require("mysqli_connect.php");
// Query to select all data from table
$q = "SELECT * from bookinventory order by idBooks LIMIT 0,5";
$result = mysqli_query($dbc, $q) or die(mysql_error());
// Checking if there is result in Db
if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}
// Displaying all the result from table
while ($row = mysqli_fetch_assoc($result)){

         echo  "<div class = grid-item> " .
       "<div class = grid-item-one>" . 
        "<img class=imageWrapper src={$row['image']}  height='150'>" .
         "</div>" .
         "<div class = grid-item-two>". 
        "<a href=checkOut.php?id={$row['idBooks']} class= bookTitle>" . $row['title'] . "</a>" .  
         "<div class= bookPrice>". "$".  $row['price'] . "</div>". 
          "<div class= bookQuantity>" . "Quantity " .  $row['quantity'] . "</div>" . 
        "</div>" . "</div>";     
     }
?>
</div>

<div class="subHeading">Recommended Products</div>
<div class="linebreak"></div>
<div class="grid-container">
<?php
// Query to select all data from table
$q = "SELECT * from bookinventory order by idBooks LIMIT 5,5";
$result = mysqli_query($dbc, $q) or die(mysql_error());
// Checking if there is result in Db
if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}
// Displaying all the result from table
while ($row = mysqli_fetch_assoc($result)){

         echo  "<div class = grid-item> " .
       "<div class = grid-item-one>" . 
        "<img class=imageWrapper src={$row['image']} width='200' height='150'>" .
         "</div>" .
         "<div class = grid-item-two>". 
        "<a href=checkOut.php?id={$row['idBooks']} class= bookTitle>" . $row['title'] . "</a>" .  
         "<div class= bookPrice>". "$".  $row['price'] . "</div>". 
          "<div class= bookQuantity>" . "Quantity " .  $row['quantity'] . "</div>" . 
        "</div>" . "</div>";     
     }
?>
</div>

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









