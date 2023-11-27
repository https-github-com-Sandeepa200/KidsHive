const images = ['🍎', '🍌', '🍒', '🥑', '🍇', '🍊', '🍉', '🍓', '🍍', '🥭'];
let tiles = [];
let flippedTiles = [];
let matchedTiles = [];
let gameTimer;

function startGame() {
  const grid = document.querySelector('.grid');
  const startButton = document.getElementById('startButton');

  startButton.style.display = 'none'; // Hide the start button

  grid.innerHTML = ''; // Clear the grid
  matchedTiles = [];
  clearInterval(gameTimer); // Reset the timer on game start

  tiles = createTiles();

  tiles.forEach((tile) => {
    tile.innerText = tile.dataset.image;
    grid.appendChild(tile);
    tile.addEventListener('click', handleTileClick);
  });

  // Reveal images for 3 seconds
  setTimeout(() => {
    tiles.forEach((tile) => {
      tile.innerText = '';
      tile.classList.add('hidden');
    });
    startTimer(); // Start the game timer
  }, 3000);
}

function startTimer() {
  const timerElement = document.getElementById('timer');
  let timeLeft = 60; // 60 seconds (1 minute) timer

  gameTimer = setInterval(() => {
    timeLeft--;
    timerElement.innerText = `Time left: ${timeLeft} seconds`;

    if (timeLeft === 0) {
      clearInterval(gameTimer);
      handleTimeout();
    }
  }, 1000);
}

function handleTimeout() {
  const message = document.getElementById('message');
  const playAgainButton = document.getElementById('playAgainButton');
  const grid = document.querySelector('.grid');
  
  playGameOverSound();

  message.innerText = 'Time is up! Try again.';
  message.style.display = 'block'; // Show the timeout message
  playAgainButton.style.display = 'block'; // Show the play again button
  

  playAgainButton.addEventListener('click', restartGame); // Setup click event for play again

  // Disable tile clicks
  grid.querySelectorAll('.tile').forEach((tile) => {
    tile.removeEventListener('click', handleTileClick);
  });
}

function playGameOverSound() {
  const audio = new Audio('media/gameOver.mp3');
  audio.play();
  console.log('Sound Played'); 
}

function restartGame() {
  const grid = document.querySelector('.grid');
  const startButton = document.getElementById('startButton');
  const playAgainButton = document.getElementById('playAgainButton');
  const message = document.getElementById('message');
  const timerElement = document.getElementById('timer');

  startButton.style.display = 'block'; // Show the start button
  playAgainButton.style.display = 'none'; // Hide the play again button
  grid.innerHTML = ''; // Clear the grid
  matchedTiles = [];
  message.style.display = 'none'; // Hide the message
  timerElement.innerText = ''; // Clear the timer

  clearInterval(gameTimer); // Clear any existing timer
  if (flippedTiles.length !== 0) {
    flippedTiles = [];
  }
  startGame(); // Start the game again
  location.reload(); 
}

window.onload = function() {
  startGame(); // Initialize the game once the page is fully loaded
};



function createTiles() {
  const duplicatedImages = images.concat(images);
  const shuffledImages = shuffleArray(duplicatedImages);
  const tileElements = shuffledImages.map(image => {
    const tile = document.createElement('div');
    tile.classList.add('tile');
    tile.dataset.image = image;
    return tile;
  });
  return tileElements;
}

function handleTileClick() {
  const currentTile = this;
  if (
    flippedTiles.length < 2 &&
    !flippedTiles.includes(currentTile) &&
    !matchedTiles.includes(currentTile)
  ) {
    flippedTiles.push(currentTile);
    currentTile.innerText = currentTile.dataset.image;
    currentTile.classList.remove('hidden');
    
    playButtonClickSound();

    if (flippedTiles.length === 2) {
      setTimeout(checkMatch, 1000);
    }
  }
}

function playButtonClickSound() {
  const audio = new Audio('media/buttonClick.mp3');
  audio.play();
  console.log('Sound Played'); 
}

function checkMatch() {
  const [firstTile, secondTile] = flippedTiles;
  if (firstTile.dataset.image === secondTile.dataset.image) {
    matchedTiles.push(firstTile, secondTile);
    flippedTiles = [];
    playGameWinSound();

    if (matchedTiles.length === tiles.length) {
      handleGameWin();
      playSuccessSound();
    }
  } else {
    setTimeout(() => {
      firstTile.innerText = '';
      secondTile.innerText = '';
      firstTile.classList.add('hidden');
      secondTile.classList.add('hidden');
      flippedTiles = [];
      playLostSound();
    }, 1000);
  }
}

function playLostSound() {
  const audio = new Audio('media/lost.mp3');
  audio.play();
  console.log('Sound Played'); 
}

function playSuccessSound() {
  const audio = new Audio('media/success.mp3');
  audio.play();
  console.log('Sound Played'); 
}

function playGameWinSound() {
  const audio = new Audio('media/gameWin.mp3');
  audio.play();
  console.log('Sound Played'); 
}


function handleGameWin() {
  const message = document.getElementById('message');
  const playAgainButton = document.getElementById('playAgainButton');

  clearInterval(gameTimer); // Stop the timer on game win

  message.innerText = 'You Won!';
  message.style.display = 'block'; // Show the win message
  playAgainButton.style.display = 'block'; // Show the play again button

  playAgainButton.addEventListener('click', restartGame); // Setup click event for play again
}


function shuffleArray(array) {
  const newArray = array.slice();
  for (let i = newArray.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [newArray[i], newArray[j]] = [newArray[j], newArray[i]];
  }
  return newArray;
}
