    <!-- Menghubungkan dengan view tempalte master -->
	

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman','halaman Utama'); ?>


<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
<h1> Hello Welcome to Main Page </h1>
<h3> Kami akan Memaparkan Berita yang hangat Pada hari ini <h3>
<table border = "2" cellpadding = "20">
    <tr>
    <td>
        <p> Halo Selamat datang Bisa bertemu dengan anda </p>
        </tr>
        </td>
        </table>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel2\resources\views/home.blade.php ENDPATH**/ ?>