<?php
class student
{
    public $name;
    public $rollno;
    public $marks;

     
    public function setname($n,$r,$m)
    {
        $this->name=$n;
        $this->rollno=$r;
        $this->marks=$m;
    }
    public function getname()
    {
        return "Name : $this->name <br> Rollno : $this->rollno <br> Mark: $this->marks";
    }
}

   $obj=new student();
   $obj->setname('vidhu',10,80);
   echo $obj->getname();

?>
