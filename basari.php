<?php
// GÜVENLİK 1: Doğrudan URL'ye 'basari.php' yazıp girmeyi engelliyorum.
// Eğer URL'de 'no' parametresi yoksa, kullanıcıyı paşa paşa login ekranına geri yolluyorum.
if(!isset($_GET['no']) || empty($_GET['no'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Başarılı - Yunus Emre Kara</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-white d-flex flex-column" style="min-height: 100vh;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">YUNUS EMRE KARA</a>
        </div>
    </nav>

    <main class="container main-container d-flex align-items-center justify-content-center flex-grow-1">
        <div class="text-center p-5 rounded border border-success bg-dark shadow-lg">
            
            <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
            
            <h1 class="display-5 fw-bold mt-4 mb-3">
                Hoşgeldiniz <span class="text-warning"><?php echo htmlspecialchars($_GET['no']); ?></span>
            </h1>
            
            <hr class="border-secondary">
            
            <p class="text-muted mb-4">Öğrenci bilgi sistemi doğrulaması başarıyla tamamlandı.</p>
            
            <a href="index.html" class="btn btn-outline-light px-4 py-2 fw-bold">Sitede Gezinmeye Devam Et</a>
        </div>
    </main>

    <footer class="bg-dark text-center py-4 border-top border-secondary mt-auto">
        <div class="container">
            <p class="mb-0 text-muted">&copy; 2026 Yunus Emre Kara. Semantik HTML5 ve Bootstrap ile kodlanmıştır.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>