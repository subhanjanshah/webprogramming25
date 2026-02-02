<html>
<body>
     <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 10%;
}

tr, td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
    </style>
    <h1> Exercise: 1 Getting Started with PHP - Subhanjan </h1>
    <?php
        echo "<h2>Hello World! My name is \"Subhanjan\" :)</h2>";
        $title = "PHP is interesting";
        echo "<h3> $title </h3>";
    
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;

   echo 
   "<table>
        <tr>
            <td> S.N.</td>
            <td> Name </td>
            <td> Grade </td>
        </tr>
        <tr>
            <td> 1 </td>
            <td> John </td>
            <td> $g1 </td>
        </tr>

        <tr>
            <td> 2 </td>
            <td> Alice </td>
            <td> $g2 </td>
        </tr>

        <tr>
            <td> 3 </td>
            <td> Bob </td>
            <td> $g3 </td>
        </tr>
    </table>";
    echo "<img width= 650 px src = \"./Exercise1.png\" >";
    ?>
</body>
</html>