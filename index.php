<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yunus Emre Kara | Web Projesi</title>
    
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Harici CSS dosyası -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Yunus Emre Kara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-lg-2" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Ana İçerik Alanı -->
<div class="container mt-5 py-5">
    <div class="row align-items-center">
        <!-- Sol taraf Tanıtım Metni kısmı -->
        <div class="col-md-7 text-start">
            <h1 class="display-3 fw-bold">Yunus Emre Kara</h1>
            <h2 class="h4 text-primary mb-4">Code, Finance & Streetwear</h2>
            <p class="lead">
                Sakarya Üniversitesi'nde Bilgisayar Mühendisliği 1.Sınıf öğrencisiyim. 
                Web teknolojileri ve yazılım üzerine kendimi geliştirirken arka planda borsa,
                 müzik, spor ve modern sokak modası ile ilgileniyorum.
            </p>
            <p>
                Sakarya Üniversitesi’nde bilgisayar mühendisliği okuyorum ama hayatım sadece kod yazmaktan ibaret değil.
                 Bilgisayar oyunlarını ve esporu takip etmeyi çok severim, her ne kadar oyunlarda pek iddialı olmasam da bu dünyanın içindeyim.
                  Boş vakitlerimde borsa ile uğraşıyor, ufak tefek işlemlerle hem tecrübe hem de kâr elde etmeye çalışıyorum.

                 Müzik benim için bir yolculuk gibi; elektro gitar ve metal müzikle hayatımın merkezine koyduğum dönemlerden geçtim, şimdilerde ise rap ve R&B ritimlerine, özellikle Drake ve Kanye West'e kafayı takmış durumdayım. 
                 Bu ilgi alanlarım giyim tarzıma da yansıyor; Amerikan streetwear kültüründen ve rapçilerin stilinden etkileniyorum.
                  Spor tarafında ise NBA, Avrupa futbolu ve özellikle vazgeçilmezim olan Galatasaray'ın sıkı bir takipçisiyim; fırsat buldukça stadyumda o atmosferi solumayı seviyorum.

            </p>
            <div class="mt-4">
                <a href="#hobiler" class="btn btn-primary">Hobilerimi Gör</a>
                <a href="#" class="btn btn-primary">Özgeçmişim</a>
            </div>
        </div>

        <!-- Sağ taraf Profil Fotoğrafı kısmı -->
        <div class="col-md-5 text-center mt-4 mt-md-0">
            <img src="img/profil.jpg" alt="Yunus Emre Kara" class="img-fluid rounded-4 shadow-lg border border-secondary" style="max-height: 400px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>

    <!-- Bootstrap JS (Menülerin çalışması için gerekiyor.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>