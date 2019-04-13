<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <title>Document</title>

    <style>
        body{
            font-family: 'Source Code Pro', monospace;
            font-size: 11pt;
        }
    </style>

</head>
<body>
<?php

$cep = '52041-305';
$regex = '/^([0-9]{5})(\-)([0-9]{3})$/';

if (preg_match($regex, $cep, $matches)){
    echo 'bateu';
}else{
    echo 'não bateu';
}
echo '<hr/>';
echo '<pre>';
print_r($matches);
echo '</pre>';

?>
</body>
</html>