<?php
//**************Task 2 Person class task***********//
class Person
{
   
    public $email;
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
       return $this->email;
    }
}
$newPerson=new Person();
$newPerson->setEmail("saidulislam7733@gmail.com");
$newPerson->setName("Saidul Islam");
echo "Name: " . $newPerson->getName() . "<br/>";
echo "Email: " .$newPerson->getEmail();
