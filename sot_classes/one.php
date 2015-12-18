<?php

namespace sot_learn\sot_classes;

class one
{
	
}

//$sot_classes = get_declared_classes();
//foreach($sot_classes as $class) {
//	echo $class ."<br />";
//}

if(class_exists("one"))
{
	echo "That class has been defined.<br />";
} else
{
	echo "Class not defined!<br />";
}

?>