<?php
require_once 'head.php';
require_once '../../config/koneksi.php';
$tes_id = $_GET['test_id'];
$query2 = "SELECT * FROM tb_test WHERE test_id = $tes_id";
$result2 = $conn2->query($query2);
while ($row2 = $result2->fetch_assoc()) {
    if (date("Y-m-d") >= $row2['cbt_date_start'] && date("Y-m-d") <= $row2['cbt_date_end']) { ?>
<script>
window.location.href = "exam?mes=ujian_berlangsung";
</script>
<?php
    }
}

?>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data CBT SPEKTA</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">CBT SPEKTA</li>
        </ol>
    </div>

    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data CBT SPEKTA</h6>
            </div>
            <div class="card-body">
                <table class="mb-0 table table-bordered text-start">
                    <thead>
                        <?php
                        // hitung total peserta cbt
                        $cbtUser = mysqli_query($conn2, "SELECT * FROM tb_users_cbt 
                                INNER JOIN tb_users_cbt_choice ON tb_users_cbt_choice.id_users_cbt = tb_users_cbt.id_users_cbt
                                INNER JOIN tb_test ON tb_test.test_id = tb_users_cbt_choice.test_id
                                WHERE tb_users_cbt.role = 'USER' AND tb_test.test_id='$tes_id'");
                        $totalCbtUser = mysqli_num_rows($cbtUser);

                        // hitung selesai cbt
                        $cbtEnd = mysqli_query($conn2, "SELECT * FROM tb_users_cbt 
                        INNER JOIN tb_users_cbt_choice ON tb_users_cbt_choice.id_users_cbt = tb_users_cbt.id_users_cbt
                        INNER JOIN tb_test ON tb_test.test_id = tb_users_cbt_choice.test_id
                        INNER JOIN tb_users_cbt_status ON tb_users_cbt.id_users_cbt = tb_users_cbt_status.id_users_cbt
                        WHERE tb_users_cbt_status.work_status = '1' AND tb_users_cbt.role = 'USER' AND tb_test.test_id='$tes_id'");
                        $totalEnd = mysqli_num_rows($cbtEnd);

                        $query2 = "SELECT * FROM tb_test  WHERE test_id = $tes_id";
                        $result2 = $conn2->query($query2);
                        while ($row2 = $result2->fetch_assoc()) { ?>
                        <tr>
                            <th>Nama Ujian</th>
                            <td><?php echo $row2['test_name'] ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Ujian</th>
                            <td><?php echo tgl_indo(date("Y-m-d", strtotime($row2['cbt_date_start']))) . ' ~ ' . tgl_indo(date("Y-m-d", strtotime($row2['cbt_date_end']))); ?>
                        </tr>
                        <tr>
                            <th>Durasi Ujian</th>
                            <td><?php echo $row2['cbt_timer'] . ' menit'; ?></td>
                        </tr>
                        <tr>
                            <th>Peserta Ujian</th>
                            <td><?php echo $totalCbtUser ?></td>
                        </tr>
                        <tr>
                            <th>Selesai Ujian</th>
                            <td><?php echo $totalEnd ?></td>
                        </tr>
                        <?php } ?>
                    </thead>
                </table>
            </div>
            <div class="card-body">
                <h5 class="card-title">Data Hasil Ujian</h5>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="tabelmember">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nama Peserta</th>
                                <th>Nomor Peserta Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Nilai Ujian</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Peserta</th>
                                <th>Nomor Peserta Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Nilai Ujian</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM tb_users_cbt
            INNER JOIN tb_users_cbt_status ON tb_users_cbt.id_users_cbt = tb_users_cbt_status.id_users_cbt
            INNER JOIN tb_test ON tb_users_cbt_status.test_id = tb_test.test_id
            INNER JOIN tb_users_cbt_grade ON tb_users_cbt.id_users_cbt = tb_users_cbt_grade.id_users_cbt
            INNER JOIN tb_users_cbt_date ON tb_users_cbt.id_users_cbt = tb_users_cbt_date.id_users_cbt
            INNER JOIN db_spekta_3.tb_users ON  tb_users_cbt.id_users = tb_users.id_users
            WHERE tb_test.test_id = '$tes_id' ORDER BY tb_users_cbt_grade.grade DESC";
                            $result = $conn2->query($query);
                            $jumlahdata = mysqli_num_rows($result);
                            while ($row = $result->fetch_assoc()) {
                                $no = 1;
                            ?>
                            <tr>
                                <td class="text-center text-muted"><?php echo $no++ ?></td>
                                <td>
                                    <div class="widget-heading"><?php echo $row['name'] ?></div>
                                </td>
                                <td>
                                    <div class="widget-heading"><?php echo $row['username'] ?></div>
                                </td>
                                <td>
                                    <?php echo tgl_indo(date("Y-m-d", strtotime($row['users_cbt_date']))) ?>
                                </td>
                                <td>
                                    <?php
                                        if ($row['is_reg'] == '1') {
                                            echo "--";
                                        } elseif ($row['grade'] <= $row['test_min_grade']) { ?>
                                    <h4 class="mt-2 tx-medium text-danger ">
                                        <?php echo $row['grade'] ?>
                                    </h4>
                                    <?php } else if ($row['grade'] > $row['test_min_grade']) { ?>
                                    <h4 class="mt-2 tx-medium text-success">
                                        <?php echo $row['grade'] ?>
                                    </h4>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php
                if ($jumlahdata > 0) { ?>
                <div class="d-block text-center card-footer">
                    <a href="export_hasil_ujian?tes_id=<?php echo $tes_id ?>" class="btn-wide btn btn-primary">EXPORT
                        DATA</a>
                </div>
                <?php } else { ?>
                <?php } ?>
            </div>
        </div>
        <?php
        require_once 'foot.php';
        ?>