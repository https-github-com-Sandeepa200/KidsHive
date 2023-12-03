<?php
session_start();
include("functions.php");

if(isset($_SESSION['session_id'])){
    echo '<script>
            var confirmLogout = confirm("Are you sure you want to log out?");
            if(confirmLogout){
                alert("You have successfully signed out");
                window.location.href = "index.php";
                ';unset($_SESSION["session_id"]);echo '
            } else {
                alert("Logout canceled");
                window.location.href = "index.php";
            }
          </script>';
} else {
    alert("You have already signed out!");
    echo '<script>window.location.href = "index.php"</script>';
}
?>
