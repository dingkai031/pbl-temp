<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="text-center text-lg-end">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="tambahLokerModal">Tambahkan Loker</button>
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
                        <?php if(count($data['loker']) != 0) :  ?>

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