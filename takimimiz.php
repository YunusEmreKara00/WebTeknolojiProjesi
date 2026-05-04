<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takımımız - Galatasaray</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #121212; 
            color: #ffffff;
        }
        .gs-text {
            color: #f3a000; /* Galatasaray Sarısı */
        }
        .gs-bg {
            background-color: #a32638; /* Galatasaray Kırmızısı */
        }
        .media-border {
            border: 2px solid #333;
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>

    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">YUNUS EMRE KARA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="istanbul.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link active gs-text" href="takimimiz.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sayfa dizaynına başladım -->
    <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
        
        <!-- Başlık kısmı -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold text-uppercase gs-text">Çocukluk Aşkı: Galatasaray</h1>
                
                <hr class="bg-secondary">
            </div>
        </div>

        <!-- Kendi fikirlerimle Galatasaray hakkında paragraf yazdım. -->
        <div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <!-- Başlık Kısmı -->
        <h2 class="gs-text fw-bold mb-4 border-bottom border-secondary pb-2">Bir Tutkudan Daha Fazlası</h2>
        
        <p class="lead" style="color: #cccccc; line-height: 1.8; text-align: justify;">
            Babamdan devraldığım bu aşk, benim için sadece bir spor kulübü değil; hüzün, mutluluk ve gururun en saf hali. Türkiye'nin <mark class="bg-warning text-dark px-1">tartışmasız en büyüğü</mark> olan Galatasaray, bugün 25 Süper Lig şampiyonluğu ile zirvede. Ancak bu projeyi sunduğum tarihte, müzemize 26. kupayı eklemiş olmanın gururunu yaşıyor olacağız.
        </p>

        <p style="color: #bbbbbb; line-height: 1.7;">
            Avrupa arenasında istikrar arayışımız sürse de, son dönemde atılan adımlar "Türk olmayan takımları yenmek" gayemize her gün biraz daha yaklaştığımızın kanıtı. 
            <strong>Hagi</strong>'nin tekniğinden <strong>Drogba</strong>'nın gücüne, <strong>Sneijder</strong>'in zekasından <strong>Osimhen</strong>'in yırtıcılığına kadar dünya futbolunda iz bırakmış efsaneleri bu forma altında izlemek tarif edilemez bir zevk ve gurur.
        </p>

        <div class="p-3 mt-4 rounded media-border bg-dark">
            <h5 class="gs-text mb-3">Sadece Futbol Değil...</h5>
            <ul class="list-unstyled" style="color: #cccccc;">
                <li class="mb-2">🏀 <strong>Basketbol:</strong> 2016 EuroCup zaferiyle Avrupa'da kupa kaldırma geleneğimizi parkelere de taşıdık ama basketbolda o kadarda başarılı olduğumuzu söyleyemem.</li>
                <li class="mb-2">🏟️ <strong>Atmosfer:</strong> Sık sık gittiğim Rams Park'taki o atmosfer, futbolun sadece sahada değil, tribünde de bir sanat olduğunu gösteriyor.</li>
            </ul>
        </div>
    </div>
</div>

        <!-- Efsanevi bir maç ekledim -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <h3 class="mb-3 border-bottom border-secondary pb-2">Türk Futbol Tarihinin En Büyük Başarısı</h3>
                <div class="ratio ratio-16x9 rounded media-border">
                    <iframe src="https://www.youtube.com/embed/_pcWD8XLhPI" title="Galatasaray Video" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Stadtan ve atmosferden fotoğraflar ekledim -->
        <div class="row mb-5">
            <h3 class="mb-3 border-bottom border-secondary pb-2">Muhteşem Tribün ve Atmosfer</h3>
            <div class="col-md-4 mb-3">
                <img src="img/gs1.jpg" class="img-fluid rounded media-border w-100" style="object-fit: cover; height: 250px;" alt="Galatasaray 1">
            </div>
            <div class="col-md-4 mb-3">
                <img src="img/gs2.jpg" class="img-fluid rounded media-border w-100" style="object-fit: cover; height: 250px;" alt="Galatasaray 2">
            </div>
            <div class="col-md-4 mb-3">
                <img src="img/gs3.jpg" class="img-fluid rounded media-border w-100" style="object-fit: cover; height: 250px;" alt="Galatasaray 3">
            </div>
        </div>

        <!-- Başarılar ve Efsaneler için tablo yaptım -->
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <h3 class="mb-3 border-bottom border-secondary pb-2">Tarihi Başarılar</h3>
                <ul class="list-group list-group-flush rounded media-border">
                    <li class="list-group-item bg-dark text-white border-secondary">🏆 25 Süper Lig Şampiyonluğu</li>
                    <li class="list-group-item bg-dark text-white border-secondary">🌍 1 UEFA Kupası (2000)</li>
                    <li class="list-group-item bg-dark text-white border-secondary">🌍 1 UEFA Süper Kupa (2000)</li>
                    <li class="list-group-item bg-dark text-white border-secondary">🇹🇷 19 Türkiye Kupası Şampiyonluğu</li>
                </ul>
            </div>

            <div class="col-md-6 mb-4">
                <h3 class="mb-3 border-bottom border-secondary pb-2">Unutulmaz İsimler</h3>
                <div class="table-responsive media-border rounded">
                    <table class="table table-dark table-hover mb-0">
                        <thead class="gs-bg text-white">
                            <tr>
                                <th>İsim</th>
                                <th>Ünvan / Lakap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Metin Oktay</td>
                                <td>Taçsız Kral</td>
                            </tr>
                            <tr>
                                <td>Fatih Terim</td>
                                <td>İmparator</td>
                            </tr>
                            <tr>
                                <td>Fernando Muslera</td>
                                <td>Kaptan (Nando)</td>
                            </tr>
                            <tr>
                                <td>Gheorghe Hagi</td>
                                <td>Karpatların Maradonası</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>