<?php

    $table = array(
        array('Disciplina', 'Faltas', 'Média'),
        array('Matemática', 5, 8.5),
        array('Português', 2, 9),
        array('Geografia', 10, 6),
        array('Educação Física', 2, 8)
    );

    $header = 0;
    echo "<table border = '1'>";
    foreach ($table as $row) {   
        echo "<tr>";
        
        foreach ($row as $column) {
            if ($header == 0) {
                echo "<th>$column</th>";
            } else {
                echo "<td>$column</td>";
            }
        }

        echo "</tr>";

        $header = 1;
    }
    echo "</table>";