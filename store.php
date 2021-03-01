
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
<a href="checkOut.php">Check out</a>
<h1 class="headings">Check out our 
<span class="headingStyles"> Inventory </span></h1>
<div class="subHeading">Latest Products</div>
<div class="linebreak"></div>

<div class="grid-container">
<?php

require("mysqli_connect.php");

$q = "SELECT * FROM bookinventory";
$result = mysqli_query($dbc, $q) or die(mysql_error());



if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}

while ($row = mysqli_fetch_assoc($result)){

    
     
         echo  "<div class = grid-item> " .
       "<div class = grid-item-one>" . 
        "<img class=imageWrapper src={$row['image']}>" .
         "</div>" .
         "<div class = grid-item-two>". 
        "<a href=checkOut.php?id={$row['idBooks']} class= bookTitle>" . $row['title'] . "</a>" .  
         "<div class= bookPrice>". "$".  $row['price'] . "</div>". 
          "<div class= bookQuantity>" . $row['quantity'] . "</div>" .
        "<button class = add>Add to cart </button>". 
        "</div>" . "</div>";     
     }


   

?>
</div>

<div class="subHeading">Recommended Products</div>
<div class="linebreak"></div>


</body>
</html>









