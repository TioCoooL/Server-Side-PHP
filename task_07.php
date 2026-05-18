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
            
            echo '<p><b>Characters</b></p>';
            echo '<div class="w3-container" style="width: 50%">';
            echo '<table class="w3-table-all w3-hoverable">';
            echo '<tr class="w3-blue">';
            echo '<th>No.</th>';
            echo '<th>Name of Character</th>';
            echo '<th>Detail</th>';
            echo '<th>Actions</th>';
            echo '</tr>';


            foreach ($chars as $x => $char) {
                $y = $x + 1;
                echo '<tr>';
                echo "<td>$y</td>";
                echo "<td>$char[0]</td>";
                echo "<td>$char[1]</td>";
                echo '<td>';
                echo '<a href="task_07_profile.php?id=' . $x . '" class="glyphicon glyphicon-folder-open" style="margin-right: 15px;">';
                echo '</a>';
                echo '<a href="#" class="glyphicon glyphicon-trash">';
                echo '</a>';
                echo '</td>';
                echo '</tr>';    
            }

            echo '</table>';
            echo '<div>';
        ?>
    </body>
</html>