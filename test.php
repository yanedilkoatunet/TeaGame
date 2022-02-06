<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php 
        if(isset($_POST["firstname"]))  {
            echo("<title> ORDER </title>");
        }
        else{
            echo("<title>WELCOME TO STARBUCKS TEA</title>");
        }
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="bg">
            <div class="container">
                <h1> STARBUCKS TEA</h1>
                <form action="test.php" method="POST">
                    <p>TYPE YOUR NAME<br>
                        <input type="text" name="firstname" /></p>
                    <label>WATER
                        <input name="water" type="range" value="50" min="50" max="1000" step="50"
                            oninput="this.nextElementSibling.value=this.value">
                        <output>50</output><br></label>
                    <p>DO YOU WANT TEA WITH SUGAR OR NOT?<br>
                        <input checked type="radio" name="sugar" value="sugar" />with sugar <br>
                        <input type="radio" name="sugar" value="nosugar" />no sugar </p>
                    <p>DO YOU NEED A COFFE STIRRER?<br>
                        <input checked type="radio" name="stirrer" value="stirrer" />yes</p>
                    <input type="radio" name="stirrer" value="nostirrer" />no</p>
                    <p>CHOOSE SIZE<br>
                        <select name="size" size="3" multiple="multiple">
                            <option value="small">SMALL</option>
                            <option value="medium">MEDIUM</option>
                            <option value="large">LARGE</option>
                        </select></p>
                    <p>YOUR PREFERENCES <br>
                        <textarea name="comment" maxlength="200"></textarea></p>
                    <input type="submit" value="SEND">
                    <?php
                        if(isset($_POST["firstname"]) && isset($_POST["sugar"]) && 
                        isset($_POST["comment"]) && isset($_POST["size"])){
                            $water = $_POST["water"];
                            $name = $_POST["firstname"];
                            if ($name == ""){
                                $name = "Mr. Anonim";
                            }
                            $sugar= $_POST["sugar"];
                            $stirrer = "no";
                            if(isset($_POST["stirrer"])) $stirrer = "yes";
                            $comment = $_POST["comment"];
                            $size = $_POST["size"];
                            $output ="
                                <h2>WELCOME: $name <br>YOUR ORDER</h2>
                                <ul>
                                    <li>SUGAR: $sugar</li>
                                    <li>COFFEE STIRRER: $stirrer</li>
                                    <li>CUP SIZE: $size</li>
                                    <li>WATER: $water</li>
                                </ul>
                            ";
                            echo $output;
                            if ($size == "small" ) {
                                $size = 150;
                            }
                            else if ($size == "medium" ) {
                                $size = 250;
                            }
                            else if ($size == "large" ) {
                                $size = 350;
                            }
                            echo ("<h2>WE ARE PREPARING YOUR ORDER <br> KETTLE IS HOT</h2>");
                            while($water > 0){   
                                for ($i = 50; $i <= $size && $water > 0; $i += 50, $water -= 50) {
                                    echo("<p>WE POURED ".$i." ml</p>");
                                }
                                if ($water <= 0) {
                                    echo("
                                        <h5>WE RAN OUT OF WATER</h5>
                                        <h5>HAVE A NICE TEA</h5>
                                    ");
                                }
                                else {
                                    echo("<h5>WE TAKE THE NEXT CUP</h5>");
                                }
                            }
                        
                        } else {  
                            echo "YOUR ORDER IS EMPTY";
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>