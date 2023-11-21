let applesDisplayed = 0;
let score = 0;
let triesLeft = 3;

function displayApples() {
  const appleContainer = document.getElementById('appleContainer');
  if (!appleContainer) return; // Ensure the element exists before proceeding

  applesDisplayed = Math.floor(Math.random() * 10) + 1;
  let appleHTML = '';

  for (let i = 0; i < applesDisplayed; i++) {
    appleHTML += '<img src="media/apple.png" alt="Apple" class="apple">';
  }

  appleContainer.innerHTML = appleHTML;
}

function checkAnswer() {
  const userInput = parseInt(document.getElementById('userInput').value, 10);
  

  if (userInput === applesDisplayed) {
    document.getElementById('result').innerText = 'Correct! Well done!';
    playCongratulationsSound()
    score++;
    document.getElementById('scoreValue').innerText = score;
  } else {
    document.getElementById('result').innerText = 'Incorrect! Try again.';
    playCheckSound();
    triesLeft--;
    document.getElementById('triesLeft').innerText = triesLeft;

    if (triesLeft === 0) {
      endGame();
      return;
    }
  }

  displayApples();
  document.getElementById('userInput').value = '';

  setTimeout(() => {
    document.getElementById('result').innerText = ''; // Clear result after a few seconds
  }, 1000); // Adjust the time (in milliseconds) as needed
}


function endGame() {
  document.getElementById('result').innerText = 'Game Over!';
  playGameOverSound()
  const gameArea = document.getElementById('gameArea');
  if (gameArea) {
    gameArea.innerHTML = '<button onclick="restartGame()">Play Again</button>';
  }
}

function restartGame() {
  score = 0;
  triesLeft = 3;
  document.getElementById('scoreValue').innerText = score;
  document.getElementById('triesLeft').innerText = triesLeft;
  document.getElementById('result').innerText = '';
  displayApples();
  location.reload(); // This line reloads the page
}

window.onload = function() {
  displayApples(); // Initialize the game once the page is fully loaded
};

function playCongratulationsSound() {
  const audio = new Audio("media/soundtrack win.mp3");
  audio.play();
}

function playGameOverSound(){
  const audio = new Audio("media/game over.mp3");
  audio.play();
}

function playCheckSound() {
  const audio = new Audio("media/button click.mp3");
  audio.play();
  console.log('Sound Played'); 
}