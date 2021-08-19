<?php

    $TDI = array_sum($_POST["char"]);
    $total_VAF = ($TDI * 0.01) + 0.65;    
    
    session_start();
    $_SESSION["VAF_total"] = $total_VAF;

    header("Location: Total_FP.php");
?>