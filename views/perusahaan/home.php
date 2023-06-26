<style>
        .table {
            display: grid;
            grid-template-columns: auto auto;
        }
        .table th,
        .table td {
            grid-column: 1;
        }
        .table td {
            grid-column: 2;
        }
</style>
<div class="container">
    <div class="card">
        <div class="card-body">
            <tr><h1>Home Perusahaan</h1></tr>
        </div>
        <table class="table">
            <tbody>
                    <?php
                    ?>
                    <tr>
                        <th>ID </th>
                        <td>: <?php echo $data['perusahaan_data']['id_perusahaan']; ?></td>                    
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>: <?php echo $data['perusahaan_data']['nama_perusahaan']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: <?php echo $data['perusahaan_data']['email_perusahaan']; ?></td>
                    </tr>
                    <tr>
                        <th>Telp</th>
                        <td>: <?php echo $data['perusahaan_data']['telp_perusahaan']; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>: <?php echo $data['perusahaan_data']['alamat_perusahaan']; ?></td>
                    </tr>
                    <?php
                    ?>
            </tbody>
        </table>
    </div>
</div>