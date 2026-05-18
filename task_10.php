<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <style>
            @media print {
                .no-print {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <?php
            $chars = array(
                array("Kaedehara Kazuha", "Boss of All Boss", "https://www.w3schools.com/w3css/img_avatar1.png"),
                array("Neuvillette", "The Judge", "https://www.w3schools.com/w3css/img_avatar2.png"),
                array("Xingqiu", "The Manager", "https://www.w3schools.com/w3css/img_avatar3.png"),
                array("Kamisato Ayaka", "Secretary", "https://www.w3schools.com/w3css/img_avatar4.png"),
                array("Kuki Shinobu", "Staff IT", "https://www.w3schools.com/w3css/img_avatar5.png")
            );
            
            echo '<div class="w3-container w3-padding-32">';
            echo '<h2 class="w3-center"><b>HOYOVERSE</b></h2>';
            echo '<p class="w3-center"><b>Characters SS Tier Report 2023</b><br>published at Nov 9th, 2023 by admin</p>';
            
            echo '<table class="w3-table-all w3-margin-top">';
            echo '<tr class="w3-blue">';
            echo '<th>No.</th>';
            echo '<th>Avatar</th>';
            echo '<th>Name of Character</th>';
            echo '<th>Details</th>';
            echo '</tr>';

            foreach ($chars as $x => $char) {
                $y = $x + 1;
                echo "<td>$y</td>";
                echo "<td><img src='$char[2]' alt='$char[0]' class='w3-circle' style='width:50px; height:50px;'></td>";
                echo "<td>$char[0]</td>";
                echo "<td>$char[1]</td>";
                echo '</tr>';    
            }

            echo '</table>';
            
            echo '<button class="w3-button w3-blue w3-margin-top no-print" onclick="window.print()">Print</button>';
            
            echo '<div class="w3-right-align w3-margin-top">';
            echo '<p>Singapore, November 9th, 2023<br><br><br><br>';
            echo '<b>Lockey Irawan</b><br>';
            echo 'chief executive officer</p>';
            echo '</div>';

            echo '</div>'; 
        ?>
    </body>
</html>