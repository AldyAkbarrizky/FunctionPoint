<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.6.0.js"></script>
    <title>Function Point</title>
</head>
<body>
    <div class="container-fluid fill-height" style="background-color: #AAA">
        <div class="main-content">
            <h4>Program Perhitungan Function Point</h4><br/>
            <span>Pilih jenis Function Point</span>
            <i class="bi bi-info-circle text-primary" style="margin-left: 5px; cursor:pointer" data-bs-toggle="modal" data-bs-target="#infoFP"></i>
            <select id="jenis-FP" class="form-select select-fp black-input">
                <option value="1">Development Project Function Point Count</option>
                <option value="2">Enhancement Project Function Point Count</option>
                <option value="3">Application Function Point Count</option>
            </select>
            <button type="button" class="btn btn-primary" onclick="getJenisFP()">Lanjutkan</button>
        </div>
    </div>
    <div class="modal fade" id="infoFP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jenis-Jenis Function Point</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                Penentuan jenis <strong>Function Point Analysis (FPA)</strong> ini dilakukan karena
                setiap jenis dari FPA memiliki rumus perhitungan <strong> Unadjusted Function Point (UAF) </strong> yang berbeda.
                Berikut adalah penjelasan singkat mengenai ketiga jenis dari Function Point :
                </p>
                <ol>
                    <li>
                        <strong>Development Project Function Point Count</strong><br/>
                        <p>
                            Perhitungan Function Point yang dilakukan untuk mengukur nilai
                            Function Point dari suatu aplikasi yang akan dibuat
                        </p>
                    </li>
                    <li>
                        <strong>Enhancement Project Function Point Count</strong>
                        <p>
                            Perhitungan Function Point untuk mengukur nilai FP dari fitur suatu
                            aplikasi yang mengalami modifikasi
                        </p>
                    </li>
                    <li>
                        <strong>Application Function Point Count</strong>
                        <p>
                            Perhitungan Function Point untuk mengukur nilai FP dari suatu aplikasi
                            yang sudah ada
                        </p>
                    </li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <script>
        function getJenisFP() {
            var jen_FP = document.getElementById("jenis-FP").value;
            if(jen_FP == "1") {
                //location.href = location.href + "UAF_ADD.php";
                var val = "DFP";
            } else if(jen_FP == "2") {
                var val = "EFP";
            } else {
                var val = "AFP";
            }
            var form = $('<form action="UAF_ADD.php" method="post">' +
                            '<input type="hidden" name="jenis_FP" value="' + val + '"/>' +
                         '</form>');
            $('body').append(form);
            form.submit();
        }
    </script>
</body>
</html>