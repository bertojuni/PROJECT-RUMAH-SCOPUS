<!--============================= Gallery =============================-->
<div class="gallery-wrap">
    <div class="container">
        <!-- Style 2 -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="gallery-style">Gallery Photo</h3>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div id="gallery">
                    <div id="gallery-content">
                        <div id="gallery-content-center">
                            <?php foreach ($all_galeri->result() as $row) : ?>
                                <a href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                    <img src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="img-fluid mb-2" alt="black sample"/>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//End Style 2 -->

    </div>
</div>
<!--//End Gallery -->