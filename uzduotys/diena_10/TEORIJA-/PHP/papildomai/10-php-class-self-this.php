<?php

// The problem is that you can replace $this->method() with self::method() anywhere, regardless if method() is declared static or not. So which one should you use?
// 
// Consider this code:

class ParentClass {
    function test() {
        self::who();    // will output 'parent'
        $this->who();    // will output 'child'
    }

    function who() {
        echo 'parent';
    }
}

class ChildClass extends ParentClass {
    function who() {
        echo 'child';
    }
}

$obj = new ChildClass();
$obj->test();

// In this example, self::who() will always output ‘parent’, while $this->who() will depend on what class the object has.
// 
// Now we can see that self refers to the class in which it is called, while $this refers to the class of the current object.
// 
// So, you should use self only when $this is not available, or when you don’t want to allow descendant classes to overwrite the current method.



//============== static

// you can use 'static' as scope value as in below example (add flexibility to inheritance mechanism compared to 'self' keyword...)



class A {
    const C = 'constA';
    public function m() {
        echo static::C;
    }
}

class B extends A {
    const C = 'constB';
}

$b = new B();
$b->m();   // output: constB 

?>