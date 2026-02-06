<!DOCTYPE html>
<?php 
$title = "Exercise 3";
$md = "use an appropriate md";
include 'header.php';
?>

<html>
<body>
<form action="./formprint.php" method="post">
First name: <input type="text" name="name"> <br>
Last name: <input type="text" name="name1"> <br>
<input href="./formprint.php" type="submit">
</form>

</body>
</html>
<?php include 'footer.php' ?>