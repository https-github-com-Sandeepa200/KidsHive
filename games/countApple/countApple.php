<!DOCTYPE html>
<html>
<head>
  <title>Count the Apples Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Changa:wght@200&family=Titan+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class=back-button onclick="goBack()">
    <img src="../countApple/media/left-arrow.png" alt="Back">
  </div>
  <div class=logo>
    <img src="../countApple/media/logo.png" alt="logo">
  </div>

  <div class="containerOuter">
    <div id="result"></div>
    <div id="score">Score: <span id="scoreValue">0</span></div>
    <div id="tries">Tries left: <span id="triesLeft">3</span></div>
  </div>

<div class="display">
  <div class="appleContainer">
    <h1>Count the Apples</h1>
    <div id="gameArea">
      <div id="appleContainer"></div>
      <input type="number" id="userInput" placeholder="Enter your count">
      <button onclick="checkAnswer()">Check Answer</button>
    </div>
  </div>
</div>

  <script src="script.js"></script>

  <!-- back button function -->
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>