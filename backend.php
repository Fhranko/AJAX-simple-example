<?php
    if(isset($_POST)) {
        echo "Received from backend ". $_POST['username'];
    }
?>