<?php 
include "koneksi.php";
$id_murid = $_GET['id_murid'];
$id_guru = $_GET['id_guru'];
$sql = "SELECT * FROM jadwal WHERE id_murid=$id_murid";
$query = mysqli_query($koneksi,$sql);
$card = mysqli_fetch_array($query);
$sql2 = "SELECT * FROM jadwalguru WHERE id_guru=$id_guru";
$query2 = mysqli_query($koneksi,$sql2);
$card2 = mysqli_fetch_array($query2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile BK</title>
    <?php echo $card2['crisp'] ?>

    <!-- style css -->
    <link rel="stylesheet" href="stylecontent_profile-bk.css">

    <!-- font iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <!-- ini navbar -->
    <nav>
        <a href="landing.php"><iconify-icon icon="ic:baseline-navigate-next" rotate="180deg"  style="cursor: pointer; font-size: 25px;"></iconify-icon></a>
        <p id="tulisan-nav">Detail BK</p>
    </nav>

    <div class="biru">

    </div>
    <div class="content">

        <div class="kotak1">
            <div class="wadah-gambar">
            </div>
        </div>

        <div  class="kotak2">
            <div class="melayani">
                <p id="bk"><?php echo $card['nama_murid']?> <?php echo $card['kelas_murid']?></p>
                <hr>
                <div class="melayani-via">
                    <p id="via">Melayani Via :</p>
                    <iconify-icon icon="bi:chat-dots" style="margin-top: 0.4%;"></iconify-icon>
                    <p>Chat</p>
                </div>
                <hr>
            </div>
            <div class="profile-ricky">
                <p id="judul-profile">Topik Konseling</p>
                <p id="deskripsi"><?php echo $card["topik_konseling"] ?></p>
            </div>

        </div>
    </div>

    <div class="footer">
        <footer>
        <div class="container">
            <div class="sec rumahkue">
                <h2>StarKonseling</h2>
                <p>StarKonseling merupakan website untuk membantu para murid SMK Taruna Bhakti dalam permasalahan didalam sekolah maupun diluar sekolah.</p>
            </div>
            <div class="produk">
                <h2>Jadwal Konseling</h2>
                <ul>
                    <li><a href="#">table</a></li>
                </ul>
            </div>
            <div class="kontak">
                <h2>Konselor</h2>
                <ul>
                    <li><a href="#">Ricky Sudrajat</a></li>
                    <li><a href="#">Rina Sujagat</a></li>
                    <li><a href="#">Caca Kasandra</a></li>
                </ul>
            </div>
            <div class="alamat">
                <h2>Address</h2>
                <ul>
                    <li><a href="#">Jln. Raya Pekapuran, Curug, Kec. Cimanggis, Kota Depok Prov. Jawa Barat</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>
</body>
</html>