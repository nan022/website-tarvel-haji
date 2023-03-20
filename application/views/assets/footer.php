<!-- Footer Starts Here -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=08117607077&text=Halo%20min,%20saya%20ingin%20bertanya." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<footer>
  <div class="container">
    <div class="row ">
      <div class="col-md-4 footer-item">
        <h4>PT MUDAH MENUJU BAITULLAH</h4>
        <p>Perusahaan berdiri secara resmi pada Tahun 2000 dengan nama PT. Mudah Menuju Baitullah. Kami adalah
          Perusahaan yang bergerak di bidang Jasa Umrah & Travel, Jasa Land Arrangement Saudi, Provider Visa Umrah
          Furoda.</p>
        <ul class="social-icons">
          <li><a rel="nofollow" href=""><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 footer-item">
        <h4>ALAMAT KANTOR UTAMA</h4>
        <p> Jalan Singgalam 5, Komplek BMP 1. Tenayan Raya, Pekanbaru, Riau
        </p>
        <br>
        <h4>ALAMAT KANTOR REPRESENTATIVE</h4>
        <p> Jalan Singgalam 5, Komplek BMP 1. Tenayan Raya, Pekanbaru, Riau
        </p>
      </div>
      <div class="col-md-4 footer-item">
        <h4>KONTAK INFO</h4>
        <ul class="menu-list ml-2">
          <li><a href="tel:08117607077"><i class="fa m-0 fa-phone"></i> 0811 7607 077</a></li>
          <!-- <li><a href="tel:08117607077"><i class="fa m-0 fa-phone"></i> 0811 7607 077</a></li> -->
          <li><a href="mailto:info@mmb-travel.com"><i class="fa m-0 fa-envelope"></i> info@mbb-travel.com</a></li>
          <!-- <img src="<?= base_url();?>assets/template/images/logo-footer-final.png" title="5" alt="5"> -->
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Copyright &copy; PT. Mudah Menuju Baitullah
          - Development by : <a rel="nofollow noopener" href="https://syifatech.com" target="_blank">Syifatech.com</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url();?>assets/template/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="<?= base_url();?>assets/template/js/custom.js"></script>
<script src="<?= base_url();?>assets/template/js/owl.js"></script>
<script src="<?= base_url();?>assets/template/js/slick.js"></script>
<script src="<?= base_url();?>assets/template/js/accordions.js"></script>



<script>
   	$(document).ready(function () {
        $('#kode_ref_by').keyup(function() {
          this.value = this.value.toUpperCase();
          var a = $('#kode_ref_by').val();
          if(a == 0 || a == ""){
            document.getElementById("textSuccess").innerHTML = "*Silahkan dilanjutkan.";
            document.getElementById("textDanger").innerHTML = "";
          }else{
            $.ajax({
              type: "POST",
              dataType: "JSON",
              url: "<?= base_url("transaksi/cek_kode_ref");?>/" +a,
              success: function (data) {
                if (data == true) {
                  document.getElementById("textSuccess").innerHTML = "*Kode Referal Ditemukan. Silahkan menggunakan kode referal.";
                  document.getElementById("textDanger").innerHTML = "";
                } else {
                  document.getElementById("textDanger").innerHTML = "*Kode Referal Tidak Dietemukan. Silahkan dicek kembali kode referal.";
                  document.getElementById("textSuccess").innerHTML = "";
                }
              }
            });
          }
        });
      });
      //function cekRef(){
      //     var a = $('#kode_ref_by').val();
      //     var hasil = a.toUpperCase();
      //     if(a == 0 || a == ""){
      //       document.getElementById("textSuccess").innerHTML = "*Silahkan dilanjutkan.";
      //       document.getElementById("textDanger").innerHTML = "";
      //     }else{
      //       $.ajax({
      //         type: "POST",
      //         dataType: "JSON",
      //         url: "<?= base_url("paket/cek_kode_ref");?>/" +a,
      //         success: function (data) {
      //           if (data == true) {
      //             document.getElementById("textSuccess").innerHTML = "*Kode Referal Ditemukan. Silahkan menggunakan kode referal.";
      //             document.getElementById("textDanger").innerHTML = "";
      //           } else {
      //             document.getElementById("textDanger").innerHTML = "*Kode Referal Tidak Dietemukan. Silahkan dicek kembali kode referal.";
      //             document.getElementById("textSuccess").innerHTML = "";
      //           }
      //         }
      //       });
      //     }
      // }
</script>


<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
      cleared[t.id] = 1; // you could use true and false, but that's more typing
      t.value = ''; // with more chance of typos
      t.style.color = '#fff';
    }
  }
</script>

<script>
$('#owl-carousel-2').owlCarousel({
  items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
})

$('#owl-carousel-1').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
</script>

<script type="text/javascript">
	$(".add-row").click(function(){ 
		var html = $(".copy").html();
		$(".after-add-row").after(html);
	});

	// saat tombol remove dklik control group akan dihapus 
	$("body").on("click",".remove",function(){ 
		$(this).parents(".control-group").remove();
	});

  

</script>

<script>
      $(function () { 
          $(window).scroll(function () {
              if ($(this).scrollTop() > 500) { 
                  $('.navbar-brand img').attr('src','<?= base_url();?>assets/template/images/logo-header-final-black.png');
              }
              if ($(this).scrollTop() < 10) { 
                  $('.navbar-brand img').attr('src','<?= base_url();?>assets/template/images/logo-header-final-white.png');
              }
          })
      });
  </script>


</body>
</html>