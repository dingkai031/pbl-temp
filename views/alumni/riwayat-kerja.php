<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="modal fade" id="tambahRiwayat" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Tambah Riwayat Kerja</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form id="form-tambah-riwayat-kerja">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                    <select name="perusahaan" id="perusahaan" class="form-select" required>
                                        <option value="" class="d-none">Pilih perusahaan</option>
                                        <?php foreach ($data['allPerusahaan'] as $perusahaan) : ?>
                                            <option value="<?= $perusahaan['id_perusahaan'] ?>"><?= $perusahaan['nama_perusahaan'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="lama-kerja" class="form-label">Lama kerja</label>
                                    <input type="text" name="lama-kerja" id="lama-kerja" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="posisi" class="form-label">Posisi</label>
                                    <input type="text" name="posisi" id="posisi" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="penghasilan" class="form-label">Penghasilan</label>
                                    <input type="number" name="penghasilan" id="penghasilan" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center text-lg-end">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahRiwayat">Tambahkan Riwayat Kerjaan</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Perusahaan</th>
                            <th>Posisi</th>
                            <th>Penghasilan</th>
                            <th>Lama Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($data['riwayatKerja']) != 0) :  ?>
                            <?php foreach ($data['riwayatKerja'] as $riwayatKerja) : ?>
                                <tr>
                                    <td class="text-capitalize"><?= $riwayatKerja['nama_perusahaan'] ?></td>
                                    <td><?= $riwayatKerja['posisi'] ?></td>
                                    <td class="text-capitalize"><?= $riwayatKerja['penghasilan'] ?></td>
                                    <td class="text-capitalize"><?= $riwayatKerja['lama_kerja'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada riwayat kerjaan</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector("#form-tambah-riwayat-kerja").addEventListener("submit", function(e) {
        e.preventDefault();
        const bodyData = {
            'id-perusahaan' : this.querySelector("#perusahaan").value.trim(),
            'lama-kerja' : this.querySelector("#lama-kerja").value.trim(),
            posisi : this.querySelector("#posisi").value.trim(),
            penghasilan : this.querySelector("#penghasilan").value.trim(),
        };
        sendData("<?= ROOT_URL."riwayat-kerja" ?>", bodyData)
            .then(res => {
                if (res.status === "success") {
                    location.reload();
                }else {
                    alert(res.message);
                }
            });
    })
</script>