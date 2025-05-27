<?php
function determineGrade(int $number) : string {
    $grades = [
        [60, "Student grade: First division"],
        [45, "Student grade: Second division"],
        [33, "Student grade: Third division"],
        [0, "Failed student"]
    ];
    foreach ($grades as [$lowerLimit, $message]) {
        if ($number >= $lowerLimit) {
            return $message;
        }
    }
}
?>