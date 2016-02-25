<table border="1">
<?PHP
$cols=7;
$rows=7;
    
$i=1;
$j=1;

    while($i <= $rows){
       echo "<tr>";
        while($j <= $cols){
            echo "<td>";
            echo $i * $j;
            echo"</td>";
            $j++;
            
        }
        $i++;
        echo "</tr>";
        
    }

?>
</table>