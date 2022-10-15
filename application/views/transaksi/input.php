<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> TAMBAH BOOKING SERVICE </h3>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BOOKING SERVICE</h4>
                        <form class="forms-sample" action="<?php echo base_url('transaksi/proses_tambah'); ?>" method="post">
                            <div class="form-group">
                                <select class="form-control " name="id_cust" required>
                                    <option hidden selected>Pilih Customer</option>
                                    <?php foreach ($customer as $b) { ?>
                                        <option value="<?php echo $b->id_cust ?>"><?php echo $b->nama ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control " name="id_jenis_service" required>
                                    <option hidden selected>Pilih Jenis Service</option>
                                    <?php foreach ($jenis_service as $b) { ?>
                                        <option value="<?php echo $b->id ?>"><?php echo $b->jenis_service ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl_booking">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl_service">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>