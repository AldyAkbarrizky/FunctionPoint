<?php

$total_EI = 0;
$total_EO = 0;
$total_EQ = 0;
$total_ILF = 0;
$total_EIF = 0;
$total_UAF_ADD = 0;

for ($i = 0; $i < $_POST["jml-func"]; $i++) {
    // Perhitungan Nilai External Inputs
    if($_POST["FTR_EI"][$i] >= 0 && $_POST["FTR_EI"][$i] <= 1) {
        if($_POST["DET_EI"][$i] >= 1 && $_POST["DET_EI"][$i] <= 4) {
            $total_EI += 3;
        } else if($_POST["DET_EI"][$i] >= 5 && $_POST["DET_EI"][$i] <= 15) {
            $total_EI += 3;
        } else if($_POST["DET_EI"][$i] >= 16) {
            $total_EI += 4;
        }
    } else if($_POST["FTR_EI"][$i] == 2) {
        if($_POST["DET_EI"][$i] >= 1 && $_POST["DET_EI"][$i] <= 4) {
            $total_EI += 3;
        } else if($_POST["DET_EI"][$i] >= 5 && $_POST["DET_EI"][$i] <= 15) {
            $total_EI += 4;
        } else if($_POST["DET_EI"][$i] >= 16) {
            $total_EI += 6;
        }
    } else if($_POST["FTR_EI"][$i] >=3) {
        if($_POST["DET_EI"][$i] >= 1 && $_POST["DET_EI"][$i] <= 4) {
            $total_EI += 4;
        } else if($_POST["DET_EI"][$i] >= 5 && $_POST["DET_EI"][$i] <= 15) {
            $total_EI += 6;
        } else if($_POST["DET_EI"][$i] >= 16) {
            $total_EI += 6;
        }
    }

    // Perhitungan Nilai External Outputs
    if($_POST["FTR_EO"][$i] >= 0 && $_POST["FTR_EO"][$i] <= 1) {
        if($_POST["DET_EO"][$i] >= 1 && $_POST["DET_EO"][$i] <= 5) {
            $total_EO += 4;
        } else if($_POST["DET_EO"][$i] >= 6 && $_POST["DET_EO"][$i] <= 19) {
            $total_EO += 4;
        } else if($_POST["DET_EO"][$i] >= 20) {
            $total_EO += 5;
        }
    } else if($_POST["FTR_EO"][$i] >= 2 && $_POST["FTR_EO"][$i] <= 3) {
        if($_POST["DET_EO"][$i] >= 1 && $_POST["DET_EO"][$i] <= 5) {
            $total_EO += 4;
        } else if($_POST["DET_EO"][$i] >= 6 && $_POST["DET_EO"][$i] <= 19) {
            $total_EO += 5;
        } else if($_POST["DET_EO"][$i] >= 20) {
            $total_EO += 7;
        }
    } else if($_POST["FTR_EO"][$i] >=4) {
        if($_POST["DET_EO"][$i] >= 1 && $_POST["DET_EO"][$i] <= 5) {
            $total_EO += 5;
        } else if($_POST["DET_EO"][$i] >= 6 && $_POST["DET_EO"][$i] <= 19) {
            $total_EO += 7;
        } else if($_POST["DET_EO"][$i] >= 20) {
            $total_EO += 7;
        }
    }

    // Perhitungan Nilai External Inquiries
    if($_POST["FTR_EQ"][$i] >= 0 && $_POST["FTR_EQ"][$i] <= 1) {
        if($_POST["DET_EQ"][$i] >= 1 && $_POST["DET_EQ"][$i] <= 5) {
            $total_EQ += 3;
        } else if($_POST["DET_EQ"][$i] >= 6 && $_POST["DET_EQ"][$i] <= 19) {
            $total_EQ += 3;
        } else if($_POST["DET_EQ"][$i] >= 20) {
            $total_EQ += 4;
        }
    } else if($_POST["FTR_EQ"][$i] >= 2 && $_POST["FTR_EQ"][$i] <= 3) {
        if($_POST["DET_EQ"][$i] >= 1 && $_POST["DET_EQ"][$i] <= 5) {
            $total_EQ += 3;
        } else if($_POST["DET_EQ"][$i] >= 6 && $_POST["DET_EQ"][$i] <= 19) {
            $total_EQ += 4;
        } else if($_POST["DET_EQ"][$i] >= 20) {
            $total_EQ += 6;
        }
    } else if($_POST["FTR_EQ"][$i] >=4) {
        if($_POST["DET_EQ"][$i] >= 1 && $_POST["DET_EQ"][$i] <= 5) {
            $total_EQ += 4;
        } else if($_POST["DET_EQ"][$i] >= 6 && $_POST["DET_EQ"][$i] <= 19) {
            $total_EQ += 6;
        } else if($_POST["DET_EQ"][$i] >= 20) {
            $total_EQ += 6;
        }
    }

    // Perhitungan Internal Logical Files
    if($_POST["RET_ILF"][$i] >= 0 && $_POST["RET_ILF"][$i] <= 1) {
        if($_POST["DET_ILF"][$i] >= 1 && $_POST["DET_ILF"][$i] <= 19) {
            $total_ILF += 7;
        } else if($_POST["DET_ILF"][$i] >= 20 && $_POST["DET_ILF"][$i] <= 50) {
            $total_ILF += 7;
        } else if($_POST["DET_ILF"][$i] >= 51) {
            $total_ILF += 10;
        }
    } else if($_POST["RET_ILF"][$i] >= 2 && $_POST["RET_ILF"][$i] <= 5) {
        if($_POST["DET_ILF"][$i] >= 1 && $_POST["DET_ILF"][$i] <= 19) {
            $total_ILF += 7;
        } else if($_POST["DET_ILF"][$i] >= 20 && $_POST["DET_ILF"][$i] <= 50) {
            $total_ILF += 10;
        } else if($_POST["DET_ILF"][$i] >= 51) {
            $total_ILF += 15;
        }
    } else if($_POST["RET_ILF"][$i] >= 6) {
        if($_POST["DET_ILF"][$i] >= 1 && $_POST["DET_ILF"][$i] <= 19) {
            $total_ILF += 10;
        } else if($_POST["DET_ILF"][$i] >= 20 && $_POST["DET_ILF"][$i] <= 50) {
            $total_ILF += 15;
        } else if($_POST["DET_ILF"][$i] >= 51) {
            $total_ILF += 15;
        }
    }

    // Perhitungan External Interface Files
    if($_POST["RET_EIF"][$i] >= 0 && $_POST["RET_EIF"][$i] <= 1) {
        if($_POST["DET_EIF"][$i] >= 1 && $_POST["DET_EIF"][$i] <= 19) {
            $total_EIF += 5;
        } else if($_POST["DET_EIF"][$i] >= 20 && $_POST["DET_EIF"][$i] <= 50) {
            $total_EIF += 5;
        } else if($_POST["DET_EIF"][$i] >= 51) {
            $total_EIF += 7;
        }
    } else if($_POST["RET_EIF"][$i] >= 2 && $_POST["RET_EIF"][$i] <= 5) {
        if($_POST["DET_EIF"][$i] >= 1 && $_POST["DET_EIF"][$i] <= 19) {
            $total_EIF += 5;
        } else if($_POST["DET_EIF"][$i] >= 20 && $_POST["DET_EIF"][$i] <= 50) {
            $total_EIF += 7;
        } else if($_POST["DET_EIF"][$i] >= 51) {
            $total_EIF += 10;
        }
    } else if($_POST["RET_EIF"][$i] >= 6) {
        if($_POST["DET_EIF"][$i] >= 1 && $_POST["DET_EIF"][$i] <= 19) {
            $total_EIF += 7;
        } else if($_POST["DET_EIF"][$i] >= 20 && $_POST["DET_EIF"][$i] <= 50) {
            $total_EIF += 10;
        } else if($_POST["DET_EIF"][$i] >= 51) {
            $total_EIF += 10;
        }
    }
}

$total_UAF_ADD = $total_EI + $total_EO + $total_EQ + $total_ILF + $total_EIF;

session_start();
$_SESSION["jen_FP"] = $_POST["jenis_FP"];
$_SESSION["UAF_ADD"] = $total_UAF_ADD;

if($_POST["jenis_FP"] == "DFP") {
    header("Location: UAF_CFP.php");
} else if($_POST["jenis_FP"] == "EFP") {
    header("Location: UAF_CHGA.php");
} else if($_POST["jenis_FP"] == "AFP") {
    $_SESSION["UAF_total"] = $_SESSION["UAF_ADD"];
    header("Location: VAF.php");
}

?>