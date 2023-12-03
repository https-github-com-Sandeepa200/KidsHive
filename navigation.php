<?php
    include("language.php");

    if(isset($_POST['language'])){
        $languages = $_POST['language'];
        setcookie('language', $languages, time() + (86400 * 30), '/'); // Store the selected language in a cookie
    } elseif(isset($_COOKIE['language'])) {
        // If the language is not set in the POST data, but is set in a cookie, use the cookie value
        $languages = $_COOKIE['language'];
    } else {
        $languages = 'en';
    }
?>
<nav id="navBar">
    <img id="logo" src="media/logo.png" alt="logo">
    <span><i id="menuIcon" class="fa-solid fa-bars"></i></span>
    <ul class="menu">
        <li><a href="index.php?language=<?php echo $languages ?>"><?php echo $nav_bar[$languages]['0']?></a></li>
        <li><a href="dashboard.php?language=<?php echo $languages ?>"><?php echo $nav_bar[$languages]['1']?></a></li>
        <li><a href="art.php?language=<?php echo $languages ?>"><?php echo $nav_bar[$languages]['2']?></a></li>
        <li><a href="about.php?language=<?php echo $languages ?>"><?php echo $nav_bar[$languages]['3']?></a></li>
        <!-- logout button -->
        <li><a href="logout.php" title="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        <!-- language change -->
        <li>
            <form method="post">
                <select name="language" id="language" onchange="this.form.submit();">
                    <option value="">Language</option>
                    <option value="en" <?php if($languages == 'en') echo 'selected'; ?>>English</option>
                    <option value="si" <?php if($languages == 'si') echo 'selected'; ?>>Sinhala</option>
                    <option value="ta" <?php if($languages == 'ta') echo 'selected'; ?>>Tamil</option>
                </select>
            </form>
        </li>
    </ul>
</nav>