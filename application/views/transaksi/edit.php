<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> EDIT BOOKING SERVICE </h3>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BOOKING SERVICE</h4>
                        <?php foreach ($transaksi as $x) { ?>
                            <form class="forms-sample" action="<?php echo base_url('transaksi/update'); ?>" method="post">
                                <input type="text" hidden class="form-control-plaintext" name="id_trx" value="<?php echo $x->id_trx ?>">
                                <div class="form-group">
                                    <select class="form-control " name="id_cust" required>

                                        <?php foreach ($customer as $b) { ?>
                                            <option <?php if ($x->id_cust == $b->id_cust) {
                                                        echo 'selected';
                                                    } ?> value="<?php echo $b->id_cust ?>"><?php echo $b->nama ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control " name="id_jenis_service" required>

                                        <?php foreach ($jenis_service as $b) { ?>
                                            <option <?php if ($x->id_jenis_service == $b->id) {
                                                        echo 'selected';
                                                    } ?> value="<?php echo $b->id ?>"><?php echo $b->jenis_service ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_booking" value="<?= $x->tgl_booking ?>">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_service" value="<?= $x->tgl_service ?>">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>

                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>