<?php

interface IStringfy
{
    function toString(): string;
}

interface ICountable
{
    function Count(): int;
}

class Person
{
    const MIN_AGE = 18;
    public string $name = "noname";
    protected  static int $secret = 42;
    // public $number = sqr(5); // не можна вирази

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): void
    {
        $this->name = $value;
    }

    public function __construct(string  $name = "noname")
    {
        $this->name = $name;
    }

    public static function getSecret(): int
    {
        return static::$secret;
    }
}

class Student extends Person implements ICountable, IStringfy
{
    protected int $course;
    public static string $proffesion = "student";
    protected  static int $secret = 12;

    public  function __construct(string $name = "noname", int $course = 1)
    {
        parent::__construct($name);
        $this->course = $course;
    }

    public static function printProffesion(): void
    {
        echo "My profession is " . self::$proffesion . "<br>";
    }
    private array $props = [];
    function __set($name, $value)
    {
        echo "<br> __set call ". $name .":". $value. "<br>";
        $this->props[$name] = $value;
    }

    function  __get($name)
    {
        echo "<br> __get call ". $name . "<br>";
        return $this->props[$name];
    }

    public function toString(): string
    {
        return $this->name;
    }

    public function Count(int $var=1): int
    {
        return static::$secret;
    }

    function __call(string $name , array $arguments )
    {
        echo "__call" ;
        var_dump($name);
        var_dump($arguments);
    }
}

$yurii = new Student();
$yurii->name = "Yurii";
//$yurii->setName("Yurii");
var_dump(Student::getSecret());

$yurii->surname = "Andrashko";
var_dump($yurii->toString());
var_dump(Person::MIN_AGE);

$yurii->method (5);
