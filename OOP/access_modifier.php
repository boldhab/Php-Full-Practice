//access modifrier in PHP
// Access modifiers in PHP are keywords that define the visibility and accessibility of class properties and methods.
// There are three access modifiers in PHP: public, private, and protected. 
// 1. Public: Properties and methods declared as public can be accessed from anywhere, both inside and outside the class.
// 2. Private: Properties and methods declared as private can only be accessed from within the class itself. They cannot be accessed from outside the class or from subclasses.
// 3. Protected: Properties and methods declared as protected can be accessed from within the class itself and from subclasses, but not from outside the class.
<?php
class MyClass {
    public $publicProperty = "I am public";
    private $privateProperty = "I am private";
    protected $protectedProperty = "I am protected";

    public function publicMethod() {
        return "This is a public method.";
    }

    private function privateMethod() {
        return "This is a private method.";
    }

    protected function protectedMethod() {
        return "This is a protected method.";
    }
}
$obj = new MyClass();
// Accessing public property and method
echo $obj->publicProperty; // Output: I am public
echo $obj->publicMethod(); // Output: This is a public method.      
// Accessing private property and method (will cause an error)
// echo $obj->privateProperty; // Error: Cannot access private property
// echo $obj->privateMethod(); // Error: Cannot access private method
// Accessing protected property and method (will cause an error)
// echo $obj->protectedProperty; // Error: Cannot access protected property
// echo $obj->protectedMethod(); // Error: Cannot access protected method
?>