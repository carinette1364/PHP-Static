<?php

class Speedometer {

    public const KMMILES_CONVERSION = 0.621;
   
    
    public static function convertKmToMiles(int $distance) : string
    {
        $conversion = number_format($distance * self::KMMILES_CONVERSION, 2, ' , ', '  ');
        return $conversion;
      
    }

    public static function convertMilesToKm(int $distance) : string
    {
        $conversion = number_format($distance / self::KMMILES_CONVERSION, 2, ' , ', ' ');
        return $conversion;
        
    }
}

echo 'Le résultat de votre conversion en Miles est : ' . Speedometer::convertKmToMiles(10) . ' Miles<br>' . PHP_EOL;
echo 'Le résultat de votre conversion en KM est : ' . Speedometer::convertMilesToKm(10) . ' Km<br>' . PHP_EOL;