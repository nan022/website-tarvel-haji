<body>
    <?= $this->session->flashdata('msg'); ?>

    <div class="main">

        <!-- Sign up form -->
        <section id="daftar" class="signup" style="display:none;">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar Peserta</h2>
                        <form method="post" action="<?php base_url();?>login/aksi_daftar" class="register-form"
                            id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required
                                    oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                                    oninput="setCustomValidity('')">

                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="wa"><i class="zmdi zmdi-whatsapp material-icons-name"></i></label>
                                <input type="number" name="wa" id="wa" placeholder="No. Whatsapp" required
                                    oninvalid="this.setCustomValidity('No. Whatsapp tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-face material-icons-name"></i></label>
                                <input type="text" name="username" placeholder="Username" required
                                    oninvalid="this.setCustomValidity('Username tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock material-icons-name"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required
                                    oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group" style="margin-top:-3em;">
                                <label>Pilih Akun</label>
                                <select name="pilihan" class="form-control" required>
                                    <option value="customer">Calon Jamaah</option>
                                    <option value="representatif">Representatif</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                Dengan mendaftar ini, saya setuju dengan <a href="#">Terms of service
                                    PT. MMB</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url(); ?>/assets/login/images/image-login.png" alt="sing up image">
                        </figure>
                        <a href="#" class="signup-image-link" onclick="show_login(); return false;">Sudah punya
                            akun? -
                            Mari LOGIN</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section id="login" class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url(); ?>assets/login/images/image-login.png" alt="sing up image">
                        </figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login Peserta</h2>
                        <form method="POST" action="<?php base_url();?>login/aksi_login" class="register-form"
                            id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-face material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username Anda" required
                                    oninvalid="this.setCustomValidity('Username tidak boleh kosong')"
                                    oninput="setCustomValidity('')" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock material-icons-name"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password Anda" required
                                    oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                                    oninput="setCustomValidity('')" />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            Belum punya akun? -&nbsp;<a href="#" class="signup-image-link"
                                onclick="show_daftar(); return false;"> Daftar akun peserta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>