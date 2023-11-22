<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- embedded fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <title>Number Guessing Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="game-container">
        <h1>Guess The Secret Number</h1>
        <p id="message">The secret number is between 1 and 100</p>
        <p id="attempts"></p>
        <div id="button-container">
            <input type="number" id="guessInput" placeholder="Enter your guess">
            <button id="submitBtn" onclick="checkGuess()" disabled>Check</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
