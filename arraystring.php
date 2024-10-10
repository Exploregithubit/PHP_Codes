<?php
//index array
$arr1=array("item1", "item2", "item3", "item4");
echo("<pre>");
print_r($arr1);
echo("</pre>");

//associative array
$arr2=array('first_name'=>'priyanka',
'last_name'=>'kukreti',
'education'=>'b.tech',
'city'=>'dehradun',
'contact'=> array("123456", "987654"),
'state'=>'uttarakhand',
'country'=>'india'
);
echo("<pre>");
print_r($arr2);
echo("</pre>");

//multidimentional array
$arr3=[1,2,3,4,5,6, 7];
$arr3=[1,
2,
3,
4,
5,
6=>[6.1, 6.2, 6.3,6.4],
7=>[7.1, 7.2, 7.3, 7.4, 7.5]];


echo("<pre>");
print_r($arr3);
echo("</pre>");

?>