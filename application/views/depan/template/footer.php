<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+6281226883280" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url(); ?>">
                        <img class="img img-responsive" width="150px;" src="<?php echo base_url() . 'theme/images/logo/logo-footer.png' ?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y'); ?> © copyright by <a href="" target="_blank">Rumah Scopus</a>. <br>All rights reserved.</p>

                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Menu Utama</h3>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('artikel'); ?>">Blog </a></li>
                        <li><a href="<?php echo site_url('galeri'); ?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Akademik</h3>
                    <ul>
                        <li><a href="<?php echo site_url('#'); ?>">Bengkel Paper</a></li>
                        <li><a href="<?php echo site_url('#'); ?>">Webinar</a></li>
                        <li><a href="<?php echo site_url('#'); ?>">Private</a></li>
                        <li><a href="<?php echo site_url('#'); ?>">Manuscript Preparation</a></li>
                        <li><a href="<?php echo site_url('#'); ?>">Submit and Indexing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3>Hubungi Kami</h3>
                    <p><span>Alamat: </span>Bangunsari, Bangunkerto, Turi, Sleman, Yogyakarta 55551</p>
                    <p>Email : info@rumahscopus.com
                        <br> Phone : (+62) 812-2688-3280</p>
                    <ul class="footer-social-icons">
                        <li><a href="https://www.facebook.com/rumah.scopus.3"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCRieEL0h0Zi4ju0t9zeU76g"><i class="fa fa-youtube fa-in" aria-hidden="true"></i></a></li>
                        <li><a href="mailto:info@rumahscopus.com"><i class="fa fa-envelope fa-tw" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/rumah_scopus/"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>

                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--//END FOOTER -->