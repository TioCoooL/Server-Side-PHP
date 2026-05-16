<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            $chars = array("Kaedehara Kazuha",
            "Kuki Shinobu",
            "Neuvillette",
            "Kamisato Ayaka",
            "Keqing",
            "Barbara",
            "Xingqiu");
            
            echo '<p><b>Characters</b></p>';
            echo '<div class="w3-container" style="width: 50%">';
            echo '<table class="w3-table-all w3-hoverable">';
            echo '<tr class="w3-blue">';
            echo '<th>No.</th>';
            echo '<th>Name of Character</th>';
            echo '</tr>';

            for ($x = 0, $y=1; $x < 7; $x++, $y++) {
                echo '<tr>';
                echo "<td>$y</td>";
                echo "<td>$chars[$x]</td>";
                echo '</tr>';    
            }

            echo '</table>';
            echo '<div>';
        ?>
    </body>
</html>