
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Home Alumni</h1>
        </div>
        <div class="home">
            <?php echo "Hallo " . $_SESSION['username'] . "!" . " Selamat Datang di Tracer Alumni" ; ?>  <br>
            <thead>
                <tr>
                    <th>NIM :</th><br>
                    <th>Nama :</th><br>
                    <th>Prodi :</th><br>
                    <th>Email :</th><br>
                    <th>Telp :</th><br>
                    <th>Jenis Kelamin :</th><br>
                    <th>IPK :</th><br>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['alumniArray'] as $alumni) : ?>
                    <tr>
                        <td><?= $alumni['nim'] ?></td>
                        <td class="text-capitalize"><?= $alumni['nama_lengkap'] ?></td>
                        <td><?= $alumni['prodi']?></td>
                        <td><?= $alumni['user_data']['email'] ?></td>
                        <td><?= $alumni['telp']?></td>
                        <td><?= $alumni['jenis_kelamin'] == '1' ? "Laki Laki" : "Perempuan" ?></td>
                        <td><?= $alumni['ipk'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </div>
    </div>
</div>