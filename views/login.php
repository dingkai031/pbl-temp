<section>
    <div class="container d-flex justify-content-center">
        <div class="card shadow w-100">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= ROOT_URL ?>assets/img/illustration/login-illustration.svg" alt="login illustration" class="img-fluid">
                        </div>
                        <div class="col-sm-6 d-flex flex-column justify-content-center">
                            <p class="text-center fw-bolder h3 mb-3">LOGIN</p>
                            <form id="form-login-submit" autocomplete="off">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <?= submitButton('Submit') ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.onload = function(){
        document.querySelector("#form-login-submit").addEventListener("submit", function(e) {
            e.preventDefault();
            const theSubmitButton = this.querySelector(".submit-button");
            submitButtonToggle(theSubmitButton);
            const data = {
                username: this.querySelector("#username").value,
                password: this.querySelector("#password").value,
            };
            sendData('<?= ROOT_URL."login" ?>', data)
            .then(res => {
                if (res.status === "success") window.location.replace("<?= ROOT_URL ?>");
            })
            .finally(() => submitButtonToggle(theSubmitButton));
        })
    }
</script>