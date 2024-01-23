<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     
     <?php

     // Създаване на масив - create new array with values [1,5,10,-2,-5,0
     $array = [1, 5, 10, -2, -5, 0];
     echo "<b>Original Array:</b> " . "[" . implode(', ', $array) . "]" . "<br>";

     // Задача 1: Намиране на най-голямата стойност - find the biggest value
     $biggestValue = $array[0];
     foreach ($array as $value) {
          if ($value > $biggestValue) {
               $biggestValue = $value;
          }
     }
     echo "<b>The Biggest Value:</b>" . "<i>$biggestValue</i>" . "<br>";

     // Задача 2: Намиране на най-малката стойност - find the lowest value
     $lowestValue = $array[0];
     foreach ($array as $value) {
          if ($value < $lowestValue) {
               $lowestValue = $value;
          }
     }
     echo "<b>The Lowest Value:</b>" . "<i> $lowestValue </i>" . "<br>";

     // Задача 3: Намиране на средната стойност - find the average value
     $sum = 0;
     foreach ($array as $value) {
          $sum += $value;
     }
     $average = $sum / count($array);
     echo "<b>Average Value:</b>" . "<i> $average</i>" . "<br>";

     // Задача 4: Bubble sort за подреждане на масива - reorder the array using bubble sort
     /* $n = count($array);
     do {
          $swapped = false;
          for ($i = 0; $i < $n - 1; $i++) {
               if ($array[$i] > $array[$i + 1]) {
                    // Swap
                    $temp = $array[$i];
                    $array[$i] = $array[$i + 1];
                    $array[$i + 1] = $temp;
                    $swapped = true;
               }
          }
     } while ($swapped);
          echo "<b>Sorted Array:</b> " . "[" . implode(', ', $array) . "]" . "<br>";*/

     function bubbleSort(array $array1): array
     {
          $length = count($array1);
          for ($i = 0; $i < $length - 1; $i++) {
               for ($j = 0; $j < $length - $i - 1; $j++) {
                    if ($array1[$j] > $array1[$j + 1]) {
                         $temp = $array1[$j];
                         $array1[$j] = $array1[$j + 1];
                         $array1[$j + 1] = $temp;
                    }
               }
          }
          return $array1;
     }

     $array1 = [1, 5, 10, -2, -5, 0];
     $array1 = bubbleSort($array1);
     echo "<b>Sorted Array1:</b> " . "[" . implode(', ', $array1) . "]" . "<br>";

     ?>
     
</body>

</html>