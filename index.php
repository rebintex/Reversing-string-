<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reversing string</title>
</head>
<body>
<?php 

//Function that reverses the string

function reverString($revStr='') {
	
    if ($revStr === '') {
        echo "Enter the string!";
    } elseif (strlen(trim($revStr)) <= 1){
        echo "Enter more than one letter!";
    } else {
        $revStr = strrev($revStr);
        echo $revStr;
    }
}

reverString();


?>




</body>
</html>