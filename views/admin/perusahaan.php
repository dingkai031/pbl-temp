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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <?php foreach ($data['perusahaanArray'] as $perusahaan_key => $perusahaan) : ?>
                            <tr>
                                <td><?= $perusahaan['nama_perusahaan'] ?></td>
                                <td><?= $perusahaan['username'] ?></td>
                                <td><?= $perusahaan['email_perusahaan'] ?></td>
                                <td><?= $perusahaan['email'] ?></td>
                                <td><?= $perusahaan['telp_perusahaan'] ?></td>
                                <td><?= $perusahaan['alamat_perusahaan'] ?></td>
                                <td>
                                    <div class="modal fade" id="perusahaan-<?= $perusahaan_key ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil Kuesioner</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    $kuesioner = json_decode($perusahaan['jawaban_kuesioner'], true);
                                                    ?>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Pertanyaan</th>
                                                                <th>Jawaban</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($kuesioner['feedback_alumni'] as $kue) : ?>
                                                                <tr>
                                                                    <td class="fw-bolder"><?= $kue['question']  ?></td>
                                                                    <td><?php
                                                                        if (is_array($kue['answer'])) {
                                                                            foreach ($kue['answer'] as $answer) {
                                                                                echo $answer . "<br>";
                                                                            };
                                                                        } else {
                                                                            echo $kue['answer'];
                                                                        }
                                                                        ?></td>
                                                                </tr>
                                                            <?php endforeach ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perusahaan-<?= $perusahaan_key ?>">Hasil Kuesioner</button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>