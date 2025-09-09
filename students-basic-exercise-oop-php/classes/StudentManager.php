<?php
namespace Students;
class StudentManager{
    private $students =[];
    public function add_student($name, $grade)
    {
        $this->students[$name] = new Student($name, $grade);
    }
    public function display_students()
    {
        if(empty($this->students)){
            echo "No Students";
        }else{
            foreach ($this->students as $student){
                echo $student->getName() . " => " . ($student->getGrade() + 14) . "\n";
            }
        }
    }

    public function update_student($name, $n="", $g=0){
        $isExist = isset($this->students[$name]);
        if ($isExist){
            if($n != ""){
                $this->students[$name]->setName($n);
            }
            if($g != 0){
                $this->students[$name]->setGrade($g);
            }


            $this->display_students();
        }else{
            echo "Student $name does not exist in array";
            $this->display_students();
        }
    }
    public function remove_student($name){
        $isExist = isset($this->students[$name]);
        if ($isExist){
            unset($this->students[$name]);
            $this->display_students();
        }else{
            echo "Student $name does not exist in array";
            $this->display_students();
        }
    }

}
