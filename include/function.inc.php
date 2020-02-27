<?php 
// Logic to check for POST and grab data from $_P
// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2){
    if($unit1 == 'celsius'){
        if($unit2 == 'fahrenheit'){
            $converted = (1.8*$temp)+32;
        }elseif($unit2 == 'kelvin'){
            $converted = $temp + 273.15;
        }elseif($unit2 == 'celsius'){
            $converted = $temp;
        }
    }

    if($unit1 == 'fahrenheit'){
        if($unit2 == 'celsius'){
            $converted = ($temp-32) * 1.8;
        }elseif($unit2 == 'kelvin'){
            $converted = ($temp + 459.67)*1.8;
        } elseif($unit2 == 'fahrenheit'){
            $converted = $temp;
        }
        
    }

    if($unit1 == 'kelvin'){
        if($unit2 == 'celsius'){
            $converted = $temp - 273.15;
        }elseif($unit2 == 'fahrenheit'){
            $converted = ($temp * 1.8) - 459.67;
        } elseif($unit2 == 'kelvin'){
            $converted = $temp;
        }
        
    }
    
    return $converted;
} // end function
?>