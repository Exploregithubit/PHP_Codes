<!-- //pre-defined functions -->
<?php
$x=array("item1",
"item2",
"item3", 
"item4",
"item5",
"item6");
$chunked= array_chunk($x, 2);
echo "<pre>";
// by chunked function we can partition the array list in difference section
print_r($chunked);
echo"</pre>";
 // here by slice function we can slice whole array list into differnce size
$sliced=array_slice($x, 4);
echo"<pre>";
print_r($sliced);
echo"</pre>";
echo array_search('item3', $x);

echo"<pre>";
print_r($x);
echo"</pre>";

echo "<pre>";
// by count function we can count total number of element present in array list
print_r(count($x));
echo "</pre>";


$y=array("item7",
"item8", 
"item10",
"item11",
"item12",
"item13");
// pushing an element 
echo array_push($y, 'item23');
// now we have popped that element
$popped=array_pop($y );
print_r($popped);


// by array search pre-defined function we can search any element from the  array list
echo array_search('item13', $y);

echo"<pre>";
print_r($y);
echo"</pre>";
//by  array merge function  we can join two seperate array
$z=array_merge($x, $y);


echo"<pre>";
print_r($z);
echo"</pre>";



?>

