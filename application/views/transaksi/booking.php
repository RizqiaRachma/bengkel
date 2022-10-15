<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> BOOKING SERVICE </h3>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php echo anchor('transaksi/tambah', '+', array('class' => 'btn btn-danger')) ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>JENIS SERVICE</th>
                                        <th>TANGGAL BOOKING</th>
                                        <th>TANGGAL SERVICE</th>
                                        <th>NAMA KONSUMEN</th>
                                        <th>ALAMAT</th>
                                        <th>NO HANDPHONE</th>
                                        <th>STATUS</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($transaksi as $u) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $u->jenis_service ?></td>
                                            <td><?php echo $u->tgl_booking ?></td>
                                            <td><?php echo $u->tgl_service ?></td>
                                            <td><?php echo $u->nama ?></td>
                                            <td><?php echo $u->alamat ?></td>
                                            <td><?php echo $u->no_hp ?></td>
                                            <td><?php if ($u->status == "Belum Proses") {
                                                    echo anchor('transaksi/tambah', 'Proses', array('class' => 'btn btn-warning'));
                                                } else {
                                                    echo $u->status;
                                                } ?></td>
                                            <?php if ($u->status == "Belum Proses") { ?>
                                                <td><?php echo anchor('customer/edit/' . $u->id_cust, 'Edit'); ?> |
                                                    <?php echo anchor('customer/delete/' . $u->id_cust, 'Delete'); ?></td>
                                            <?php } ?>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>