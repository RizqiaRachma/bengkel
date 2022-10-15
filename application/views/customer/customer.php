<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> CUSTOMER </h3>

        </div>
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php echo anchor('customer/tambah', '+', array('class' => 'btn btn-danger')) ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>NO HANDPHONE</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($customer as $u) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $u->nama ?></td>
                                            <td><?php echo $u->alamat ?></td>
                                            <td><?php echo $u->no_hp ?></td>
                                            <td>
                                                <?php echo anchor('customer/delete/' . $u->id_cust, 'Delete'); ?></td>
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