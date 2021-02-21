<?php   include '../db.php';    ?>

<?php

    function redirect($url){
        header("location: $url");
        exit();
    }

?>