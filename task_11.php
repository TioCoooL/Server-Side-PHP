<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            $cars = array (
                array("Volvo", 10, 80),
                array("BMW", 20, 40),
                array("Saab", 20, 10),
                array("Land Rover", 50, 35)
            );

            function setColor($percentage) {
                if ($percentage <= 40) {
                    return "w3-red";
                } elseif ($percentage <= 60) {
                    return "w3-yellow";
                } elseif ($percentage <= 80) {
                    return "w3-green";
                } else {
                    return "w3-blue";
                }
            }
            
            echo '<div class="w3-container"">';
            echo '<h3><b>Monthly Report 2023</b></h3>';
            
            echo '<table class="w3-table w3-bordered ">';
            echo '<tr>';
            echo '<th>No.</th>';
            echo '<th>Merk</th>';
            echo '<th>Achievement Progress</th>';
            echo '</tr>';

            foreach ($cars as $x => $car) {
                $y = $x + 1;
                $merk = $car[0];
                $inStock = $car[1];
                $sold = $car[2];
                
                $totalCars = $inStock + $sold;
                $percentage = ($sold / $totalCars) * 100;
                
                $formattedPercentage = number_format($percentage, 2);
                
                $barColor = setColor($percentage);
                
                echo '<tr>';
                echo "<td style='vertical-align: middle;'>$y</td>";
                echo "<td style='vertical-align: middle;'>$merk</td>";
                echo '<td>';
                
                echo '<div class="w3-light-grey w3-round-xlarge">';
                echo '<div class="w3-container w3-center w3-round-xlarge ' . $barColor . '" style="width:' . $formattedPercentage . '%">';
                echo $formattedPercentage . '%';
                echo '</div>';
                echo '</div>';
                
                echo '</td>';
                echo '</tr>';    
            }

            echo '</table>';
            echo '</div>';
        ?>
    </body>
</html>