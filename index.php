<?php
    class Test_Class{
        public $name = null;
        public $age = null;
        public $job = null;
        
        function __construct($name,$age,$job){
            $this->name = $name;
            $this->age = $age;
            $this->job = $job;
            echo "Name is:".$name."\n";
            echo "Age is:".$age."\n";
            echo "Job is:".$job."\n";
        }

        function output(){
            echo "222\n";
        }
    }
    
    $obj = new Test_Class("Frank8","38","IT");
    //echo $obj->name."\n";
    //$obj->output();