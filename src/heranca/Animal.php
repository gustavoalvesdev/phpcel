<?php 

class Animal
{

    public $name;

    public function sleep()
    {
        return $this->name  . ' is sleeping...';
    }

}

class Dog extends Animal
{
    public function sleep()
    {
        return $this->name . ' dog is sleeping';
    }
}

class Bird extends Animal
{
    public function sleep()
    {
        print parent::sleep() . ' with its parent';
    }
}

$dog = new Dog();
$dog->name = 'Ted';

print $dog->sleep();

print "\n";

$bird = new Bird();

$bird->name = 'Bird';

print $bird->sleep();
