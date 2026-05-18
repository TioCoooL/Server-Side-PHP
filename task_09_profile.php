
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            $chars = array(array("Kaedehara Kazuha", "Boss of All Boss", "https://www.w3schools.com/w3css/img_avatar1.png"),
                array("Neuvillette", "The Judge", "https://www.w3schools.com/w3css/img_avatar2.png"),
                array("Xingqiu", "The Manager", "https://www.w3schools.com/w3css/img_avatar3.png"),
                array("Kamisato Ayaka", "Secretary", "https://www.w3schools.com/w3css/img_avatar4.png"),
                array("Kuki Shinobu", "Staff IT", "https://www.w3schools.com/w3css/img_avatar5.png")
            );
            
            $id = $_GET['id'];
            $selected_char = $chars[$id];

            $name = $selected_char[0];
            $detail = $selected_char[1];
            $img = $selected_char[2];

            echo '<div class="w3-container" style="width: 50%">';
            echo '<a href="task_09.php" class="w3-left w3-margin-top">Back to Login</a><br><br>';
            echo '<div class="w3-card-4 w3-margin w3-white">';
            echo '<img src="' . $img . '" alt="' . $name . '" style="width:350px; margin: 30px;">';
            echo '<div class="w3-container">';
            echo '<h3>' . $name . '</h3>';
            echo '<p>' . $detail . '</p>';
            echo '</div>';
        ?>
    </body>
</html>