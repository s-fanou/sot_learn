<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/10/2015
 * Time: 15:41
 */

//I added this line here at 16.17 - 18.12.2015 as a test line for git

namespace sot_learn\sot_classes

{

    require_once 'person.php';

    $person = new Person();

    $person->say_hello();

    echo "The arm count of this person is " . $person->get_arm_count() . "<br />";
    echo "The person's full name is {$person->get_full_name()} <br />";

    //TODO I have to look at the definition of the if then statement below
    echo property_exists('Person', '$first_name') ? 'property first_name exists <br />' : 'property first_name does not exist <br />';
}
