<table border="1px">
<tr>
<?php
    $i=3;
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
?>
</tr>
</table>