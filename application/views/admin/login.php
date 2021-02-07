<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card header bg-transparent text-center">
                            <h3 class="mt-big mb-3">Login</h3>
                        </div>
                        <?php if ($this->session->userdata('message')=='gagal'): ?>
                            <div class="alert alert-danger mb-3" role="alert">
                                Username atau Password Salah!
                            </div>
                        <?php endif ?>
                        <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="">
                                    <div class="form-group">
                                        <label for="uname">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="uname" id="uname" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="pwd" name="pwd" required="">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <div class="justify-content-center text-center">
                                        <button type="submit" name="submit" class="btn btn-success bg-btn btn-lg mt-5" id="btnLogin">Login</button>
                                    </div>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->

                    </div>


                </div>
                <!--/row-->

            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
<!--/container-->