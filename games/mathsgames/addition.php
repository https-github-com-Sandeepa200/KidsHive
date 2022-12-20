<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Addition</title>
</head>
<body>
    <audio id="correct" src="media/correct.mp3"></audio>
    <audio id="wrong" src="media/wrong.mp3"></audio>
    <header>
        <div class="container">
            <h1>Math for kids</h1>
            <ul>
                <li class="current">Addition</li>
            </ul>
        </div>
    </header>
    <div class="wrapper">
        <div class="equation">
            <p>Select the sutable answer...<p>
            <h1 id="num1" style="color: red;">1</h1>
            <h1 style="color: green;">+</h1>
            <h1 id="num2" style="color: rgb(255, 242, 0);">2</h1>
            <h1 style="color: rgb(253, 5, 5);">=</h1>
            <h1 style="color: rgb(1, 7, 1);">?</h1>
        </div>
        <div class="answers">
            <h1 id="option1">1</h1>
            <h1 id="option2">2</h1>
            <h1 id="option3">3</h1>
        </div>
    </div>
    <script src="scripts/add.js"></script>
</body>
</html>