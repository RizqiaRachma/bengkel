<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> TAMBAH JENIS SERVICE </h3>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">JENIS SERVICE</h4>
                        <form class="forms-sample" action="<?php echo base_url('jenis_service/proses_tambah'); ?>" method="post">
                            <div class="form-group">
                                <select class="form-control " name="id_kategori" required>
                                    <option hidden selected>Pilih Kategori</option>
                                    <?php foreach ($kategori as $b) { ?>
                                        <option value="<?php echo $b->id ?>"><?php echo $b->kategori ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="jenis_service" name="jenis_service" required placeholder="Jenis Service">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>