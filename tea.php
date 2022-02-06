<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="tea.php" method="post">
        <label>WATER
            <input name="water" type="range" value="50" min="50" max="1000" step="50"
                oninput="this.nextElementSibling.value=this.value">
            <output>50</output><br></label>
        <label>SUGAR
            <input name="sugar" type="range" value="0.5" min="0" max="10" step="0.5"
                oninput="this.nextElementSibling.value=this.value">
            <output>0.5</output><br>
        </label>
        <label>TIME
            <input name="time" type="range" value="60" min="30" max="180" step="30"
                oninput="this.nextElementSibling.value=this.value">
            <input name="" type="number" value="60" min="30" max="180" step="30"
                oninput="this.previousElementSibling.value=this.value"><br>
        </label>
        <?php
            if ($_POST) { 
                $water = $_POST["water"];
                $sugar = $_POST["sugar"];
                $time = $_POST["time"];
                echo("<h1> YOUR TEA IS ALREADY HOT </h1>");
                echo ("<h2> YOUR RECEIPE</h2> $water, $sugar");
                for ($i = 0; $i <= 250; $i += 50) {
                    if ($i == 250) {
                        break;
                    }
                    echo("<h6> OKAY THAT'S ENOUGH </h6");
                }
                 
            }
        ?>
        <button type="submit">SEND CHOICE</button>
    </form>
</body>

</html>