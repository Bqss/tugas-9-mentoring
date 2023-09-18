<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('int_to_roman')) {
	function int_to_roman($num)
	{
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
			1 => 'I'
		];

		$romanNumeral = '';

		foreach ($romanNumerals as $value => $symbol) {
			while ($num >= $value) {
				$romanNumeral .= $symbol;
				$num -= $value;
			}
		}

		return $romanNumeral;
	}
}


if(!function_exists('roman_to_int')){
	function roman_to_int($roman) {
		$romanNumerals = [
			'I' => 1,
			'V' => 5,
			'X' => 10,
			'L' => 50,
			'C' => 100,
			'D' => 500,
			'M' => 1000
		];
	
		$integer = 0;
		$prevValue = 0;

		for ($i = strlen($roman) - 1; $i >= 0; $i--) {
			$currentValue = $romanNumerals[$roman[$i]];

			if ($currentValue < $prevValue) {
				$integer -= $currentValue;
			} else {
				$integer += $currentValue;
			}
	
			$prevValue = $currentValue;
		}
	
		return $integer;
	}
};
