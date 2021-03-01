<?php


$id = $_GET['id'];

$result = mysqli_query($con,"SELECT (WHATEVER YOU WANT) FROM (YOUR TABLE) WHERE id = $id");

?>