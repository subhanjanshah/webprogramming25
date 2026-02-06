<!DOCTYPE html>
<?php 
$title = "Exercise 3";
$md = "use an appropriate md";
include 'header.php';
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<form action="./formprint.php" method="post">
<div class="mb-3">
            <label class="form-label">First name:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Last name:</label>
            <input type="text" class="form-control" name="name1"> 
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php include 'footer.php' ?>
<br>

Printing the length of the string:
<?php
# 5. Printing the length of the string. 
$str1 = "Hello";
$str2 = "World";
$combined = $str1 . $str2;
echo strlen($combined);
?>

<br>

<?php 
$num1=298;
$num2=234;
$num3=46;

$total = $num1 + $num2 + $num3;

echo "The sum of numbers are: " . $total;
?>

<br>

<?php 
echo "The web browser you're using is: " . $_SERVER['HTTP_USER_AGENT'];
?>

<br>

<?php 
$current_file = basename($_SERVER['PHP_SELF']);
$mod_timestamp = filemtime($current_file);
echo "Last modified: " . date("F d, Y H:i:s", $mod_timestamp); 
?>