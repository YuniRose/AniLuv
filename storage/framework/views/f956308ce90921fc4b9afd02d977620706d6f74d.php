    <!-- Menghubungkan dengan view tempalte master -->
    

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman','halaman About'); ?>


<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
<h1> Hello Welcome to Abot Page </h1>
<h3> Saya akan memberikan Perkenalan Terlebih Dahulu <h3>
<table border = "2" cellpadding = "20">
    <tr>
    <td>
        <p> Data Pribadi saya : </p>
        <p> Nama Saya Yuni Rose</p>
        <p> Saya Berasal Dari Tulungagung Bersinar </p>
        <P> Saya Sedang Menempuh Kuliah di malang, Politeknik Negeri Malang </p>
        <p> Alamat Rumah saya di Jalan PapanDayan No 40 Kauman, Tulungagung </p>
        </tr>
        </td>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel2\resources\views/about.blade.php ENDPATH**/ ?>