
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>randNum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="result.php" method="post">
        <p>Please enter the number of dice to roll.</p>
        <input type="text" name="numDice" id="diceCount">
        <br>
        <p>Select the amount of sides for each die</p>
        <select id="sides" name="sides">
            <option value=4>d4</option>
            <option value=6>d6</option>
            <option value=8>d8</option>
            <option value=10>d10</option>
            <option value=12>d12</option>
            <option value=20>d20</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>