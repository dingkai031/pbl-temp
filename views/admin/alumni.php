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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <?php foreach ($data['alumniArray'] as $alumni_key => $alumni) : ?>
                            <tr>
                                <td><?= $alumni['nim'] ?></td>
                                <td><?= $alumni['email_kampus'] ?></td>
                                <td><?= $alumni['email'] ?></td>
                                <td><?= $alumni['username'] ?></td>
                                <td class="text-capitalize"><?= $alumni['nama_lengkap'] ?></td>
                                <td><?= $alumni['prodi'] ?></td>
                                <td><?= $alumni['alamat'] ?></td>
                                <td><?= $alumni['telp'] ?></td>
                                <td><?= $alumni['jenis_kelamin'] == '1' ? "Laki Laki" : "Perempuan" ?></td>
                                <td><?= $alumni['ipk'] ?></td>
                                <td>
                                    <div class="modal fade" id="alumni-<?= $alumni_key ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil Kuesioner</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php 
                                                        $kuesioner = json_decode($alumni['jawaban_kuesioner'], true);
                                                    ?>
                                                    <h4 class="text-primary">Awal</h4>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Pertanyaan</th>
                                                                <th>Jawaban</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($kuesioner['kuesioner_awal'] as $kue) : ?>
                                                                <tr>
                                                                    <td class="fw-bolder"><?= $kue['question'] ?></td>
                                                                    <td><?php
                                                                        if (is_array($kue['answer'])) {
                                                                            foreach ($kue['answer'] as $answer) {
                                                                                echo $answer."<br>";
                                                                            };
                                                                        }else  {
                                                                            echo $kue['answer'];
                                                                        }
                                                                    ?></td>
                                                                </tr>
                                                            <?php endforeach?>
                                                        </tbody>
                                                    </table>
                                                    <h4 class="text-primary">Lanjutan</h4>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Pertanyaan</th>
                                                                <th>Jawaban</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($kuesioner['kuesioner_lanjutan'] as $kue) : ?>
                                                                <tr>
                                                                    <td class="fw-bolder"><?= $kue['question'] ?></td>
                                                                    <td><?php
                                                                        if (is_array($kue['answer'])) {
                                                                            foreach ($kue['answer'] as $answer) {
                                                                                echo $answer."<br>";
                                                                            };
                                                                        }else  {
                                                                            echo $kue['answer'];
                                                                        }
                                                                    ?></td>
                                                                </tr>
                                                            <?php endforeach?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alumni-<?= $alumni_key ?>">Hasil Kuesioner</button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>