<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Multiplication Table 9*9 using PHP</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Multiplication Table 9*9 using PHP</h1>
    <table>
        <?php
            $cols = 9;
            $rows = 9;
		    for ($r = 1; $r <= $rows; $r++) {
			    echo '<tr>';
			    for ($c = 1; $c <= $cols; $c++) {
				    echo '<td>'.$r*$c.'</td>' ;
			    }		
			    echo '</tr>';
		    }        
		?>
    </table>

</body>

</html>