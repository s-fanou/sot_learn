<?php

class three
{
	function say_hello() {
		echo "Hello from inside a class.<br />";
	}
}

$person = new three();
$person2 = new three();

echo get_class($person) . "<br />"; // This will return what type of class this object (variable) is

if(is_a($person, 'three')) {
	echo "Yup, it's of type class three.<br />";
} else {
	echo "Not of class type three.<br />";
}

$person->say_hello();


?>