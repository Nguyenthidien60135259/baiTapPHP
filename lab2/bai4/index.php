<html>
    <body>
        <table border="1px">
            <tr> 
                <?php
                    $m = rand(2,5);
                    $n = rand(2,5);
                    echo " m= $m"."<br>";
                    echo " n= $n"."<br>";
                    for ($i = 0; $i < $m; $i++) {
                        echo "<td>";
                        for ($j = 0; $j < $n; $j++) {
                            echo $a = rand(-100,100);
                            echo "<br>";
                        }   
                        echo "</td>";  
                    }
                ?> 
            </tr>
        </table>
    </body>
</html>


