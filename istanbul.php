<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim: İstanbul | Yunus Emre Kara</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- css e bağladım -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Yunus Emre Kara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link active" href="istanbul.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-lg-2" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Ana İçerik Alanı -->
    <div class="container mt-5 py-5">
        <div class="row text-center mb-5">
            <h1 class="display-4 fw-bold">İki Kıta, Tek Şehir</h1>
            <h2 class="h4 text-primary mb-4">Dünyanın Merkezi ve Doğup Büyüdüğüm Yer: İstanbul</h2>
        </div>

        <!-- 5 resimli slider -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-9">
                <div id="istanbulSlider" class="carousel slide shadow-lg" data-bs-ride="carousel">
                    <div class="carousel-inner" style="border-radius: 8px; border: 2px solid #222222;">
                        <div class="carousel-item active">
                            <img src="img/ist1.jpg" class="d-block w-100" alt="İstanbul 1" style="height: 450px; object-fit: cover; border: none;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/ist2.jpg" class="d-block w-100" alt="İstanbul 2" style="height: 450px; object-fit: cover; border: none;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/ist3.jpg" class="d-block w-100" alt="İstanbul 3" style="height: 450px; object-fit: cover; border: none;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/ist4.jpg" class="d-block w-100" alt="İstanbul 4" style="height: 450px; object-fit: cover; border: none;">
                        </div>
                        <div class="carousel-item">
                         <img src="img/ist5.jpg" class="d-block w-100" alt="İstanbul 5" style="height: 450px; object-fit: cover; border: none;">
                        </div>
                    </div>
                    
                    <!--  Bootstrap buton yapısı kullandm -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#istanbulSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Önceki</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#istanbulSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sonraki</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- ŞEHİR TANITIM METNİ  -->
        <div class="row justify-content-center mb-5">
    <div class="col-md-10 text-center text-md-start">
        <p class="lead" style="color: #cccccc; line-height: 1.8;">
            İstanbul; Beykoz ilçesinde doğup büyüdüğüm, üniversiteye kadar tüm eğitim hayatımı tamamladığım şehirdir. Özellikle Beykoz; Boğaz'ın büyüleyici doğası, sakinliği ve kendine has atmosferiyle benim için şehrin en özel noktası ve hâlâ yaşadığım yerdir. 
            <br><br>
            İstanbul dışından birisi gezmeye gelirse ona önereceğim başlıca yerler arasında; Beşiktaş, Sarıyer, Beyoğlu ve Kadıköy gibi hareketli semtlerin yanı sıra Yerebatan Sarnıcı ve Ayasofya Camii gibi tarihi miraslar yer alıyor. 16 milyonu aşan devasa nüfusuyla oldukça kalabalık ve kaos içinde olan bu şehrin, trafiği ise bence tek sıkıntılı kısmı. Yine de her ilçesi, her mahallesi ve her köşesi ayrı bir tarih barındıran İstanbul, iki kıtayı birleştiren eşsiz ruhuyla vazgeçilmezimdir.
        </p>
    </div>
</div>

        <!-- ŞEHİR BİLGİLERİ TABLOSU -->
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h3 class="fw-bold mb-4">Şehir Bilgileri</h3>
                <table class="table table-dark table-striped table-bordered border-secondary">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 30%;">Kategori</th>
                            <th scope="col">İstanbul</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">Nüfus</td>
                            <td>16 Milyondan fazla ve artış giderek hızlanıyor.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Gezilecek Yerler</td>
                            <td>Galata Kulesi, Ayasofya Camii, Yerebatan Sarnıcı, Kadıköy Moda Sahili, Beşiktaş, Bebek Sahil ve sayamadığım bir sürü yer</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Favori Mekanlarım</td>
                            <td>Yaşadığım ilçe olan Beykoz sık sık gittiğim Kadıköy ve Beşiktaş</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>