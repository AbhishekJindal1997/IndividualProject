<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- <h1 class="logo">Book King</h1> -->
<nav>
<a href="index.php">Home</a>
<a href="store.php">Book Store</a>
</nav>

<section class="banner">
 <div class="bannerSection01">
 <div>Buy your favourite Book</div>
 <div>from Here</div>
 <button type="button" class="btn btn-primary bannerBtn"><a href="store.php">Shop Now</a></button>
 </div>

 <div class="bannerSection02">
<img  class="bannerImg" src="./images/reading.png" alt=" girl reading">
</div>
</section>

 <!-- New Products section -->
<section class="newProducts">
<p class="heading">New <span class="styling">Products</span></p>
<p class="newProductsQuote">Jake went in, aware that he had, for the first time in three weeks, opened a door without hoping madly to find another world on the other side. A bell jingled overhead. The mild, spicy smell of old books hit him, and the smell was somehow 
  like coming home <span><strong>― Stephen King</strong></span></p>
<div class="newProductsImagesContainer">
<img src="https://cdn2.penguin.com.au/covers/original/9780141037639.jpg" alt="The Great Gatsby Book">
<img src="https://m.media-amazon.com/images/M/MV5BYmMxYmRlZDQtNjMyZi00NzVlLTkzODctODZiOTE5N2I1YTU0XkEyXkFqcGdeQXVyNjEwNTM2Mzc@._V1_.jpg" alt="book2">
<img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Invisible_Man_%281952_1st_ed_jacket_cover%29.jpg" alt="book 3">
<img src="https://api.time.com/wp-content/uploads/2015/07/lolita.jpeg?w=824&amp;quality=70" alt="book 4">
</div>
</section>

<!-- COntact  us Section -->
<section class="contactUs">
  <div class="contactUsSection">
<form class="contactUsForm">
  <h3>Contact Us</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control description" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<!-- Contact Us Section -->
<div class="contactUsSection">
<img src="./images/contactUs.jpg" alt="contact us image">
</div>
</section>

<!-- All Products -->
<section class="newProducts">
<p class="heading">All <span class="styling">Products</span></p>
<p class="newProductsQuote">A place is not really a place without a bookstore <span><strong>― Gabrielle Zevin, The Storied Life of A.J. Fikry</strong></span></p>
<div class="newProductsImagesContainer">
<img src="https://pyxis.nymag.com/v1/imgs/b8a/21d/a6e839becc747e3c28fed8488e97d86067-Leave-the-World-Behind.2x.rdeep-vertical.w245.jpg" alt="All products book">
<img src="https://images-na.ssl-images-amazon.com/images/I/51fGVOvj9kL._SX321_BO1,204,203,200_.jpg" alt="All products book">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMXWBI_VSkOaSDPDh-s_rwVOoRXHz2XxAU6w&amp;usqp=CAU" alt="All products book">
<img src="https://images-na.ssl-images-amazon.com/images/I/81Gns7Yf5xL.jpg" alt="All products book">
</div>
<div class="newProductsImagesContainer">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5phxHIB1-wRNCd-9iPVw8v6GjXzNf0Y4pQA&amp;usqp=CAU" alt="All products book">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRshRAuuCt_gDUF2wTiYYJgPmpOGVcP23jBkA&amp;usqp=CAU" alt="All products book">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbyB6tm2gq1KdTIUA_o2mIW70GrTlghkIhxw&amp;usqp=CAU" alt="All products book">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa-9M-l09sTsdK5FIhVNbhtSQnu7ZlLS3aqg&amp;usqp=CAU" alt="All products book">
</div>
</section>

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