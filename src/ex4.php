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
        <input type = "submit" name = "submit_voting" value = "Check">
</form>
<?php 
if (isset($_POST['submit_voting']))
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

<hr>

<?php
$current_month = date('F');
switch ($current_month)
{
    case "August":
    echo "It's August, so it's still holiday";
    break;

    default:
    echo "It's not August, it's $current_month so I don't have any holidays.";
    break;
}
?>
<hr>

<h2> Multiplication table </h2>
<form method = "post" action = "">
    <div class="mb-3">
        Enter a number: <input type="number" class = "form-control" name="n" placeholder = "e.g., 5" required> <br><br>
    <div> 
        <input type = "submit" name = "submit_table" value = "Generate Table" class = "btn btn-primary">
</form>

<?php
if (isset($_POST['submit_table']))
    {
    $n=$_POST['n'];
    
    for($i = 1; $i <=10; $i++)
        {
            $result = $n * $i;
            echo "<li class = 'list-group-item'> $n x $i = $result</li>";
        }
    }
?>
</div>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <?php include 'footer.php'; ?>
    </div>
</footer>
</html>