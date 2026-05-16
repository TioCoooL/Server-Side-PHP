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
            echo '<ul class="w3-ul w3-border">';
            for ($x = 0; $x < 7; $x++) {
                echo "<li>$chars[$x]</li>";
            }
            
            echo '</ul>';
        ?>
    </body>
</html>