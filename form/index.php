<?php
// Set zona waktu ke Asia/Jakarta (WIB)
date_default_timezone_set("Asia/Jakarta");

// Inisialisasi variabel untuk pesan error dan hasil
$nameError = $emailError = "";
$name = $email = "";
$timeMessage = "";
$dateMessage = "";

// Fungsi untuk membersihkan input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validasi dan proses form ketika metode POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama
    if (empty($_POST["name"])) {
        $nameError = "Nama tidak boleh kosong";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validasi email
    if (empty($_POST["email"])) {
        $emailError = "Email tidak boleh kosong";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Format email tidak valid";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Jika validasi lolos, tampilkan pesan berdasarkan waktu
    if (empty($nameError) && empty($emailError)) {
        // Ambil waktu server saat ini dengan zona waktu yang sudah disesuaikan
        $hour = date("H");

        // Tentukan pesan berdasarkan waktu
        if ($hour >= 5 && $hour < 12) {
            $timeMessage = "Selamat pagi";
        } elseif ($hour >= 12 && $hour < 15) {
            $timeMessage = "Selamat siang";
        } elseif ($hour >= 15 && $hour < 18) {
            $timeMessage = "Selamat sore";
        } else {
            $timeMessage = "Selamat malam";
        }

        // Ambil tanggal saat ini
        $dateMessage = date("l, d F Y");
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sederhana dengan PHP</title>
</head>
<body>

<h2>Formulir Informasi</h2>
<p><span style="color:red;">* Wajib diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="name" value="<?php echo $name;?>">
    <span style="color:red;">* <?php echo $nameError;?></span>
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email;?>">
    <span style="color:red;">* <?php echo $emailError;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Tampilkan hasil jika form valid
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameError) && empty($emailError)) {
    echo "<h2>Data yang Anda Kirim:</h2>";
    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo $timeMessage . ", hari ini adalah " . $dateMessage;
}
?>

</body>
</html>
