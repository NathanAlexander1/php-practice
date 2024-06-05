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
        <div id="calc-buttons">
            <textarea name="0" id="" cols="30" rows="10" placeholder="00"></textarea>
            <div class="button-row">
                <button id="divide-btn">/</button>
                <button id="multiply-btn">*</button>
                <button id="decimal-btn">.</button>
                <button id="equals-btn">=</button>
            </div>
            <div class="button-row">
                <button id="one-btn">1</button>
                <button id="two-btn">2</button>
                <button id="three-btn">3</button>
                <button id="plus-btn">+</button>
            </div>
            <div class="button-row">
                <button id="four-btn">4</button>
                <button id="five-btn">5</button>
                <button id="six-btn">6</button>
                <button id="minus-btn">-</button>
            </div>
            <div class="button-row">
                <button id="seven-btn">7</button>
                <button id="eight-btn">8</button>
                <button id="nine-btn">9</button>
                <button id="zero-btn">0</button>
            </div>
            <div class="button-row">
                <button id="clear-btn">Clear</button>
            </div>
        </div>
        <!-- <?php echo 'hello' ?> -->
        <?php require ('scripts.php') ?>
        <!-- <?php include 'scripts.php';?> -->
    </body>
</html>