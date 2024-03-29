                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Logout Sistem</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda ingin logout dari sistem?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary"
                                    data-dismiss="modal">Cancel</button>
                                <a href="<?php echo $url_config ?>logout" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <!---Container Fluid-->
                </div>
                <!-- Footer -->
                <footer class="sticky-footer bg-white mt-3">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                                </script> - SISTEM PENCATATAN KEUANGAN DAN KEANGGOTAAN EKSTRAKURIKULER
                            </span>
                        </div>
                    </div>

                    <div class="container my-auto py-2">
                        <div class="copyright text-center my-auto">
                            <h6>SMA NEGERI 1 MEJAYAN</h6>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->
                </div>
                </div>

                <!-- Scroll to top -->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <script src="<?php echo $url_vendors ?>jquery/jquery.min.js"></script>
                <script src="<?php echo $url_vendors ?>bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="<?php echo $url_vendors ?>jquery-easing/jquery.easing.min.js"></script>
                <script src="<?php echo $url_js ?>ruang-admin.min.js"></script>
                <script src="<?php echo $url_vendors ?>datatables/jquery.dataTables.min.js"></script>
                <script src="<?php echo $url_vendors ?>datatables/dataTables.bootstrap4.min.js"></script>
                <script src="<?php echo $url_vendors ?>select2/dist/js/select2.min.js"></script>
                <script src="<?php echo $url_vendors ?>bootstrap-toogle/bootstrap4-toggle.min.js"></script>
                <script
                    src="<?php echo $url_vendors . 'bootstrap-duallistbox-4/dist/jquery.bootstrap-duallistbox.min.js' ?>">
                </script>
                <script src="<?php echo $url_js . 'bootstrap-switch.min.js' ?>"></script>
                <script src="<?php echo $url_js ?>spekta.js"></script>
                <?php
                if (isset($_GET['mes'])) {
                    if ($_GET['mes'] == 'ujian_berlangsung') {
                ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'TERLARANG',
    text: 'Anda tidak dapat mengakses halaman ini saat ujian berlangsung',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php
                    } else if ($_GET['mes'] == 'gagal_ukuran') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'UKURAN FOTO YANG DIUNGGAH TERLALU BESAR',
    text: 'Silahkan unggah foto dengan ukuran kurang dari 2 MB',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'error') { ?>
                <script>
Swal.fire({
    icon: 'error',
    title: 'SISTEM SEDANG SIBUK',
    text: 'Silahkan ulangi dalam 5 menit',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'reg_open') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'PERUBAHAN BERHASIL',
    text: 'Penerimaan Calon Anggota Ekstrakurikuler Akan Dimulai Pada Waktu Yang Telah Ditentukan',
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_app') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data Aplikasi Berhasil Diubah',
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'gagal_fileukuran') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'UKURAN BERKAS YANG DIUNGGAH TERLALU BESAR',
    text: 'Silahkan unggah foto dengan ukuran kurang dari 100 MB',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'gagal_fileekstensi') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'EKSTENSI BERKAS TIDAK DIPERBOLEHKAN',
    text: 'Silahkan unggah berkas dengan ekstensi PDF, DOCX, DOC, XLSX, XLS',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'file_hapus') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERKAS BERHASIL DIHAPUS',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'verval') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data telah terverifikasi',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'tolak') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'VERVAL DITOLAK',
    text: 'Data verval ditolak',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'fileedit_success') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data berkas sudah berhasil diubah',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'fileadd_success') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data berkas sudah berhasil ditambahkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_edekstra') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data Ekstrakurikuler Berhasil Diubah',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_addadmin') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data Admin Berhasil Ditambahkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_editadmin') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data Admin Berhasil Diubah',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_addpembina') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data Pembina Berhasil Ditambahkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_editpembina') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data Pembina Berhasil Diubah',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'dataganda') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'PERINGATAN',
    text: 'Ditemukan data ganda',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'datasekolah_edit') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data sekolah berhasil diubah',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'datasekolah_buat') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Data sekolah berhasil dibuat',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'berhasil_cracc') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Akun Berhasil Dibuat',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'aktif') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Akun Berhasil Diaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'nonaktif') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'PERINGATAN',
    text: 'Akun dinonaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'hapus') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Akun Dihapus',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'keamanan_on') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'KEAMANAN AUTENTIKASI DIAKTIFKAN',
    text: 'Silakan mengaktifkan fitur keamanan autentikasi',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'keamanan_off') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'PERINGATAN',
    text: 'Sistem keamanan autentikasi dinonaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'otp_on') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'OTP Diaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'otp_off') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'OTP Dinonaktifkan, Login Dengan Email Diaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == '2auth_on') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Login 2 Langkah Diaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == '2auth_off') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Login 2 Langkah Dinonaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'maillog_on') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Login Dengan Email Diaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'maillog_off') { ?>
                <script>
Swal.fire({
    icon: 'success',
    title: 'BERHASIL',
    text: 'Login Dengan Email Dinonaktifkan, OTP diaktifkan',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } else if ($_GET['mes'] == 'only_one') { ?>
                <script>
Swal.fire({
    icon: 'warning',
    title: 'PERINGATAN',
    text: 'Hanya diperbolehkan mengaktifkan satu fitur keamanan autentikasi',
    showConfirmButton: false,
    timer: 5000,
}).then((result) => {
    window.location.href = "?";
});
                </script>
                <?php } ?> <?php
                            }
                                ?>

                <script>
$(document).ready(function() {
    $("#tabeltolak").DataTable();
    $("#tabelverval").DataTable();
    $("#tabelmember").DataTable();
    $("#tabelaccount").DataTable();
    $("#tabeluangmasuk").DataTable();
    $("#tabeluangkeluar").DataTable();
    $("#tabelekskul").DataTable();
    $("#tabelpembina").DataTable();
});
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener(
            "submit",
            function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });
})();

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
    'November', 'Desember'
];
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var thisDay = date.getDay(),
    thisDay = myDays[thisDay];
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;

document.getElementById("tgl").innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;

function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("clock").innerHTML = h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    } // add zero in front of numbers < 10
    return i;
}
                </script>
                <!-- Page level custom scripts -->
                </body>

                </html>