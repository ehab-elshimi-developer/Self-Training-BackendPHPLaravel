<?php

require_once './classes/Student.php';
require_once './classes/StudentManager.php';

use Students\StudentManager;

// Initialize StudentManager
$student_manager = new StudentManager();

echo "Welcome To Student Manager!\n";
echo "----------------------------\n";

while (true) {
    echo "\nChoose an option:\n";
    echo "1. Add Student\n";
    echo "2. Remove Student\n";
    echo "3. Update Student Grade\n";
    echo "4. Display Students\n";
    echo "5. Exit\n";
    echo "----------------------------\n";
    echo "Enter your choice: ";

    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case "1":
            echo "Enter student name to add: ";
            $name = trim(fgets(STDIN));

            echo "Enter student grade to add: ";
            $grade = trim(fgets(STDIN));

            $student_manager->add_student($name, $grade);
            break;

        case "2":
            echo "Enter student name to delete: ";
            $name = trim(fgets(STDIN));

            $student_manager->remove_student($name);
            break;

        case "3":
            echo "Enter student name to update: ";
            $name = trim(fgets(STDIN));

            echo "Enter new student grade: ";
            $grade = trim(fgets(STDIN));

            $student_manager->update_student($name, "", $grade);
            break;

        case "4":
            $student_manager->display_students();
            break;

        case "5":
            echo "Exiting... Goodbye!\n";
            exit;

        default:
            echo "Invalid option. Please try again.\n";
            break;
    }
}
