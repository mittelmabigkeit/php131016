<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 13.10.2016
 * Time: 15:10
 */
require_once 'MyClass.php';
/*$obj= New MyClass (2,3);
$obj -> umn();
$as = $obj -> vivod();
echo $as;
echo "</br>";
$sa = $obj -> izm();
echo $sa;
echo "</br>";

$obj_one = $obj;
$obj_one -> umn();
$asas = $obj_one -> vivod();
echo $asas;
echo "</br>";

$obj_two = clone $obj;
$obj_two -> umn();
$asasas = $obj_two -> vivod();
echo $asasas;
echo "</br>";

echo MyClass::$d;
echo "</br>";
*/
for ($objs=array(),$i=0;$i<6;$i++)
    $objs[]= new MyClass();
echo "now created {$objs[0]->getCount()} objects.</br>";
$objs[5]=null;
echo "and now - {$objs[0]->getCount()} objects.</br>";
$objs=array();
echo "finally we have - ".MyClass::getCount()." objects.</br>";
?>