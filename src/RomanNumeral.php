<?php
class RomanNumeral
{
    public function convert(int $number): string
    {
        
        // Roman Numeral array contains basic and special case roman numerals 
        $romanNumerals = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];
       
        $result = '';
        // Return the corresponding Roman numeral if it exists in the array
        if ($number>0 && $number< 4000) {
            while($number > 0) {
                foreach ($romanNumerals as $num => $roman ) {
                    if($number >= $num) {
                        $quotient = intdiv($number, $num);
                        $result .= str_repeat($roman,$quotient);
                        $number -= $quotient * $num;
                    }
                }
            }
        }
        return $result; 
    }
}
