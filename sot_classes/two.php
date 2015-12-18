<?php


namespace sot_learn\sot_classes
{

    class two
    {
        function say_hello()
        {
            echo "Hello from inside a class.<br />";
        }
    }

    $methods = get_class_methods('two');
    foreach($methods as $method) {
        echo $method . "<br />";
    }

    if(method_exists('two', 'say_hello'))
    {
        echo "Method does exist.<br />";
    } else {
        echo "Method does not exist.<br />";
    }
}
?>