<?php

    $TDI = array_sum($_POST["char"]);
    $total_VAFA = ($TDI * 0.01) + 0.65;    
    
    session_start();
    $_SESSION["VAF_VAFA"] = $total_VAFA;

    header("Location: Total_FP.php");
?>