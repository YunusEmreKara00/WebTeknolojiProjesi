<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonuç</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style> body { background-color: #121212; color: #cccccc; } </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">YUNUS EMRE KARA</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="iletisim.php"><i class="bi bi-arrow-left"></i> İletişime Dön</a></li>
            </ul>
        </div>
    </nav>

    <main class="container" style="margin-top: 100px; margin-bottom: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] != "POST") {
                    header("Location: iletisim.php");
                    exit;
                }

                $hatalar = array();

                // Boşluk Kontrolü
                if (!isset($_POST['isim']) || empty(trim($_POST['isim']))) { $hatalar[] = "İsim alanı boş geldi."; }
                if (!isset($_POST['konu']) || empty($_POST['konu'])) { $hatalar[] = "Konu seçilmemiş."; }
                if (!isset($_POST['mesaj']) || empty(trim($_POST['mesaj']))) { $hatalar[] = "Mesaj alanı boş geldi."; }
                
                // 2. E-Posta Kontrolü 
                if (!isset($_POST['email']) || empty(trim($_POST['email']))) { 
                    $hatalar[] = "E-Posta alanı boş geldi."; 
                } elseif (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                    $hatalar[] = "Geçersiz e-posta formatı tespit edildi.";
                }

                // 3. Telefon Kontrolü 
                if (!isset($_POST['telefon']) || empty(trim($_POST['telefon']))) { 
                    $hatalar[] = "Telefon alanı boş geldi."; 
                } elseif (!preg_match('/^[0-9]{11}$/', trim($_POST['telefon']))) {
                    $hatalar[] = "Telefon numarası tam 11 haneli rakamlardan oluşmalıdır.";
                }

                if (count($hatalar) > 0) {
                    // Hata Ekranı
                    echo "<div class='alert alert-danger shadow-lg border-danger'>";
                    echo "<h4 class='alert-heading fw-bold'><i class='bi bi-shield-x'></i> Güvenlik İhlali / Eksik Veri</h4>";
                    echo "<p>Sunucu tarafı doğrulamasından geçemediniz. Hatalar:</p><ul>";
                    foreach ($hatalar as $hata) { echo "<li>" . htmlspecialchars($hata) . "</li>"; }
                    echo "</ul><hr>";
                    echo "<a href='iletisim.php' class='btn btn-outline-danger'><i class='bi bi-arrow-left'></i> Forma Geri Dön</a>";
                    echo "</div>";
                } 
                else {
                    // Başarı Ekranı ve XSS Koruması
                    $isim = htmlspecialchars(trim($_POST['isim']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $telefon = htmlspecialchars(trim($_POST['telefon']));
                    $konu = htmlspecialchars($_POST['konu']);
                    $cinsiyet = isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : 'Belirtilmedi';
                    $mesaj = htmlspecialchars(trim($_POST['mesaj']));

                    echo "<div class='alert alert-success shadow-lg border-success mb-4'>";
                    echo "<h4 class='alert-heading fw-bold'><i class='bi bi-check-circle-fill'></i> Mesajınız Başarıyla İletildi!</h4>";
                    echo "<p>Sayın <strong class='text-dark'>$isim</strong>, mesajınız sistemimize güvenli bir şekilde kaydedildi.</p>";
                    echo "</div>";

                    echo "<div class='card bg-dark text-light border-secondary'>";
                    echo "<div class='card-header border-secondary text-warning fw-bold'><i class='bi bi-server'></i> Sunucuya Ulaşan Veriler</div>";
                    echo "<div class='card-body'>";
                    echo "<table class='table table-dark table-striped table-bordered mb-0'>";
                    echo "<tr><th width='30%'>Ad Soyad</th><td>$isim</td></tr>";
                    echo "<tr><th>E-Posta</th><td>$email</td></tr>";
                    echo "<tr><th>Telefon</th><td>$telefon</td></tr>";
                    echo "<tr><th>Cinsiyet</th><td>$cinsiyet</td></tr>";
                    echo "<tr><th>Konu</th><td>$konu</td></tr>";
                    echo "<tr><th>Mesajınız</th><td>" . nl2br($mesaj) . "</td></tr>";
                    echo "</table>";
                    echo "</div></div>";
                    
                    echo "<div class='text-center mt-4'><a href='index.php' class='btn btn-warning fw-bold'>Ana Sayfaya Dön</a></div>";
                }
                ?>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>