<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            $chars = array(array("Kaedehara Kazuha", "Boss of All Boss", "https://www.w3schools.com/w3css/img_avatar1.png"),
                array("Neuvillette", "The Judge", "https://www.w3schools.com/w3css/img_avatar2.png"),
                array("Xingqiu", "The Manager", "https://www.w3schools.com/w3css/img_avatar3.png"),
                array("Kamisato Ayaka", "Secretary", "https://www.w3schools.com/w3css/img_avatar4.png"),
                array("Kuki Shinobu", "Staff IT", "https://www.w3schools.com/w3css/img_avatar5.png")
            );
            
            echo '<div class="w3-container" style="width: 50%">';
            echo '<p><b>Characters</b></p>';
           
            foreach ($chars as $char) {
                echo '<div class="w3-card-4 w3-margin w3-white">';
                echo '<img src="' . $char[2] . '" alt="' . $char[0] . '" style="width:100%">';
                echo '<div class="w3-container">';
                echo '<h3>' . $char[0] . '</h3>';
                echo '<p>' . $char[1] . '</p>';
                echo '</div>';
                echo '</div>';
            }

            echo '</table>';
            echo '<div>';
        ?>
    </body>
</html>