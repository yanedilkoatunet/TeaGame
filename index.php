<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="range" value="50" min="50" max="1000" step="50"
        oninput="this.nextElementSibling.value=this.value">
        <output>50</output>
        <?php
            $a = [1, 2, 3];
            $b = [1, 2, 3];
            if ($a[0] == $b[0]){
                echo ("true");
            }else {
                echo("false");
            }
            
            
        ?>
    </form>
</body>
</html>