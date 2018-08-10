<?php

// stdClass is PHP's generic empty class

// It is useful for anonymous objects, dynamic properties, etc.
// 
// An easy way to consider the StdClass is as an alternative to associative array. See this example below that shows how json_decode() allows to get an StdClass instance or an associative array.

// ===========You can create a anonymous PHP class======
// Using stdClass you can create a new object with it's own properties.

$array_user = array();
$array_user["name"] = "smith john";
$array_user["username"] = "smith";
$array_user["id"] = "1002";
$array_user["email"] = "smith@nomail.com";
// OR
$obj_user = new stdClass;
$obj_user->name = "smith john";
$obj_user->username = "smith";
$obj_user->id = "1002";
$obj_user->email = "smith@nomail.com";
// OR
$x = (object) [
    'smith john',
    'smith',
    '1002',
    'smith@nomail.com'
];
var_dump($x);

        // object(stdClass)#1 (3) {
        //   ["a"]=>
        //   string(4) "test"
        //   ["b"]=>
        //   string(5) "test2"
        //   ["c"]=>
        //   string(5) "test3"
        // }
// OR
$y = (object) [
    'a' => 'test',
    'b' => 'test2',
    'c' => 'test3'
];

// $GLOBASLS['myObj']->myPropertyObj->myProperty = 'myVal';


//  ============= Example json_decode with StdClass =============
$json = '{ "foo": "bar", "number": 42 }';
$stdInstance = json_decode($json);
echo $stdInstance->foo . PHP_EOL; //"bar"
echo $stdInstance->number . PHP_EOL; //42

//Example with associative array
$array = json_decode($json, true);
echo $array['foo'] . PHP_EOL; //"bar"
echo $array['number'] . PHP_EOL; //42


?>