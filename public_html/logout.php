<?php
    session_unset();
    session_destroy();
    echo "<script type='text/javascript'>
        window.location = '?p=apresentacao'
    </script>";
?>