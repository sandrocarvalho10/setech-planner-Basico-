<?php
    
if(!$_SESSION['email']){
    header('Location: login_ui.php');
    exit();
}
    
?>