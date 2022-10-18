<?php 
    mb_internal_encoding("UTF-8");

    function numberToArray($num){
        $arr = array_fill(0, 8, -1);
        for ($i = 0; $i < strlen($num); $i++) { 
            $arr[$i] = $num[$i];
        }
        return $arr;
    }

    function getSumArray($arr){
        $sum = 0;
        $indx = 1000;
        for ($i = 0; $i < count($arr); $i++) { 
            if($arr[$i] !== -1){
                $sum = $sum + $arr[$i] * $indx;
            }   
            $indx = $indx / 10;
        }
        return $sum;
    }
    

    function sortByStrangeMath($num1, $num2){
        $str1 = ((string)($num1));
        $str2 = ((string)($num2));

        if(getSumArray(numberToArray($str1)) > getSumArray(numberToArray($str2))){
            return 1;
        }

        if(getSumArray(numberToArray($str2)) > getSumArray(numberToArray($str1))){
            return -1;
        }

        if(getSumArray(numberToArray($str2)) === getSumArray(numberToArray($str1))){
            return 0;
        }
    }


    $arr = range(1, 30);

    usort($arr, 'sortByStrangeMath');
    print_r($arr);
?>