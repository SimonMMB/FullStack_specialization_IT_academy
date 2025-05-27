<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Testing\NumberChecker;

class NumberCheckerTest extends TestCase {
    #[DataProvider('addDataTestIsEven')]
    public function testIsEven($number, $expected) {
        $numberChecker = new NumberChecker($number);
        $this->assertSame ($expected, $numberChecker->isEven());
    }
    public static function addDataTestIsEven() : array {
        return [
            [4, true],
            [5, false],
            [0, true]
        ];
    }
    #[DataProvider('addDataTestIsPositive')]
    public function testIsPositive($number, $expected) {
        $numberChecker = new NumberChecker($number);
        $this->assertSame ($expected, $numberChecker->isPositive());
    }
    public static function addDataTestIsPositive() : array {
        return [
            [4, true],
            [-4, false],
            [0, false]
        ];
    }
}
?>