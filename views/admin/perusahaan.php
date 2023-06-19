<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Daftar Perusahaan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Username</th>
                            <th>Email Perusahaan</th>
                            <th>Email Support</th>
                            <th>Telp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['perusahaanArray'] as $perusahaan) : ?>
                            <tr>
                                <td><?= $perusahaan['nama_perusahaan'] ?></td>
                                <td><?= $perusahaan['user_data']['username'] ?></td>
                                <td><?= $perusahaan['email_perusahaan'] ?></td>
                                <td><?= $perusahaan['user_data']['email'] ?></td>
                                <td><?= $perusahaan['telp_perusahaan']?></td>
                                <td><?= $perusahaan['alamat_perusahaan']?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>