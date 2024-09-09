<u><h3>Q1.- What Is Object Oriented Programming?</h3></u>
<h3><u>A1.-</u> Object Oriented Programming is programming language principle that helps in building complex, reusable web applications.Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.<br/>
<li>Object Oriented Programming is faster and easier to execute<br/></li>
<li>Object Oriented Programming is provides a clear structure for the programs<br/></li>
<li>Object Oriented Programming is helps to keep the PHP code easier to maintain, modify and debug<br/></li></h3>

<u><h3>Q2.-  What Are Properties Of Object Oriented Systems?</h3></u>
<h3><u>A2.-</u> Inheritance,abstraction,encapsulation and polymorphism are the properties of Object Oriented Systems.</h3>

<u><h3>Q3.- What Is Difference Between Class And Interface?</h3></u>
<h3><u>A3.-</u> <u>class</u> is a collection of methods/function/properties shared by all objects of the same type.<br/>
Childe class use parant Class by EXTENDS keywords in inheritance and class dont support multipul inheritance.<br/>
class object can be created<br/>
class Allows you to contain constructors<br/>
 <u>Interface</u> is a blueprint of class<br/>
 Interface use only abstract function/method<br/>
 interface use multipul inheritance<br/>
 interface use interface by EXTENDS<br/>
 interface use class by IMPELEMENTS<br/>

 <u><h3>Q4.- What Is Overloading?</h3></u>
 <h3><u>A4.-</u> Aoverloading is to create multiple functions of the same name with different implementations and different parameters.</h3><br/>

 <u><h3>Q5.- What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::)) with Example</h3></u>
 <h3><u>A5.-</u> Through Scope Resolution Operator ew can access the properties and methods of the class.<br/>
 <u>Exampale</u><br/>
 class parent{                                       <br/>
                                                     <br/>
  public function myfun()                            <br/>
  {                                                  <br/>
      echo "myfun() of parent class\n ";             <br/>
  }                                                  <br/>
}                                                    <br/>
                                                     <br/>
class child extends parent {                         <br/>                                                      
                                                     <br/>
  public function myfun(){                           <br/>
                                                     <br/>
       // Calling parent's version                   <br/>
       // of myfun() method                          <br/>
      parent::myfun();                               <br/>
                                                     <br/>
      echo "myfun() of child class";                 <br/>
  }                                                  <br/>
}                                                    <br/>
                                                     <br/>
$class = new child;                                  <br/>
$class -> myfunc()                                   <br/>
</h3><br/>

<u><h3>Q6.- What are the differences between abstract classes and interfaces?</h3></u>
<h3><u>A6.-</u> <u>Abstract</u> class and <u>interface</u> both are used to achieve abstraction where we can declare the abstract methods.<br/>
The abstract keyword is used to declare abstract class.<br/>
Abstract class can have abstract and non-abstract methods.<br/>
Abstract class doesn't support multiple inheritance.<br/>
Abstract class can provide the implementation of interface.<br/>
An abstract class can be extended using keyword "extends".<br/>
<u>interface</u><br/>
The interface keyword is used to declare interface.<br/>
Interface can have only abstract methods.<br/>
Interface supports multiple inheritance.<br/>
Interface can't provide the implementation of abstract class.<br/>
An interface can be implemented using keyword "implements".<br/>
</h3><br/>

<u><h3>Q7.- Define Constructor and Destructor?</h3></u>
<h3><u>A7.-</u> Constructor and destructor are megic/special methods in object-oriented programming that are automatically called when object is created.<br/>
The constructor's name is always __construct, and it can accept parameters that are passed to the object.<br/>
The destructor's name is always __destruct, and it cannot accept any parameters.<br/>
The destructor's main purpose is to Releasing memory,perform any cleanup or finalization tasks for the object, such as closing database connections, releasing resources, or flushing buffers.<br/></h3>

<u><h3>Q8.- How to Load Classes in PHP?</h3></u>





<u><h3>Q9.- How to Call Parent Constructor?</h3></u>
<h3><u>A9.-</u> By Scope Resolution Operator we can call parent Constructor.<br/>
<u>Example.</u><br/>

   class parent{                                        <br/>
      public function __construct(){                    <br/>
         echo "I am in parent class";                   <br/>                                                     
      }                                                 <br/>
   }                                                    <br/>
   class child extends parent{                          <br/>                    
      public function __construct(){                    <br/>
         parent::__construct();                         <br/>
         echo "I am not in parent class";               <br/>
      }                                                 <br/>
   }                                                    <br/>
$obj = new child();                                     <br/>
                                                        <br/>
</h3>

<u><h3>Q10.- Are Parent Constructor Called Implicitly When Create An ObjectOf Class?</h3></u>
<h3><u>A10.-</u> Parent constructors are not called implicitly(confused to call) if the child class defines a constructor.<br/>
In order to run a parent constructor, a call to parent::__construct() within the child constructor is required.</h3>


<u><h3>Q11.- What Happen, If Constructor Is Defined As Private Or Protected?</h3></u>
<h3><u>A11.-</u> If a constructor is Defined As Private Or Protected, we can't create an object of the class, except within the class.<br/>
if we defined a constructor as private we cant accessout side of class but we accessto use of scop Resolution Operator.<br/>
if we defined a constructor as protected we make parant and childe class (inheritance).<br/> If we pass the data from parant class to childclass that case we use protected and always make object of child class.<br/>It also cant access out side of class.
</h3>



<u><h3>Q12.- What are PHP Magic Methods/Functions? List them</h3></u>
<h3><u>A12.-</u> Magic methods are special methods that are called automatically when we create object of class.List is below<br/>
<li>__construct()</li>
<li>__destruct()</li>
<li>__isset()</li>
<li>__set()</li>
<li> __unset()</li>
<li> __serialize()</li>
<li>__unserialize()</li>
<li>__get()</li>
<li>__call()</li>
<li>__sleep()</li>
<li>__wakeup()</li>
<li>__clone()</li>
<li>__debugInfo()</li>
<li>__set_state()</li>
<li>__invoke()</li></h3>

<u><h3>Q13.- Write program for Static Keyword in PHP?</h3></u>
<h3><u>A13.-</u>                                                <br/>
class demo                                               <br/>
{                                                        <br/>
                                                         <br/>
function test()                                          <br/>
{                                                        <br/>
    $a=1;                                                <br/>
    static $b=1;                                         <br/>
    echo $a." ".$b."<br>";                               <br/>
  $a++;                                                  <br/>
  $b++;                                                  <br/>
}                                                        <br/>
                                                         <br/>
                                                         <br/>
}                                                        <br/>
$obj = new demo;                                         <br/>
$obj->test();                                            <br/>
$obj->test();                                            <br/>
$obj->test();                                            <br/>
$obj->test();                                            <br/>


<h3><u>OUTPUT:-</u><br/>
1 1 <br/>
1 2 <br/>
1 3 <br/>
1 4 <br/>
</h3>

<u><h3>Q14.- Create multiple Traits and use it in to a single class?</h3></u>
<h3><u>A14.-</u><br/>
trait x                                                      <br/>
{                                                            <br/>
    function x1()                                            <br/>
    {                                                        <br/>
        echo  "x1 function";                                 <br/>
    }                                                        <br/>
                                                             <br/>
}                                                            <br/>
                                                             <br/>
trait y                                                      <br/>
{                                                            <br/>
    public $q;                                               <br/>
    function y1($qx)                                         <br/>
    {                                                        <br/>
        $q=$qx;                                              <br/>
        echo  $q." y1 function";                             <br/>
    }                                                        <br/>
                                                             <br/>
}                                                            <br/>
                                                             <br/>
class a                                                      <br/>
{                                                            <br/>
    use x,y;                                                 <br/>
}                                                            <br/>
                                                             <br/>
$obj= new a;                                                 <br/>
$obj->x1();                                                  <br/>
$obj->y1(25);                                                <br/>



<h3><u>OUTPUT:-</u><br/>
x1 function <br/>
25 y1 function <br/>
</h3>


<u><h3>Q15.- Write PHP Script of Object Iteration?</h3></u>
<h3><u>A15.-</u><br>
<?php
    class MyClass
    {
        public $var1 = 'value 1';
        public $var2 = 'value 2';
        public $var3 = 'value 3';

        protected $protected = 'protected var';
        private   $private   = 'private var';

        function iterateVisible() {
        echo "MyClass::iterateVisible:<br>";
        foreach ($this as $key => $value) {
            print "$key => $value <br>";
        }
        }
    }

    $class = new MyClass();

    foreach($class as $key => $value)
    {
        print "$key => $value <br>";
    }
    echo "<br>";


    $class->iterateVisible();

?>
 </h3>


<u><h3>Q16.- Use of The $this keyword</h3></u>
<h3><u>A16.-</u> $this is a In built keyword that refers or to the calling object in current methods, classes and inheritance. not work out of this things.</h3>