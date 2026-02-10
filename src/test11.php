<?php 
/* function test()
{
    echo "testing<br>";
}

test();
Test();
TEST();
*/

/*
function add($name)
    {
        echo "$name<br />";
    }

add ("John");
add("Smith");

function add1($name, $address)
{
    echo "Name: $name Address: $address <br />";
}

add1("Shah", "Hämeenlinna");
add1("Whoru", "Whereulive");
*/

$servername = "localhost";
$username = "testuser";
$password = "Password123";

//create a new connection 
$conn = new mysqli($servername, $username, $password);

// check if connection is established 
if($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
echo "Connected successfully";

//the connection is automatically closed when the script ends 
// if you want to close the connection before the script ends 
$conn -> close();
?>