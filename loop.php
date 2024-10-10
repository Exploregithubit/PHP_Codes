<!-- //print the table of any number using any of the loop  -->
<?php

for($i=1; $i<=10; $i++){
    $num=512;
    echo $num."x".$i."=".$i*$num."<br/>";
    }

$i=1;

while($i<=10){

    $num=5;
    echo $num."x".$i."=".$i*$num."<br/>";
    $i++;
}


$i=1;
do{
    $num=8;
    echo $num."x".$i."=".$i*$num."<br/>";
    $i++;
}while($i<=10)

?>