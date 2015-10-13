<?php
//echo "{$_POST["firstname2"]} and {$_POST["surname2"]} have been received";
//mycallback({"name":"Ravishanker","age":32,"location":"India"});
/*    
	$arr['name']="Ravishanker";
    $arr['age']=32; 
    $arr['location']="India";   


,
        failure:function(data){
        alet("failed");
        }


    */
//$tmp=$_POST["firstname2"]." and  have been received";  //post seems not to work!
$tmp=$_GET["firstname2"]." and  have been received";
 $callback ='mycallback';
 
    if(isset($_GET['mycallback']))
    {
        $callback = $_GET['mycallback'];
    }   
    $arr =array();
    $arr['returnData']=$tmp;
    //add more rows to the array
 
    echo $callback.'(' . json_encode($arr) . ')';
?>
