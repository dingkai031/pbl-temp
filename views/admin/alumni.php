<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Daftar Alumni</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Email Kampus</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>Jenis Kelamin</th>
                            <th>IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['alumniArray'] as $alumni) : ?>
                            <tr>
                                <td><?= $alumni['nim'] ?></td>
                                <td><?= $alumni['email_kampus'] ?></td>
                                <td><?= $alumni['user_data']['email'] ?></td>
                                <td><?= $alumni['user_data']['username'] ?></td>
                                <td class="text-capitalize"><?= $alumni['nama_lengkap'] ?></td>
                                <td><?= $alumni['prodi']?></td>
                                <td><?= $alumni['alamat']?></td>
                                <td><?= $alumni['telp']?></td>
                                <td><?= $alumni['jenis_kelamin'] == '1' ? "Laki Laki" : "Perempuan" ?></td>
                                <td><?= $alumni['ipk'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>