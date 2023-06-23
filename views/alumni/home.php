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
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        // Check if the current row's data matches the logged-in user
                    if ($_SESSION['id_mahasiswa'] == $data['id_mahasiswa']) {
                    ?>
                    <tr>
                        <th>NIM :</th>
                        <td><?php echo $data['nim']; ?></td>                    
                    </tr>
                    <tr>
                        <th>Nama :</th>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                        <th>Prodi :</th>
                        <td><?php echo $data['prodi']; ?></td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td><?php echo $data['email_kampus']; ?></td>
                    </tr>
                    <tr>
                        <th>Telp :</th>
                        <td><?php echo $data['telp']; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin :</th>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <th>IPK :</th>
                        <td><?php echo $data['ipk']; ?></td>
                    </tr>
                    <!-- Add the necessary code to display other columns from the "mahasiswa" table -->                
                    <?php
                        }
                    }
                    ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
