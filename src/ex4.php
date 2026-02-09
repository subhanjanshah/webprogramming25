<!DOCTYPE html>
<?php 
$title = "Exercise 4";
$md = "use an appropriate md";
include 'header.php';
?>
<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <h1> Voting Eligibility </h1>
</head>
<body>
    <form method = "post" action = "">
        Name: <input type="text" name = "name" required> <br><br>
        Age: <input type="number" name = "age" required> <br><br>
        <input type = "submit" name = "submit" value = "Check">
</form>
<?php 
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
if ($age >= 18 )
    {
        echo "Hello $name, you are eligible for voting.";
    }
    else 
    {
        echo "Hello $name, you are not eligible for voting.";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
<?php include 'footer.php' ?>
</html>
<hr>

<?php
$current_month = date('F');
switch ($current_month){
    case "August":
    echo "It's August, so it's still holiday";
    break;

    default:
    echo "It's not August, it's $current_month so I don't have any holidays.";
    break;
}
?>
<hr>

