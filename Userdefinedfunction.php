
<!-- //user-defined functions -->
<?php
function p($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

    $x= array("item1",
    "item2",
    "item3",
    "item4");

    p($x);
    


    function vote($age){
        if($age>=18 && $age<=65){
            return "yes You can vote";
        }else{
            return "no, you cannot vote";


        }
    }
    echo vote(24);
    echo "<pre/>";
    echo vote(14);
   echo "<pre/>";

    echo vote(76);
   echo "<pre/>";

// echo "age.24; ".vote(24),
// "<br/>"
// echo "age.15; ".vote(age: 16)
// "<br/>",







?>