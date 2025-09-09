<?php
require_once "./classes/Student.php";
require_once "./classes/StudentManager.php";

use Students\Student;
use Students\StudentManager;


$studentManager = new StudentManager();
$studentManager->add_student("ehab", 16);
$studentManager->add_student("ehab2", 16);
$studentManager->add_student("ehab3", 16);
$studentManager->add_student("ehab4", 16);
$studentManager->add_student("ehab5", 16);

$studentManager->display_students();
echo "-------------------------------\n";
$studentManager->remove_student("ehab");
echo "-------------------------------\n";
$studentManager->remove_student("ehab4");
echo "------------------------------\n";
$studentManager->update_student("ehab2", "hamamda", 86);
