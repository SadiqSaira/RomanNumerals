<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    public function test_convert_to_basic_roman_numerals(): void
    {
        $romanNumeral = new RomanNumeral();
        //numbers that convert into basic numerals
        $this->assertEquals("I", $romanNumeral->convert(1));
        $this->assertEquals("V", $romanNumeral->convert(5));
        $this->assertEquals("X", $romanNumeral->convert(10));
        $this->assertEquals("L", $romanNumeral->convert(50));
        $this->assertEquals("C", $romanNumeral->convert(100));
        $this->assertEquals("D", $romanNumeral->convert(500));
        $this->assertEquals("M", $romanNumeral->convert(1000));

    }

    public function test_convert_to_special_roman_numerals(): void
    {
        $romanNumeral = new RomanNumeral();
        //number that convert into special case roman numeral
        $this->assertEquals("IV", $romanNumeral->convert(4));
        $this->assertEquals("IX", $romanNumeral->convert(9));
        $this->assertEquals("XL", $romanNumeral->convert(40));
        $this->assertEquals("XC", $romanNumeral->convert(90));
        $this->assertEquals("CD", $romanNumeral->convert(400));
        $this->assertEquals("CM", $romanNumeral->convert(900));
    }
    public function test_convert_to_composite_roman_numerals(): void
    {
        $romanNumeral = new RomanNumeral();

        //numbers between 1 to 5
        $this->assertEquals("II", $romanNumeral->convert(2));
        $this->assertEquals("III", $romanNumeral->convert(3));

        //numbers between 5 to 10
        $this->assertEquals("VI", $romanNumeral->convert(6));
        $this->assertEquals("VII", $romanNumeral->convert(7));
        $this->assertEquals("VIII", $romanNumeral->convert(8));

        // numbers between 10 to 50
        $this->assertEquals("XII", $romanNumeral->convert(12));
        $this->assertEquals("XXX", $romanNumeral->convert(30));
        $this->assertEquals("XXXI", $romanNumeral->convert(31));
        $this->assertEquals("XL", $romanNumeral->convert(40));

        //numbers between 50 to 100
        $this->assertEquals("LII", $romanNumeral->convert(52));
        $this->assertEquals("LX", $romanNumeral->convert(60));
        $this->assertEquals("LXXX", $romanNumeral->convert(80));
        $this->assertEquals("LXXXI", $romanNumeral->convert(81));

        // numbers between 100 to 500
        $this->assertEquals("CII", $romanNumeral->convert(102));
        $this->assertEquals("CCI", $romanNumeral->convert(201));
        $this->assertEquals("CCC", $romanNumeral->convert(300));

        //numbers between 500 to 1000
        $this->assertEquals("DII", $romanNumeral->convert(502));
        $this->assertEquals("DCI", $romanNumeral->convert(601));
        $this->assertEquals("DCC", $romanNumeral->convert(700));

        //numbers between 1000 to 3999
        $this->assertEquals("MC", $romanNumeral->convert(1100));
        $this->assertEquals("MMM", $romanNumeral->convert(3000));
        $this->assertEquals("MMMCMXCIX", $romanNumeral->convert(3999));
    }
    public function test_convert_out_range_number_to_roman_numerals(): void
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals("", $romanNumeral->convert(0));
        $this->assertEquals("", $romanNumeral->convert(-45));
        $this->assertEquals("", $romanNumeral->convert(4000));

    }
        
}