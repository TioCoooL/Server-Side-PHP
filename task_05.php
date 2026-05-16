<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            $cars = array (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );

            
            echo '<p><b>Monthly Report 2023</b></p>';
            echo '<input class="w3-input w3-border w3-padding w3-margin" style="width: 50%" type="text" placeholder="Search for names..." id="myInput" onkeyup="myFunction()"><br>';
            echo '<div class="w3-container" style="width: 50%">';
            echo '<table class="w3-table-all w3-hoverable" id="myTable">';
            echo '<tr class="w3-blue">';
            echo '<th>No.</th>';
            echo '<th>Merk</th>';
            echo '<th>In Stock</th>';
            echo '<th>Sold</th>';
            echo '</tr>';

            for ($x = 0, $y = 1; $x < 4; $x++, $y++) {
                echo '<tr>';
                echo "<td>$y</td>";
                echo "<td>{$cars[$x][0]}</td>";
                echo "<td>{$cars[$x][1]}</td>";
                echo "<td>{$cars[$x][2]}</td>";
                echo '</tr>';    
            }

            echo '</table>';
            echo '<div>';
        ?>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
    </body>
</html>