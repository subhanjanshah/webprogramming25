<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $md; ?>">
    <title> <?php echo $title; ?> </title>

    <title> 
        <?php if(isset($title) && !empty($title)) 
        {
        echo $title;
        }
        else
        {
            echo "DEFAULT TITLE FLAG";
        }
        ?> 
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fbfbfb;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        .nav-item {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1> website.com </h1>
        <hr>
        <br>
         <nav>
        <div class="nav-side">
            <a href="./sample.php" class="nav-item"> Home Page</a>
            <a href="./aboutus.php" class="nav-item"> About Us</a>
            <a href="./contactus.php" class="nav-item"> Contact Us</a>
        </div>
</nav>
    </header>
</body>
</html>