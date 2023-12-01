<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task for kids</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="imdBx">
                <!-- Adjust the path to image file if needed -->
                <img src="Images/Activity.png" alt="Activity 1">
            </div>

            <div class="content">
                <h2>Let's Try</h2>
                <button class="btn1" onclick="navigateToActivity('activity1.html')">Go</button>
            </div>
        </div>

        <div class="card">
            <div class="imdBx">
                <!-- Adjust the path to image file if needed -->
                <img src="Images/Activity 2.png" alt="Activity 2">
            </div>

            <div class="content">
                <h2>Let's Try</h2>
                <button class="btn2" onclick="navigateToActivity('activity2.html')">Go</button>
            </div>
        </div>

        <div class="card">
            <div class="imdBx">
                <!-- Adjust the path to image file if needed -->
                <img src="Images/Activity 3.png" alt="Activity 3">
            </div>

            <div class="content">
                <h2>Let's Try</h2>
                <button class="btn3" onclick="navigateToActivity('activity3.html')">Go</button>
            </div>
        </div>

        <script>
            function navigateToActivity(activityPage) {
                window.location.href = activityPage;
            }
        </script>
    </div>
</body>
</html>
