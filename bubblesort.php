<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

$numbers = bubblesort($nums);

echo '<pre>';
print_r($numbers);
echo '</pre>';


/* 関数を完成させましょう */
function bubblesort($array)
{
    for($i = 0; $i < count($array); $i++)
    {
        for($j = 1; $j < count($array); $j++)
        {
            if($array[$j-1] > $array[$j])
            {
                $n = $array[$j-1];
                $array[$j-1] = $array[$j];
                $array[$j] = $n;
        
            }
        }
    }
    return $array;
}