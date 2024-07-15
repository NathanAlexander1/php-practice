<?php require ('scripts.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>Calculator</title>
    </head>
    <body>
        <header>
            <h1>PHP Calculator</h1>
        </header>
        <div id="calc">
            <form method="post">
                <input type="text" name="display" class="display" value="<?php echo isset($_SESSION['display']) ? htmlspecialchars($_SESSION['display']) : '';?>" readonly>
                <div class="button-row">
                    <button class="calc-btn" type="submit" name="btn" value="/" >/</button>
                    <button class="calc-btn" type="submit" name="btn" value="*" >*</button>
                    <button class="calc-btn" type="submit" name="btn" value="." >.</button>
                    <button class="calc-btn" type="submit" name="btn" value="=" >=</button>
                </div>
                <div class="button-row">
                    <button class="calc-btn" type="submit" name="btn" value="1" >1</button>
                    <button class="calc-btn" type="submit" name="btn" value="2" >2</button>
                    <button class="calc-btn" type="submit" name="btn" value="3" >3</button>
                    <button class="calc-btn" type="submit" name="btn" value="+" >+</button>
                </div>
                <div class="button-row">
                    <button class="calc-btn" type="submit" name="btn" value="4" >4</button>
                    <button class="calc-btn" type="submit" name="btn" value="5" >5</button>
                    <button class="calc-btn" type="submit" name="btn" value="6" >6</button>
                    <button class="calc-btn" type="submit" name="btn" value="-" >-</button>
                </div>
                <div class="button-row">
                    <button class="calc-btn" type="submit" name="btn" value="7" >7</button>
                    <button class="calc-btn" type="submit" name="btn" value="8" >8</button>
                    <button class="calc-btn" type="submit" name="btn" value="9" >9</button>
                    <button class="calc-btn" type="submit" name="btn" value="0" >0</button>
                </div>
                <div class="button-row">
                <button id="clear-btn" type="submit" name="btn" value="C" >Clear</button>
                </div>
            </form>
        </div>
    </body>
</html>