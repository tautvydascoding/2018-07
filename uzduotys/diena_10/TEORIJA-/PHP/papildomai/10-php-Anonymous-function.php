<?php

// //=====================Anonymous functions ¶===================
// Version 	Description
// 7.1.0 	Anonymous functions may not close over superglobals, $this, or any variable with the same name as a parameter.
// 5.4.0 	Anonymous functions may use $this, as well as be declared statically.
// 5.3.0 	Anonymous functions become available. 


    // 1. There is no function name between the function keyword and the opening parenthesis ('('). This tells PHP that you're creating an anonymous function.
    // 2. There is a semicolon after the function definition. This is because anonymous function definitions are expressions, whereas regular function definitions are code constructs.



$greet = function($name) {
    print("Hello" . $name);
};

$greet('World');
$greet('PHP');

// =============scopes=========
function foo() {
    $foo = 'bar';

    $bar = function () {
        // no access to $foo
        $baz = 'baz';
    };

    // no access to $baz
}

// https://www.elated.com/articles/php-anonymous-functions/
//============
// http://php.net/manual/en/functions.anonymous.php

$message = 'Testas11';

// No "use"
$example = function () {
    var_dump($message);  // ???
};
$example();



// Inherit $message
$example = function () use ($message) {
    print($message);  // 'Testas11'
};
$example();




// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world';
$example();




// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");

//-----
// Inherit by-reference
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world';
$example();

//===============

// A simple example of a closure
 
function getGreetingFunction() {
 
  $timeOfDay = "morning";
 
  return ( function( $name ) use ( &$timeOfDay ) {
    $timeOfDay = ucfirst( $timeOfDay ); 
    return ( "Good $timeOfDay, $name!" );
  } );
};
 
$greetingFunction = getGreetingFunction();
echo $greetingFunction( "Fred" ); // Displays "Good Morning, Fred!"	


