<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> TAMBAH KATEGORI SERVICE </h3>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">KATEGORI SERVICE</h4>
                        <form class="forms-sample" action="<?php echo base_url('kategori/proses_tambah'); ?>" method="post">
                            <div class="form-group">

                                <input type="text" class="form-control" id="kategori" name="kategori" required placeholder="Kategori Service">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>