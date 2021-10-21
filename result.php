<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php 
        $numDice = $_POST["numDice"]; // variable for number of dice 
        $sides = $_POST["sides"]; // variable for sides per dice 
        $total_possible = $numDice * $sides;
        $dice_rollArray = array(); // array to hold dice rolls 
        
        // Loop to get random roll number for each dice
        for($i=1; $i <= $numDice; $i++) {
            $dice_roll = rand(1, $sides); // dice roll
            array_push($dice_rollArray, $dice_roll); // push value to array
        }       

        $total = array_sum($dice_rollArray);
        $average = number_format($total/count($dice_rollArray), 2);
   
        // Number of dice: inputted number value
        echo "<p>Number of Dice: $numDice</p>";

        // Number of side on die: inputted side value 
        echo "<p>Number of Sides on each Die: $sides</p>";

        // Highest Possible Roll: calculated highest possible number
        echo "<p>Highest Possible Total for all Dice: $total_possible</p>";

        // Horizontal rule 
        echo "<hr>";

        // Dice Values from array
        echo "<p>Dice Values: </p>";
 
        // iterate over array of dice rolls and display them 
        foreach($dice_rollArray as $i) {
            echo "<p>".$i."</p>";
        }

        // Sum of all dice values
        echo "<p>Total Count of Dice Rolled: $total</p>";

        echo "<p>Average of Dice Rolled: $average</p>";
    ?>
</body>
</html>