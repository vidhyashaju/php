<?php
class student
{
    public $name;
    public $rollno;

    public function setname($n,$r)
    {
        $this->name=$n;
        $this->rollno=$r;
    }
    public function getname()
    {
        return " Name :$this->name   Rollno: $this->rollno";
    }
}
$obj=new student();
$obj->setname("arun",5);
 echo $obj->getname();
?>