<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Email Perusahaan</th>
                            <th>Posisi</th>
                            <th>Tingkat Pengalaman</th>
                            <th>Dibuat pada</th>
                            <th>Alamat Perusahaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($data['allLoker']) != 0) :  ?>
                            <?php foreach ($data['allLoker'] as $loker) : ?>
                                <tr>
                                    <td class="text-capitalize"><?= $loker['nama_perusahaan'] ?></td>
                                    <td><?= $loker['email_perusahaan'] ?></td>
                                    <td class="text-capitalize"><?= $loker['posisi'] ?></td>
                                    <td class="text-capitalize"><?= $loker['tingkat_pengalaman'] ?></td>
                                    <td><?= $loker['created_at'] ?></td>
                                    <td><?= $loker['alamat_perusahaan'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada loker silahkan kembali lagi nanti</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>