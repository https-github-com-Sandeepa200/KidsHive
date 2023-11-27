<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Changa:wght@200&family=Titan+One&display=swap" rel="stylesheet">

  <title>Memory Game</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="timer">Time left: 60 seconds</div>
  <div id="message" style="display: none;"></div>
  <button onclick="restartGame()" id="playAgainButton" style="display: none;">Play Again</button>
  <div class="memory-game">
    <div class="grid"></div>
    <button onclick="startGame()" id="startButton">Start Game</button>
  </div>

  <script src="script.js"></script>
</body>
</html>
