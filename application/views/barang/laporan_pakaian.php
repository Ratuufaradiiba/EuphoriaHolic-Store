<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('admin/laporan/cetak_laporan_pakaian'); ?>" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M420 128.1V16H92v112.1A80.1 80.1 0 0 0 16 208v192h68v-32H48V208a48.054 48.054 0 0 1 48-48h320a48.054 48.054 0 0 1 48 48v160h-44v32h76V208a80.1 80.1 0 0 0-76-79.9Zm-32-.1H124V48h264Z"/><path fill="currentColor" d="M396 200h32v32h-32zm-280 64H76v32h40v200h272V296h40v-32H116Zm240 200H148V296h208Z"/></svg> Print </a>
            <a href="<?= base_url('admin/laporan/export_excel'); ?>" class="btn btn-success mb-3"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M453.547 273.449H372.12v-40.714h81.427v40.714zm0 23.264H372.12v40.714h81.427v-40.714zm0-191.934H372.12v40.713h81.427V104.78zm0 63.978H372.12v40.713h81.427v-40.713zm0 191.934H372.12v40.714h81.427V360.69zm56.242 80.264c-2.326 12.098-16.867 12.388-26.58 12.796H302.326v52.345h-36.119L0 459.566V52.492L267.778 5.904h34.548v46.355h174.66c9.83.407 20.648-.291 29.197 5.583c5.991 8.608 5.41 19.543 5.817 29.43l-.233 302.791c-.29 16.925 1.57 34.2-1.978 50.892zm-296.51-91.256c-16.052-32.57-32.395-64.909-48.39-97.48c15.82-31.698 31.408-63.512 46.937-95.327c-13.203.64-26.406 1.454-39.55 2.385c-9.83 23.904-21.288 47.169-28.965 71.888c-7.154-23.323-16.634-45.774-25.3-68.515c-12.796.698-25.592 1.454-38.387 2.21c13.493 29.78 27.86 59.15 40.946 89.104c-15.413 29.081-29.837 58.57-44.785 87.825c12.737.523 25.475 1.047 38.212 1.221c9.074-23.148 20.357-45.424 28.267-69.038c7.096 25.359 19.135 48.798 29.023 73.051c14.017.99 27.976 1.862 41.993 2.676zM484.26 79.882H302.326v24.897h46.53v40.713h-46.53v23.265h46.53v40.713h-46.53v23.265h46.53v40.714h-46.53v23.264h46.53v40.714h-46.53v23.264h46.53v40.714h-46.53v26.897H484.26V79.882z"/></svg> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $a = 1;
                        foreach ($barang as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['nama_brg']; ?></td>
                        <td><?= $b['keterangan']; ?></td>
                        <td><?= $b['kategori']; ?></td>
                        <td><?= $b['harga']; ?></td>
                        <td><?= $b['stok']; ?></td>                    
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
