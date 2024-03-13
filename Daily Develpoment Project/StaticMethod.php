<?php

class StaticMethod
{
    public static function BubbleSort($arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            for ($j = 0; $j < $len - 1; $j++) {
                if ($arr[$j] < $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }
}

//Call static Method
$result = StaticMethod::BubbleSort([34, 54, 12, 45, 19]);

print_r($result);

//i repeat 4 times
//i First = 0
//j Start from 1 
// check  if element at j index is smaller than the one  34 <  54 then swap them.