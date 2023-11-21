<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangman Game</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts/word-list.js" defer></script>
    <script src="scripts/script.js" defer></script>
    
</head>
<body>
    <div class="game-modal">
        <div class="content">
            <img src="#" alt="gif">
            <h4>Game Over!</h4>
            <p>The correct word was: <b>rainbow</b></p>
            <button class="play-again">Play Again</button>
        </div>
    </div>

    <div class="container">
      <div class="hangman-box">
            <h1>Hangman game</h1>
            <img src="#" draggable="false" alt="hangman-img">
        </div>

        <div class="game-box">
            <ul class="word-display">
            </ul>

            <h3 class="hint-text"><i>Hint: <b></b></i></h3>
            <h4 class="guesses-text">Incorrect guesses: <b>0 / 6</b></h4>

            <div class="keyboard"></div>
    </div>
</body>
</html>