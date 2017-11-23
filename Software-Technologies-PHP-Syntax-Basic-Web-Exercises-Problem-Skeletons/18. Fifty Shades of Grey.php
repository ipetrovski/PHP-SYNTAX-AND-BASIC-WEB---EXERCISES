<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
<?php
$neshto = 0;
for ($row = 0; $row <= 4; $row++){

    for ($col = 0; $col <= 9; $col++){
       echo "<div style='background-color: rgb($neshto,$neshto,$neshto)'></div>";
       $neshto +=5;
    }
    echo "<br>";
    $neshto +=1;

}
?>
</body>
</html>