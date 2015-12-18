<?php

namespace sot_learn\sot_classes
{



class Person 
{
	/* when we declare class variables/properties with var they are public, you can access them outside the class
	Look at the code below the class definition 
	*/
	private $first_name;
	private $last_name;
	
	private $arm_count;
	private $leg_count;

    /**
     * Person constructor.
     */
    function __construct()
    {
        $this->first_name = "Sotiris";
        $this->last_name = "Fanou";
        $this->arm_count = 2;
        $this->leg_count = 2;
        echo "The constructor is running right now <br />";
    }

    /**
     *
     */
    function say_hello()
    {
        echo "Hello from the function Person.say_hello()" . "<br />";
    }

    function get_full_name()
    {
		return $this->first_name . " " . $this->last_name; 
		//notice that he has to use $this for class properties maybe because by default they are declared public
	}

    /**
     * @return int
     */
    function get_arm_count()
    {
        return $this->arm_count;
        //notice that he has to use $this for class properties maybe because by default they are declared public
    }

    public function get_leg_count()
    {
        return $this->leg_count;
    }

    function __destruct()
    {

        echo "The destruct method is now run. <br />";

    }
}

}
