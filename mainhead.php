<?php
    require_once("connectionweb.php");
    if(!$_SESSION['studid']){
        session_destroy();
        header('location:login.php');
        ?>
        <script>
            alert("Please Log In");
            window.location="login.php";
        </script><?php
    }
?>  