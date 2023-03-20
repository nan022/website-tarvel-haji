<?= $this->session->flashdata('msg'); ?>
<!-- Page Content -->
<div class="page-heading-kontak header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Kontak </h1>
                <span>Jangan ragu untuk mengirimkan pesan kepada kami.</span>
            </div>
        </div>
    </div>
</div>

<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <h4>Telepon</h4>
                    <p>Anda dapat menghubungi kontak kami untuk meng-order paket kami.</p>
                    <a href="#">0822 8300 2141</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <p>Sampaikan pertanyaan dan hal lainnya melalui email kami.</p>
                    <a href="#">info@mmb-travel.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i>
                    <h4>Location</h4>
                    <p>Jalan Singgalam 5, Komplek BMP 1. <br>Tenayan Raya, Pekanbaru, Riau</p>
                    <a href="#">Lihat via Google Maps</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="callback-form contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Kritik dan<em> Saran</em></h2>
                    <span>Samapaikan kritik dan saran terbaik Anda.</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Nama Lengkap" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject"
                                        placeholder="Judul" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Pesan Anda" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Kirim Pesan</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map">
    <iframe
        src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
        width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- 
<div class="partners contact-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-partners owl-carousel">
                    <div class="partner-item">
                        <img src="<?= base_url();?>assets/template/images/partner-1.jpg" title="1" alt="1">
                    </div>

                    <div class="partner-item">
                        <img src="<?= base_url();?>assets/template/images/partner-2.jpg" title="2" alt="2">
                    </div>

                    <div class="partner-item">
                        <img src="<?= base_url();?>assets/template/images/partner-3.jpg" title="3" alt="3">
                    </div>

                    <div class="partner-item">
                        <img src="<?= base_url();?>assets/template/images/partner-4.jpg" title="4" alt="4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->