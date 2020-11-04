<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form action="/register" method="post">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control"
                                   name="firstname" id="firstname" value="<?= set_value('firstname')?>">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control"
                                   name="lastname" id="lastname" value="<?= set_value('lastname')?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control"
                                   name="email" id="email" value="<?= set_value('email')?>">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="password">Enter password</label>
                            <input type="password" id="password" class="form-control"
                                   name="password" id="password" value="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="password_confirm">Confirm password</label>
                            <input type="password" id="password_confirm" class="form-control"
                                   name="password_confirm" id="password_confirm" value="">
                        </div>
                    </div>
                    <?php if (isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                </form>
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="col-12 col-2m-8 text-right">
                        <a href="/">Already have an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

