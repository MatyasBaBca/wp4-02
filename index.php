<?php
require_once 'classes/computer.php';
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <title>Document</title>
</head>
<body>
<?php
$pc1 = new Computer ;
$pc1->CPU = 'i5 3,6 GHz';
$pc1->GPU = 'Nvidia 3080 GTX';
$pc1->RAM = 'HyperX 32 GB';
$pc1->SSD = 'Kingston A400 500GB';
$pc1->case = 'Zalman S8';
$pc1->MB = 'ASUS ROG Strix';
$pc1->mouse = 'A4tech Bloody v8';

$pc2 = new Computer ;
$pc2->CPU = 'i7 3,6 GHz';
$pc2->GPU = 'Nvidia GeForce GTX 1060';
$pc2->RAM = 'HyperX 16 GB';
$pc2->SSD = 'Kingston A400 250GB';
$pc2->case = 'Zalman S3';
$pc2->MB = 'Strix ASUS GT23 ';
$pc2->mouse = 'A2tech Bloody v4';
var_dump($pc1);
var_dump($pc2);



?>



</body>
</html>
