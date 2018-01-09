<center>
<h2>Selamat Datang</h2>
<h3><?php echo e($data->email); ?></h3>
<p>Nama Lengkap : <?php echo e($data->nama_lengkap); ?></p>
<p>Tanggal Lahir : <?php echo e($data->tgl_lahir); ?></p>
<p>Email : <?php echo e($data->email); ?></p>
<p>Selangkah lagi Anda akan menjadi member dari cjhotel.com.</p>
<br/>
<p>Silakan Copy kode dibawah ini untuk mengaktifkan akun anda sepenuhnya dan klik link dibawah</p>
<p><b><i><?php echo e($data->token_get); ?></i></b></p>
<p><a href="http://localhost:8000/halaman-konfirmasi">Menuju Halaman Aktivasi Akun</a></p>
<br/>
<p>Nikmati berbagai info layanan terbaru dari kami, dan dapatkan kupon/kode voucher untuk mendapatkan penawaran exclusive dari kami.</p>
<p>Kami selaku CJhotel Group mengucapkan terima kasih.</p>
<br/>
<br/>
<p>COPYRIGHT 2018 CJ HOTEL GROUP. ALL RIGHTS RESERVED.</p>
</center>