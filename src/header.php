<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $md; ?>">
    
    <title> 
        <?php 
        if(isset($title) && !empty($title)) 
        {
            echo $title;
        } 
        else 
        {
            echo "Default Title";
        }
        ?> 
    </title>

    <style>
        body 
        {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fbfbfb;
            display: flex;          
            flex-direction: column; 
            min-height: 100vh;      
        }

        header 
        {
            background-color: #000000ff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main 
        {
            padding: 20px;
            text-align: left;
            flex: 1;              
        }

        footer 
        {
            background-color: #000000ff;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }

        .nav-item 
        {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        
        .nav-side 
        {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1> website.com </h1>
        <hr>
        <nav>
            <div class="nav-side">
                <a href="./sample.php" class="nav-item"> Home Page</a>
                <a href="./aboutus.php" class="nav-item"> About Us</a>
                <a href="./contactus.php" class="nav-item"> Contact Us</a>
                <a href="./ex1.php" class="nav-item"> Exercise 1</a>
                <a href="./ex3.php" class="nav-item"> Exercise 3</a>
                <a href="./ex4.php" class="nav-item"> Exercise 4</a>
                <a href="./form.php" class="nav-item"> CRUD APP TASK </a>
            </div>
        </nav>
    </header>
    
    <main>