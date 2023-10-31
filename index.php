<?php
function getPascalTriangleElements($n) {
    $rows = array();

    // base case
    if ($n <= 0) {
        return $rows;
    }

    // base case: first row contains only a single element 1
    $rows[] = array(1);

    // do for each row starting the second row
    for ($i = 1; $i < $n; $i++) {
        $row = array();
        for ($j = 0; $j <= $i; $j++) {
            // first and last element of any row will be always 1
            if ($j == 0 || $j == $i) {
                $row[] = 1;
            } else {
                // for all other elements, sum adjacent elements in the preceding row
                $prev = $rows[$i - 1];
                $newValue = $prev[$j - 1] + $prev[$j];
                if ($newValue == 13) {
                    $row[] = 1; // Substituir 13 por 1
                } elseif ($newValue == 14) {
                    $row[] = 2; // Substituir 14 por 2
                } elseif ($newValue == 15) {
                    $row[] = 3; // Substituir 15 por 3
                } elseif ($newValue == 16) {
                    $row[] = 4; // Substituir 16 por 4
                } elseif ($newValue == 17) {
                    $row[] = 5; // Substituir 17 por 5
                } elseif ($newValue == 18) {
                    $row[] = 6; // Substituir 18 por 6
                } elseif ($newValue == 19) {
                    $row[] = 7; // Substituir 19 por 7
                } elseif ($newValue == 20) {
                    $row[] = 8; // Substituir 20 por 8
                } elseif ($newValue == 21) {
                    $row[] = 9; // Substituir 21 por 9
                } elseif ($newValue == 22) {
                    $row[] = 10; // Substituir 22 por 10
                } elseif ($newValue == 23) {
                    $row[] = 11; // Substituir 23 por 11
                } elseif ($newValue == 24) {
                    $row[] = 12; // Substituir 24 por 12
                } else {
                    $row[] = $newValue;
                }
            }
        }

        // add current row to the result
        $rows[] = $row;
    }

    return $rows;
}

$n = 39;

$result = getPascalTriangleElements($n);

for ($i = 0; $i < $n; $i++) {
    $row = $result[$i];
    echo ($i + 1) . ". ";

    foreach ($row as $element) {
        if($element == 1 ) {
            echo '<span style="background-color:orange">|| '. $element .' </span>';
        }
        if($element == 2 ) {
            echo '<span style="background-color:rgb(8, 239, 255)">|| '. $element .' </span>';
        }if($element == 3 ) {
            echo '<span style="background-color:green">|| '. $element .' </span>';
        }if($element ==  4) {
            echo '<span style="background-color:red">|| '. $element .' </span>';
        }if($element == 5 ) {
            echo '<span style="background-color:purple">|| '. $element .' </span>';
        }if($element == 6 ) {
            echo '<span style="background-color:pink">|| '. $element .' </span>';
        }if($element == 7 ) {
            echo '<span style="background-color:brown">|| '. $element .' </span>';
        }if($element == 8 ) {
            echo '<span style="background-color:teal">|| '. $element .' </span>';
        }if($element == 9 ) {
            echo '<span style="background-color:black">|| '. $element .' </span>';
        }if($element == 10 ) {
            echo '<span style="background-color:gold">|| '. $element .' </span>';
        }if($element ==11) {
            echo '<span style="background-color:gray">|| '. $element .' </span>';
        }if($element == 12) {
            echo '<span style="background-color:rgb(255, 255, 255)"> '. $element .' </span>';
        }
        
        
        //echo " | " . $element . " ";
    }
    echo "<br>";
}
?>
