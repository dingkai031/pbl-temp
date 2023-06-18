<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['page-name'] ?></title>
  <link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/bootstrap.min.css">
</head>

<body class="d-flex flex-column" style="min-height: 100vh;background-color:#f4f4f4">
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
      <a class="navbar-brand" href="<?= ROOT_URL ?>"><img src="<?= ROOT_URL ?>assets/img/logo1.jpg" alt="PBL" style="max-width: 60px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#admin-menu" aria-controls="admin-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="admin-menu">
        <div class="navbar-nav">
          <a class="nav-link <?= $data['page'] == "home" ? "btn btn-primary text-white" : "" ?>" href="<?= ROOT_URL ?>">Home</a>
          <a class="nav-link <?= $data['page'] == "kuesioner-lanjutan" ? "btn btn-primary text-white" : "" ?>" href="<?= ROOT_URL."kuesioner-lanjutan" ?>">Kuesioner Lanjutan</a>
          <a class="nav-link <?= $data['page'] == "riwayat-kerja" ? "btn btn-primary text-white" : "" ?>" href="<?= ROOT_URL."riwayat-kerja" ?>">Riwayat Kerja</a>
          <a class="nav-link <?= $data['page'] == "lowongan-kerja" ? "btn btn-primary text-white" : "" ?>" href="<?= ROOT_URL."lowongan-kerja" ?>">Lowongan Kerja</a>
        </div>
        <a href="<?= ROOT_URL."logout" ?>" class="btn btn-danger">LOGOUT</a>
      </div>
    </div>
  </nav>
  <main class="mt-4" style="flex: 1;">