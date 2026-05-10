<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - Yunus Emre Kara</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-light d-flex flex-column" style="min-height: 100vh;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">YUNUS EMRE KARA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="istanbul.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takimimiz.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold text-warning" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container d-flex align-items-center justify-content-center flex-grow-1 main-container">
        <div class="col-md-5">
            <section class="cv-card shadow-lg p-4 rounded bg-dark border border-secondary">
                <div class="text-center mb-4">
                    <i class="bi bi-person-lock text-warning" style="font-size: 3rem;"></i>
                    <h2 class="fw-bold text-white mt-2">Öğrenci Girişi</h2>
                    <p class="text-muted small">Lütfen SAÜ e-posta adresinizle giriş yapın.</p>
                </div>

                <form action="login_islem.php" method="POST" id="loginForm" onsubmit="return validateLogin()">
                    
                    <div class="mb-3">
                        <label for="username" class="form-label">Kullanıcı Adı (E-Posta)</label>
                        <input type="email" class="form-control bg-dark text-white border-secondary" 
                               id="username" name="username" 
                               placeholder="b251210088@sakarya.edu.tr" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Şifre (Öğrenci No)</label>
                        <input type="password" class="form-control bg-dark text-white border-secondary" 
                               id="password" name="password" 
                               placeholder="Öğrenci numaranızı giriniz" required>
                    </div>

                    <?php if(isset($_GET['hata'])): ?>
                        <div class="alert alert-danger py-2 small mb-3">
                            <i class="bi bi-exclamation-triangle-fill"></i> Bilgiler hatalı veya boş!
                        </div>
                    <?php endif; ?>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning fw-bold py-2">
                            GİRİŞ YAP <i class="bi bi-box-arrow-in-right ms-1"></i>
                        </button>
                        <a href="index.php" class="btn btn-link text-muted btn-sm text-decoration-none">Ana Sayfaya Dön</a>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <footer class="bg-dark text-center py-4 border-top border-secondary mt-auto">
        <div class="container">
            <p class="mb-0 text-muted">&copy; 2026 Yunus Emre Kara. Semantik HTML5 ve Bootstrap ile kodlanmıştır.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateLogin() {
            let username = document.getElementById('username').value.trim();
            let password = document.getElementById('password').value.trim();
            let hatalar = "";

            // 1. Boş Alan Kontrolü
            if (username === "") {
                hatalar += "• Kullanıcı adı (E-Posta) alanı boş bırakılamaz.\n";
            } else {
                
                // Sonunda kesinlikle @sakarya.edu.tr olmak zorunda
                let saueMailRegex = /^[a-zA-Z0-9._%+-]+@sakarya\.edu\.tr$/;
                if (!saueMailRegex.test(username)) {
                    hatalar += "• Lütfen geçerli bir '@sakarya.edu.tr' uzantılı öğrenci maili giriniz.\n";
                }
            }

            // Şifre boşluk kontrolü
            if (password === "") {
                hatalar += "• Şifre (Öğrenci No) alanı boş bırakılamaz.\n";
            }

            // hata varsa formu durdurup uyarı vermesi için
            if (hatalar !== "") {
                alert("GİRİŞ HATASI:\n\n" + hatalar);
                return false; // Formun PHP'ye gitmesini engeller
            }

            return true;
        }
    </script>
</body>
</html>