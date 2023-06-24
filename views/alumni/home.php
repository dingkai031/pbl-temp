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
            <h1>Home Alumni</h1>
        </div>
        <div class="home">
            <?php echo "Hallo " . $_SESSION['username'] . "!" . " Selamat Datang di Tracer Alumni"; ?>  <br>
            
            <table class="table">
            <tbody>
                    <?php
                    ?>
                    <tr>
                        <th>NIM</th>
                        <td>: <?php echo $data['alumni_data']['nim']; ?></td>                    
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>: <?php echo $data['alumni_data']['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                        <th>Prodi</th>
                        <td>: <?php echo $data['alumni_data']['prodi']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: <?php echo $data['alumni_data']['email_kampus']; ?></td>
                    </tr>
                    <tr>
                        <th>Telp</th>
                        <td>: <?php echo $data['alumni_data']['telp']; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: <?php echo $data['alumni_data']['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <th>IPK</th>
                        <td>: <?php echo $data['alumni_data']['ipk']; ?></td>
                    </tr>        
                    <?php
                    ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
