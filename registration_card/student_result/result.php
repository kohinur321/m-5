<?php
function calculateResult($marks) {
    // Validate marks
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
    }

    // Check for failure condition
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has failed.\n";
            return;
        }
    }

    // Calculate total and average marks
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Determine the grade
    switch (true) {
        case ($averageMarks >= 80):
            $grade = "A+";
            break;
        case ($averageMarks >= 70):
            $grade = "A";
            break;
        case ($averageMarks >= 60):
            $grade = "A-";
            break;
        case ($averageMarks >= 50):
            $grade = "B";
            break;
        case ($averageMarks >= 40):
            $grade = "C";
            break;
        case ($averageMarks >= 33):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output results
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade\n";
}

// Example input
$marks = [78, 85, 92, 67, 56]; // You can change these marks to test

calculateResult($marks);
?>
