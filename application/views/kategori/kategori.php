<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> KATEGORI SERVICE </h3>

        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php echo anchor('kategori/tambah', '+', array('class' => 'btn btn-danger')) ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>KATEGORI SERVICE</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $u) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $u->kategori ?></td>
                                            <td><?php echo anchor('kategori/delete/' . $u->id, 'Delete'); ?></td>
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