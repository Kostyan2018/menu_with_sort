<?php

//initialize array
$myArray = array(45, 25, 55, 5, 44, 84, 878, 77, 754, 21);

function bubbleSort ($myArray) {
    //get size of array
    $lengthOfArray = sizeof($myArray);

    for ($i = 0; $i<$lengthOfArray; $i++) {  //get the elements of array
        for ($j=0; $j < $lengthOfArray - 1; $j++){  //compare elements of array and sort
            if ($myArray[$j] > $myArray[$j+1]) {
                $temp = $myArray [$j+1];
                $myArray[$j+1] = $myArray[$j];
                $myArray [$j] = $temp;
            }
        }
    }
    return $myArray;
}
//show array
echo '<p>Before Sorting</p>' . implode(' , ' , $myArray);
//sort array
$sortedArray = bubbleSort($myArray);
//show sort array
echo '<p>After Sorting</p>' . implode(' , ' , $sortedArray);



