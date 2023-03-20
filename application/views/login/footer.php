<?php if ($this->session->flashdata('error')): ?>
  <script>
  swal({
    title: "Tidak Berhasil",
    text: "Silahkan dicek kembali data inputan Anda",
    button: true,
    timer: 5000,
    icon: 'error',
    confirmButtonText: 'Cool'
  });
  </script>
<?php endif; ?>
<!-- JS -->
<script src="<?= base_url();?>assets/login/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>assets/login/vendor/jquery/jquery-ui.min.js"></script>
<script src="<?= base_url();?>assets/login/js/main.js"></script>
</body>
</html>