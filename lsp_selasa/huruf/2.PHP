<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <?php 
        for ($baris=1;$baris<=3;$baris++){
            echo"<tr>";
            for($kolom=1;$kolom<=4;$kolom++){
                echo"<td>baris$baris, kolom$kolom</td>";
            }
            echo"</tr>";
        }
        ?>
    </table>
</body>
</html>