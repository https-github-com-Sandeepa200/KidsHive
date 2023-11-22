const maxAttempts = 7;
let secretNumber, attempts;

function startGame() {
    secretNumber = Math.floor(Math.random() * 100) + 1;
    attempts = 0;
    document.getElementById('guessInput').disabled = false;
    document.getElementById('submitBtn').disabled = false;
    document.getElementById('playAgainBtn')?.remove();
    displayMessage('The secret number is between 1 and 100');
    updateAttemptsDisplay();
}

function playCheckSound() {
    const audio = new Audio('../numberGuesing/media/button click.mp3');
    audio.play();
    console.log('Sound Played'); // Check if this log appears in the console
}

function checkGuess() {
    playCheckSound();

    const userGuess = parseInt(document.getElementById('guessInput').value);
    attempts++;

    if (userGuess === secretNumber) {
        handleCorrectGuess();
    } else if (userGuess < secretNumber) {
        displayMessage('Too low! Try again.');
    } else {
        displayMessage('Too high! Try again.');
    }

    if (attempts === maxAttempts && userGuess !== secretNumber) {
        displayMessage(`Sorry, you've reached the maximum attempts. The number was ${secretNumber}.`);
        disableInputAndButton();
        addPlayAgainButton();
        playGameOverSound();
    }
    updateAttemptsDisplay();
}

function handleCorrectGuess() {
    displayMessage(`Congratulations! You guessed the correct number in ${attempts} attempts.`);
    playCongratulationsSound();
    triggerConfetti();
    disableInputAndButton();
    addPlayAgainButton();
}

function displayMessage(message) {
    document.getElementById('message').textContent = message;
}

function playCongratulationsSound() {
    const audio = new Audio('../numberGuesing/media/soundtrack win.mp3');
    audio.play();
}

function playGameOverSound(){
    const audio = new Audio('../numberGuesing/media/game over.mp3');
    audio.play();
}

function triggerConfetti() {
    const confetti = document.createElement('div');
    confetti.className = 'confetti';
    document.body.appendChild(confetti);

    setTimeout(() => {
        confetti.remove();
    }, 5000);
};

function disableInputAndButton() {
    document.getElementById('guessInput').disabled = true;
    document.getElementById('submitBtn').disabled = true;
}

function addPlayAgainButton() {
    const playAgainButton = document.createElement('button');
    playAgainButton.textContent = 'Play Again';
    playAgainButton.id = 'playAgainBtn';
    playAgainButton.onclick = resetGame;
    document.getElementById('button-container').appendChild(playAgainButton);
}

function resetGame() {
    startGame();
}

function updateAttemptsDisplay() {
    const attemptsDisplay = document.getElementById('attempts');
    attemptsDisplay.textContent = `Attempts: ${attempts} / ${maxAttempts}`;
}

window.onload = function () {
    startGame();
};

// code for mobile view
window.addEventListener('resize', adjustForMobile);

function adjustForMobile() {
    const windowWidth = window.innerWidth;
    if (windowWidth < 768) {
        const submitButton = document.getElementById('submitBtn');
        submitButton.style.fontSize = '16px';
    } else {
        // Reset styles or functionality if necessary when not in mobile view
        const submitButton = document.getElementById('submitBtn');
        submitButton.style.fontSize = '';
    }
}

// Call adjustForMobile initially when the page loads
adjustForMobile();