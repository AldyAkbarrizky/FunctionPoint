<?php
    session_start();

    if(!isset($_SESSION["jen_FP"])){ //if login in session is not set
        header("Location: index.php");
    } else {
        $jenis_FP = $_SESSION["jen_FP"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.js"></script>
    <title>Function Point</title>
</head>
<body>
    <div class="container-fluid fill-height" style="background-color: #AAA">
        <div id="main-content-uaf" class="main-content">
            <div class="row">
                <div class="main-title">
                    <h4>
                        Perhitungan 
                        <?php
                            if($jenis_FP == "DFP") {
                                ?>
                                Development Project Function Point
                                <?php
                            } else if($jenis_FP == "EFP") {
                                ?>
                                Enhancement Project Function Point    
                                <?php
                            } else {
                                ?>
                                Application Function Point
                                <?php
                            }
                        ?>
                    </h4>
                    <div style="inline-block !important">
                        <strong>Menghitung Nilai UAF CHGA</strong>
                        <i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoADD"></i>
                    </div>
                </div>
            </div>
            <form method="post" action="CHGA_Count.php">
                <div class="row">
                    <div class="col-auto">
                        <input type="number" name="jml-func" id="jml-func" class="form-control black-input" placeholder="Jumlah Fitur CHGA">
                    </div>
                    <div class="col-auto">
                        <button id="add-button" class="btn btn-primary">Tambahkan</button>
                    </div>
                    <div class="col-auto">
                        <button id="reset-button" class="btn btn-danger">Reset</button>
                    </div>
                    <div id="fitur-container">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="infoADD" tabindex="-1" aria-labelledby="modalADD" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalADD">Unadjusted Function Point</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <strong>Unadjusted Function Point (UAF)</strong> merupakan nilai <strong>Function Point</strong> yang belum 
                    disesuaikan dengan 14 <a href="#" data-bs-toggle="popover" data-bs-trigger="focus" role="button" title="General System Characteristics" data-bs-content="Karakteristik umum suatu sistem">GCS</a>.
                    Nilai UAF didapatkan dengan menghitung jumlah bobot <span data-bs-toggle="tooltip" data-bs-placement="top" title="External Inputs">EI</span>,
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="External Outputs">EO</span>,
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="External Inquiries">EQ</span>,
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="Internal Logical Files">ILF</span>,
                    dan <span data-bs-toggle="tooltip" data-bs-placement="top" title="External Interface Files">EIF</span> dari setiap fitur
                    pada aplikasi yang sedang dilakukan perhitungan FP. Perlu diketahui bahwa dalam Function Point,
                    suatu fitur dikelompokkan menjadi beberapa kelompok tertentu, salah satunya adalah ADD.
                    </p>
                    <p>
                    Fitur-fitur yang dikelompokkan ke dalam <strong>ADD</strong> berbeda untuk beberapa jenis
                    perhitungan <strong>Function Point</strong>. Dalam perhitungan <em>Development Project Function Point</em>
                    dan <em>Enhancement Project Function Point</em>, fitur-fitur yang termasuk ke dalam kelompok ADD adalah
                    <strong>fitur-fitur baru</strong> yang akan ditambahkan ke dalam proyek. Sedangkan pada perhitungan <em>Application
                    Function Point</em>, fitur-fitur yang termasuk ke dalam kelompok ADD adalah <strong>fitur yang sudah ada atau
                    terinstall</strong> pada suatu proyek.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoEI" tabindex="-1" aria-labelledby="modalEI" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEI">External Inputs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>International Function Point Users Group</em> (IFPUG) menyatakan bahwa <strong>External
                    Inputs (EI)</strong> merupakan suatu <em>elementary process</em> yang memproses data atau mengontrol
                    informasi yang berasal dari luar aplikasi. Dengan kata lain, suatu fitur merupakan suatu <strong>
                    External Inputs</strong> jika fitur tersebut memiliki <em>elementary process</em> yang memperoses
                    data yang "masuk" ke dalam aplikasi                
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoEO" tabindex="-1" aria-labelledby="modalEO" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEO">External Outputs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>International Function Point Users Group</em> (IFPUG) menyatakan bahwa <strong>External
                    Outputs (EO)</strong> merupakan suatu <em>elementary process</em> yang memproses data atau mengontrol
                    informasi yang berada di dalam aplikasi untuk dikirimkan ke luar aplikasi. Dengan kata lain, suatu
                    fitur merupakan suatu <strong>External Outputs</strong> jika fitur tersebut memiliki <em>elementary
                    process</em> yang memperoses data yang akan "keluar" aplikasi                
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoEQ" tabindex="-1" aria-labelledby="modalEq" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEQ">External Inquiries</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>International Function Point Users Group</em> (IFPUG) menyatakan bahwa <strong>External
                    Inquiries (EQ)</strong> merupakan suatu <em>elementary process</em> yang memiliki kedua
                    komponen input dan output yang menghasilkan <em>data retrival</em> dari suatu ILF atau EIF.
                    Perbedaannya dengan <strong>External Outputs</strong> adalah EQ tidak melakukan update dan
                    maintain ILF atau EIF, dan juga hasil output bukan merupakan suatu derived data.    
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoILF" tabindex="-1" aria-labelledby="modalILF" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalILF">Internal Logical Files</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>International Function Point Users Group</em> (IFPUG) menyatakan bahwa <strong>Internal
                    Logical Files (ILF)</strong> merupakan suatu <em>elementary process</em> yang memiliki kedua
                    komponen input dan output yang menghasilkan <em>data retrival</em> dari suatu ILF atau EIF.
                    Perbedaannya dengan <strong>External Outputs</strong> adalah EQ tidak melakukan update dan
                    maintain ILF atau EIF, dan juga hasil output bukan merupakan suatu derived data.    
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoEIF" tabindex="-1" aria-labelledby="modalEIF" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEIF">External Interface Files</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>International Function Point Users Group</em> (IFPUG) menyatakan bahwa <strong>External
                    Interface Files (EIF)</strong> merupakan suatu <em>elementary process</em> yang memiliki kedua
                    komponen input dan output yang menghasilkan <em>data retrival</em> dari suatu ILF atau EIF.
                    Perbedaannya dengan <strong>External Outputs</strong> adalah EQ tidak melakukan update dan
                    maintain ILF atau EIF, dan juga hasil output bukan merupakan suatu derived data.    
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoFTR" tabindex="-1" aria-labelledby="modalFTR" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFTR">File Type References</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>File Type References</em> (FTR) merupakan suatu data yang diakses oleh fitur yang bersangkutan.
                    Pada umumnya, FTR menunjuk kepada tabel yang diakses (read/write) oleh fitur. Dengan demikian, jumlah
                    FTR menyatakan jumlah tabel yang diakses oleh fitur.           
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoDET" tabindex="-1" aria-labelledby="modalDET" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDET">Data Element Types</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>Data Element Types</em> (DET) menyatakan data yang diperlukan oleh suatu fitur agar fitur agar
                    fitur tersebut dapat bekerja dengan normal. Namun, perlu diperhatikan bahwa tidak setiap data dapat
                    dikategorikan sebagai suatu DET. Data-data seperti id_pegawai, id_produk, dsb bukan merupakan suatu
                    DET. Sedangkan data seperti nama, alamat, email, dsb dapat dikategorikan sebagai DET.               
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoRET" tabindex="-1" aria-labelledby="modalRET" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRET">Record Element Types</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <em>Record Element Types</em> (RET) menyatakan data yang diperlukan oleh suatu fitur agar fitur agar
                    fitur tersebut dapat bekerja dengan normal. Namun, perlu diperhatikan bahwa tidak setiap data dapat
                    dikategorikan sebagai suatu DET. Data-data seperti id_pegawai, id_produk, dsb bukan merupakan suatu
                    DET. Sedangkan data seperti nama, alamat, email, dsb dapat dikategorikan sebagai DET.               
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
            var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
                trigger: 'focus'
            })

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });

        $("#add-button").click(function () {
            document.getElementById("add-button").disabled = true;
            document.getElementById("jml-func").readOnly = true;
            var jen_FP = "<?php echo $jenis_FP; ?>";
            var jumlah_fungsi = document.getElementById("jml-func").value;
            for (let i = 1; i <= jumlah_fungsi; i++) {
                $("#fitur-container").append('<button type="button" class="tablink" onclick="openPage(\'Fitur'+i+'\', this)">Fitur ' + i + '</button>');
            }
            for (let i = 1; i <= jumlah_fungsi; i++) {
                $("#fitur-container").append(
                    '<div id="Fitur'+i+'" class="tabcontent">' +
                        '<h5>Detail Fitur ' + i + '</h3>' +
                            '<input type="hidden" name="jenis_FP" value="' + jen_FP + '">' +
                            '<div class="row data">' +
                                '<div class="row">' +
                                    '<div class="col-auto padd-0">' +
                                        'Apakah fitur ini merupakan EI?' +
                                    '</div>' +
                                    '<div class="col-auto padd-0">' +
                                        '<i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoEI"></i>' +
                                    '</div>' +
                                    '<div class="col-auto">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EI' + i + '" onclick="radioEIClick(this)" value="EI_yes" id="EIYes'+i+'">' +
                                            '<label class="form-check-label" for="EIYes">' +
                                                'Ya' +
                                            '</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EI' + i + '" onclick="radioEIClick(this)" value="EI_no" id="EINo'+i+'" checked>' +
                                            '<label class="form-check-label" for="EINo">' +
                                                'Tidak' +
                                            '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row mt-1">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="FTR_EI_Fitur'+i+'" class="col-form-label">Jumlah FTR</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoFTR"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="FTR_EI[]" id="FTR_EI_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="DET_EI_Fitur'+i+'" class="col-form-label">Jumlah DET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoDET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="DET_EI[]" id="DET_EI_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row data">' +
                                '<div class="row">' +
                                    '<div class="col-auto padd-0">' +
                                        'Apakah fitur ini merupakan EO?' +
                                    '</div>' +
                                    '<div class="col-auto padd-0">' +
                                        '<i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoEO"></i>' +
                                    '</div>' +
                                    '<div class="col-auto">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EO' + i + '" onclick="radioEOClick(this)" value="EO_yes" id="EOYes'+i+'">' +
                                            '<label class="form-check-label" for="EOYes">' +
                                                'Ya' +
                                            '</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EO' + i + '" onclick="radioEOClick(this)" value="EO_no" id="EONo'+i+'" checked>' +
                                            '<label class="form-check-label" for="EONo">' +
                                                'Tidak' +
                                            '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row mt-1">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="FTR_EO_Fitur'+i+'" class="col-form-label">Jumlah FTR</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoFTR"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="FTR_EO[]" id="FTR_EO_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="DET_EO_Fitur'+i+'" class="col-form-label">Jumlah DET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoDET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="DET_EO[]" id="DET_EO_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row data">' +
                                '<div class="row">' +
                                    '<div class="col-auto padd-0">' +
                                        'Apakah fitur ini merupakan EQ?' +
                                    '</div>' +
                                    '<div class="col-auto padd-0">' +
                                        '<i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoEQ"></i>' +
                                    '</div>' +
                                    '<div class="col-auto">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EQ' + i + '" onclick="radioEQClick(this)" value="EQ_yes" id="EQYes'+i+'">' +
                                            '<label class="form-check-label" for="EQYes">' +
                                                'Ya' +
                                            '</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EQ' + i + '" onclick="radioEQClick(this)" value="EQ_no" id="EQNo'+i+'" checked>' +
                                            '<label class="form-check-label" for="EQNo">' +
                                                'Tidak' +
                                            '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row mt-1">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="FTR_EQ_Fitur'+i+'" class="col-form-label">Jumlah FTR</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoFTR"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="FTR_EQ[]" id="FTR_EQ_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="DET_EQ_Fitur'+i+'" class="col-form-label">Jumlah DET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoDET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="DET_EQ[]" id="DET_EQ_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row data">' +
                                '<div class="row">' +
                                    '<div class="col-auto padd-0">' +
                                        'Apakah fitur ini merupakan ILF?' +
                                    '</div>' +
                                    '<div class="col-auto padd-0">' +
                                        '<i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoILF"></i>' +
                                    '</div>' +
                                    '<div class="col-auto">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="ILF' + i + '" onclick="radioILFClick(this)" value="ILF_yes" id="ILFYes'+i+'">' +
                                            '<label class="form-check-label" for="ILFYes">' +
                                                'Ya' +
                                            '</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="ILF' + i + '" onclick="radioILFClick(this)" value="ILF_no" id="ILFNo'+i+'" checked>' +
                                            '<label class="form-check-label" for="ILFNo">' +
                                                'Tidak' +
                                            '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row mt-1">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="RET_ILF_Fitur'+i+'" class="col-form-label">Jumlah RET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoRET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="RET_ILF[]" id="RET_ILF_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="DET_ILF_Fitur'+i+'" class="col-form-label">Jumlah DET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoDET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="DET_ILF[]" id="DET_ILF_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row data">' +
                                '<div class="row">' +
                                    '<div class="col-auto padd-0">' +
                                        'Apakah fitur ini merupakan EIF?' +
                                    '</div>' +
                                    '<div class="col-auto padd-0">' +
                                        '<i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoEIF"></i>' +
                                    '</div>' +
                                    '<div class="col-auto">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EIF' + i + '" onclick="radioEIFClick(this)" value="EIF_yes" id="EIFYes'+i+'">' +
                                            '<label class="form-check-label" for="EIFYes">' +
                                                'Ya' +
                                            '</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="EIF' + i + '" onclick="radioEIFClick(this)" value="EIF_no" id="EIFNo'+i+'" checked>' +
                                            '<label class="form-check-label" for="EIFNo">' +
                                                'Tidak' +
                                            '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row mt-1">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="RET_EIF_Fitur'+i+'" class="col-form-label">Jumlah RET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoRET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="RET_EIF[]" id="RET_EIF_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-3 padd-0">' +
                                        '<label for="DET_EIF_Fitur'+i+'" class="col-form-label">Jumlah DET</label>' +
                                        '<i class="bi bi-info-circle text-primary" style="margin: 0 5px 0 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoDET"></i>' +
                                    '</div>' +
                                    '<div class="col-2 padd-0">' +
                                        '<input type="number" value="0" name="DET_EIF[]" id="DET_EIF_Fitur'+i+'" class="form-control form-control-sm black-input" readonly>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row data">' +
                                '<div class="col-2 padd-0">' +
                                    '<button type="submit" class="btn btn-primary">Selanjutnya</button>' +
                                '</div>' +
                            '</div>' +
                    '</div>'
                );
            }
        });

        $("#reset-button").click(function () {
            document.getElementById("add-button").disabled = false;
            document.getElementById("jml-func").readOnly = false;
            $("#fitur-container").empty();
            var main = document.getElementsByClassName("main-content");
            main[0].style.height = "250px";
            document.getElementById("jml-func").value = "";
        });

        function openPage(pageName, element) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(pageName).style.display = "block";
            var main = document.getElementsByClassName("main-content");
            main[0].style.height = "920px";
        }

        function radioEIClick(radio) {
            var fitur_id = radio.name.substr(-1);
            var radio_value = radio.value;
            var FTR_id = "FTR_EI_Fitur" + fitur_id;
            var DET_id = "DET_EI_Fitur" + fitur_id;
            if(radio_value == "EI_yes") {
                document.getElementById(FTR_id).readOnly = false;
                document.getElementById(DET_id).readOnly = false;
            } else {
                document.getElementById(FTR_id).readOnly = true;
                document.getElementById(DET_id).readOnly = true;
                document.getElementById(FTR_id).value = "0";
                document.getElementById(DET_id).value = "0";
            }
        }

        function radioEOClick(radio) {
            var fitur_id = radio.name.substr(-1);
            var radio_value = radio.value;
            var FTR_id = "FTR_EO_Fitur" + fitur_id;
            var DET_id = "DET_EO_Fitur" + fitur_id;
            if(radio_value == "EO_yes") {
                document.getElementById(FTR_id).readOnly = false;
                document.getElementById(DET_id).readOnly = false;
            } else {
                document.getElementById(FTR_id).readOnly = true;
                document.getElementById(DET_id).readOnly = true;
                document.getElementById(FTR_id).value = "0";
                document.getElementById(DET_id).value = "0";
            }
        }

        function radioEQClick(radio) {
            var fitur_id = radio.name.substr(-1);
            var radio_value = radio.value;
            var FTR_id = "FTR_EQ_Fitur" + fitur_id;
            var DET_id = "DET_EQ_Fitur" + fitur_id;
            if(radio_value == "EQ_yes") {
                document.getElementById(FTR_id).readOnly = false;
                document.getElementById(DET_id).readOnly = false;
            } else {
                document.getElementById(FTR_id).readOnly = true;
                document.getElementById(DET_id).readOnly = true;
                document.getElementById(FTR_id).value = "0";
                document.getElementById(DET_id).value = "0";
            }
        }

        function radioILFClick(radio) {
            var fitur_id = radio.name.substr(-1);
            var radio_value = radio.value;
            var RET_id = "RET_ILF_Fitur" + fitur_id;
            var DET_id = "DET_ILF_Fitur" + fitur_id;
            if(radio_value == "ILF_yes") {
                document.getElementById(RET_id).readOnly = false;
                document.getElementById(DET_id).readOnly = false;
            } else {
                document.getElementById(RET_id).readOnly = true;
                document.getElementById(DET_id).readOnly = true;
                document.getElementById(RET_id).value = "0";
                document.getElementById(DET_id).value = "0";
            }
        }

        function radioEIFClick(radio) {
            var fitur_id = radio.name.substr(-1);
            var radio_value = radio.value;
            var RET_id = "RET_EIF_Fitur" + fitur_id;
            var DET_id = "DET_EIF_Fitur" + fitur_id;
            if(radio_value == "EIF_yes") {
                document.getElementById(RET_id).readOnly = false;
                document.getElementById(DET_id).readOnly = false;
            } else {
                document.getElementById(RET_id).readOnly = true;
                document.getElementById(DET_id).readOnly = true;
                document.getElementById(RET_id).value = "0";
                document.getElementById(DET_id).value = "0";
            }
        }
    </script>
</body>
</html>