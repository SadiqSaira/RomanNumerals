<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    private RomanNumeral $romanNumeral;
     protected function setUp(): void
    {
        $this->romanNumeral = new RomanNumeral();
    }
    public function test_convert_to_basic_roman_numerals(): void
    {
        //numbers that convert into basic numerals
        $this->assertEquals("I", $this->romanNumeral->convert(1));
        $this->assertEquals("V", $this->romanNumeral->convert(5));
        $this->assertEquals("X", $this->romanNumeral->convert(10));
        $this->assertEquals("L", $this->romanNumeral->convert(50));
        $this->assertEquals("C", $this->romanNumeral->convert(100));
        $this->assertEquals("D", $this->romanNumeral->convert(500));
        $this->assertEquals("M", $this->romanNumeral->convert(1000));

    }

    public function test_convert_to_special_roman_numerals(): void
    {
        //number that convert into special case roman numeral
        $this->assertEquals("IV", $this->romanNumeral->convert(4));
        $this->assertEquals("IX", $this->romanNumeral->convert(9));
        $this->assertEquals("XL", $this->romanNumeral->convert(40));
        $this->assertEquals("XC", $this->romanNumeral->convert(90));
        $this->assertEquals("CD", $this->romanNumeral->convert(400));
        $this->assertEquals("CM", $this->romanNumeral->convert(900));
    }
    public function test_convert_to_composite_roman_numerals(): void
    {
        $romanNumeral = new RomanNumeral();

        //numbers between 1 to 5
        $this->assertEquals("II", $this->romanNumeral->convert(2));
        $this->assertEquals("III", $this->romanNumeral->convert(3));

        //numbers between 5 to 10
        $this->assertEquals("VI", $this->romanNumeral->convert(6));
        $this->assertEquals("VII", $this->romanNumeral->convert(7));
        $this->assertEquals("VIII", $this->romanNumeral->convert(8));

        // numbers between 10 to 50
        $this->assertEquals("XII", $this->romanNumeral->convert(12));
        $this->assertEquals("XXX", $this->romanNumeral->convert(30));
        $this->assertEquals("XXXI", $this->romanNumeral->convert(31));
        $this->assertEquals("XL", $this->romanNumeral->convert(40));

        //numbers between 50 to 100
        $this->assertEquals("LII", $this->romanNumeral->convert(52));
        $this->assertEquals("LX", $this->romanNumeral->convert(60));
        $this->assertEquals("LXXX", $this->romanNumeral->convert(80));
        $this->assertEquals("LXXXI", $this->romanNumeral->convert(81));

        // numbers between 100 to 500
        $this->assertEquals("CII", $this->romanNumeral->convert(102));
        $this->assertEquals("CCI", $this->romanNumeral->convert(201));
        $this->assertEquals("CCC", $this->romanNumeral->convert(300));

        //numbers between 500 to 1000
        $this->assertEquals("DII", $this->romanNumeral->convert(502));
        $this->assertEquals("DCI", $this->romanNumeral->convert(601));
        $this->assertEquals("DCC", $this->romanNumeral->convert(700));

        //numbers between 1000 to 3999
        $this->assertEquals("MC", $this->romanNumeral->convert(1100));
        $this->assertEquals("MMM", $this->romanNumeral->convert(3000));
        $this->assertEquals("MMMCMXCIX", $this->romanNumeral->convert(3999));
    }
    public function test_convert_out_range_number_to_roman_numerals(): void
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals("", $this->romanNumeral->convert(0));
        $this->assertEquals("", $this->romanNumeral->convert(-45));
        $this->assertEquals("", $this->romanNumeral->convert(4000));

    }
        
}