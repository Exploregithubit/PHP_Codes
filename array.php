<?php
//index array
$arr1=array("item1", "item2", "item3","item4", "item5");
echo("<pre>");
print_r($arr1);
echo("</pre>");
//associcative array
$arr2=array('name'=>'priyanka',
'age'=>23,
'city'=>'dehradun',
'contact'=>array("123456", "987654"),
'state'=>'uttarakhand',
'country'=>'india',
'status'=>true
);
$arr2['education']="b.tech";
//multidimensional array
$arr3=[1,2,3,4,5,6,7,8];
$arr3=[1,
2,
3,
4=>[41,42,43,44],
5=>[51,52,53,54,55],
6,
7];

echo("<pre>");

print_r($arr2);
echo("</pre>");

echo("<pre>");

print_r($arr3);
echo("</pre>");




?>
