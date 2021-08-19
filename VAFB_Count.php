<?php

    $TDI = array_sum($_POST["char"]);
    $total_VAFB = ($TDI * 0.01) + 0.65;    
    
    session_start();
    $_SESSION["VAF_VAFB"] = $total_VAFB;

    header("Location: VAFA.php");
?>