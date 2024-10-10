


<!-- // print number from 1 to 10 -->
<?php
//while loop 
// print series of number from 1 to 10
$i=1;
while($i<=10){
    echo"<pre>";
    print_r($i);
    echo"</pre>";
    $i++;
}



//using for loop
// it optimization the line of code


for($i=1; $i<=10; $i++){

echo "<pre>";
    print_r($i);
    echo"</pre>";


}


//using do-while loop 

$i=1;
do{

echo $i."<br/>";
$i++;
}
while($i<=10);





?>