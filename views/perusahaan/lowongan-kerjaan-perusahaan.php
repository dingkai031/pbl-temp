<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="modal fade" id="tambahLokerModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Tambah Loker</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form id="form-tambah-loker">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="posisi" class="form-label">Posisi</label>
                                    <input type="text" id="posisi" name="posisi" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tingkat-pengalaman" class="form-label">Tingkat Pengalaman</label>
                                    <select name="tingkat-pengalaman" id="tingkat-pengalaman" class="form-select" required>
                                        <option value="">Pilih tingkat pengalaman</option>                                        
                                        <option value="pemula">Pemula</option>
                                        <option value="mahir">Mahir</option>
                                        <option value="professional">Professional</option>
                                    </select>
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
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahLokerModal">Tambahkan Loker</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Posisi</th>
                            <th>Tingkat Pengalaman</th>
                            <th>Dibuat pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($data['loker']) != 0) :  ?>
                            <?php foreach($data['loker'] as $loker) : ?>
                                <tr>
                                    <td class="text-capitalize"><?= $loker['posisi'] ?></td>
                                    <td class="text-capitalize"><?= $loker['tingkat_pengalaman'] ?></td>
                                    <td><?= $loker['created_at'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada loker silahkan tambahkan terlebih dahulu</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        document.querySelector("#form-tambah-loker").addEventListener("submit", function(e) {
            e.preventDefault();
            const bodyData = {};
            [...document.querySelectorAll("input, select")].forEach(input => {
                bodyData[input.getAttribute("name")] = input.value.trim();
            });
            sendData("<?= ROOT_URL."lowongan-kerjaan-perusahaan" ?>", bodyData)
            .then(res => {
                if (res.status === "success") {
                    location.reload();
                }else {
                    alert("error");
                }
            })
        })
    }
</script>