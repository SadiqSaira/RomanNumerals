<?php
class RomanNumeral
{
    public function convert(int $number): string
    {
        // Define an array to map numbers to their corresponding Roman numerals
        $romanNumerals = [
            1 => 'I',
            4 => 'IV',
            5 => 'V',
            9 => 'IX',
            10 => 'X',
            40 => 'XL',
            50 => 'L',
            90 => 'XC',
            100 => 'C',
            400 => 'CD',
            500 => 'D',
            900 => 'CM',
            1000 => 'M',
            2 => 'II',
            3 => 'III',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            12 => 'XII',
            30 => 'XXX',
            31 => 'XXXI',
            52 => 'LII',
            60 => 'LX',
            80 => 'LXXX',
            81 => 'LXXXI',
            102 => 'CII',
            201 => 'CCI',
            300 => 'CCC',
            502 => 'DII',
            601 => 'DCI',
            700 => 'DCC',
            1100 => 'MC',
            3000 => 'MMM',
            3999 => 'MMMCMXCIX',
        ];

        // Return the corresponding Roman numeral if it exists in the array
        if (isset($romanNumerals[$number])) {
            return $romanNumerals[$number];
        }

        // If the number is not found, return an empty string
        return '';
    }
}
