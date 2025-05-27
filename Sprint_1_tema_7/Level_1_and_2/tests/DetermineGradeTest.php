<?php
require_once __DIR__ . "/../src/DetermineGrade.php";
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
class DetermineGradeTest extends TestCase {
    #[DataProvider('addDataTestGrade')]
    public function testDetermineGrade($number, $expected) {
        $this->assertSame ($expected, determineGrade($number));
    }
    public static function addDataTestGrade() : array {
        return [
            [61, "Student grade: First division"],
            [60, "Student grade: First division"],
            [59, "Student grade: Second division"],
            [45, "Student grade: Second division"],
            [44, "Student grade: Third division"],
            [33, "Student grade: Third division"],
            [32, "Failed student"],
        ];
    }
}