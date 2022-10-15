<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> TAMBAH CUSTOMER </h3>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">CUSTOMER</h4>
                        <form class="forms-sample" action="<?php echo base_url('customer/proses_tambah'); ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" required name="id_cust" required placeholder="No Identitas">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" required name="nama" required placeholder="Nama">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required name="alamat" required placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required name="no_hp" required placeholder="No Handphone">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>