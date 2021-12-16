<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <title>Halaman 
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?=BASEURL ?>/css/bootstrap.css" >
</head>

<body>

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">PHP MVC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/about"">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/mahasiswa"">Mahasiswa</a></li>
                    </ul>
                </div>
            </div>
        </nav>
