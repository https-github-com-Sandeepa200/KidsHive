<?php
    include("language.php");
    if(isset($_POST['language'])){
        $languages = $_POST['language'];
        
    }else{
        $languages = 'en';
    }
    

?>
<nav id="navBar">
    <img id="logo" src="media/logo.png" alt="logo">
    <span><i id="menuIcon" class="fa-solid fa-bars"></i></span>
    <ul class="menu">
        <li><a href="index.php"><?php echo $nav_bar[$languages]['0']?></a></li>
        <li><a href="dashboard.php"><?php echo $nav_bar[$languages]['1']?></a></li>
        <li><a href="art.php"><?php echo $nav_bar[$languages]['2']?></a></li>
        <li><a href="about.php"><?php echo $nav_bar[$languages]['3']?></a></li>
        <!-- logout button -->
        <li><a href="logout.php" title="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        <!-- language change -->
        <li>
            <form method="post">
                <select name="language" id="language" onchange="this.form.submit();">
                    <option value="">Language</option>
                    <option value="en">English</option>
                    <option value="si">Sinhala</option>
                    <option value="ta">Tamil</option>
                </select>
            </form>
        </li>
        
        

    </ul>
</nav>


