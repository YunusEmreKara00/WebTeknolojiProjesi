<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş - Yunus Emre Kara</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
       
        body { background-color: #121212; color: #cccccc; }
        
       
        .cv-card { background-color: #1a1a1a; border: 1px solid #333; border-radius: 10px; margin-bottom: 25px; padding: 25px; transition: 0.3s; }
        .cv-card:hover { border-color: #f3a000; box-shadow: 0 4px 15px rgba(243, 160, 0, 0.1); }
        
        
        .cv-title { color: #f3a000; border-bottom: 1px solid #333; padding-bottom: 10px; margin-bottom: 20px; font-weight: bold; text-transform: uppercase; font-size: 1.2rem; }
        .icon-warning { color: #f3a000; margin-right: 10px; font-size: 1.2rem; }
        
       
        .profile-img { width: 180px; height: 180px; object-fit: cover; border: 3px solid #f3a000; padding: 3px; background-color: #121212; }
        
        
        .timeline { border-left: 2px solid #333; padding-left: 20px; margin-left: 10px; }
        .timeline-item { position: relative; margin-bottom: 25px; }
        .timeline-item::before { content: ""; position: absolute; left: -27px; top: 5px; width: 12px; height: 12px; background-color: #1a1a1a; border: 2px solid #f3a000; border-radius: 50%; }
        
       
        .progress { height: 12px; background-color: #333; border-radius: 6px; margin-top: 5px; margin-bottom: 15px; }
        .progress-bar.bg-custom { background-color: #f3a000; }

       
        .contact-list li { margin-bottom: 12px; font-size: 0.9rem; list-style: none; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">YUNUS EMRE KARA</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold text-warning" href="ozgecmis.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="istanbul.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takimimiz.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container" style="margin-top: 100px; margin-bottom: 50px;">
        
        <header class="row text-center mb-5">
            <div class="col-12">
                <h1 class="display-4 fw-bold text-white">ÖZGEÇMİŞ</h1>
            </div>
        </header>

        <div class="row">
            
            <aside class="col-lg-4 mb-4">
                <div class="position-sticky" style="top: 100px;">
                    <section class="cv-card text-center mb-4">
                        <img src="img/profil.jpg" alt="Yunus Emre Kara" class="rounded-circle profile-img mb-3 shadow">
                        <h3 class="h4 text-white fw-bold">Yunus Emre Kara</h3>
                        <p class="text-warning mb-0">Bilgisayar Mühendisliği Öğrencisi</p>
                        <p class="text-muted small">Programcı</p>
                    </section>

                    <section class="cv-card">
                        <h4 class="cv-title"><i class="bi bi-person-lines-fill icon-warning"></i> İletişim</h4>
                        <ul class="contact-list p-0 text-light">
                            <li><i class="bi bi-envelope-fill text-warning me-2"></i> karayunus139@gmail.com</li>
                            <li><i class="bi bi-telephone-fill text-warning me-2"></i> +90 541 446 60 36</li>
                            <li><i class="bi bi-geo-alt-fill text-warning me-2"></i> Sakarya, Türkiye</li>
                            <li><i class="bi bi-github text-warning me-2"></i> github.com/YunusEmreKara00</li>
                        </ul>
                    </section>
                </div>
            </aside>

            <div class="col-lg-8">
                
                <section class="cv-card">
                    <h4 class="cv-title"><i class="bi bi-person-badge-fill icon-warning"></i> Vizyon & Hakkımda</h4>
                    <p class="text-light mb-0" style="line-height: 1.7; text-align: justify;">
                        Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisiyim. Yazılım geliştirme ve web teknolojileri alanlarında kendimi geliştirmeye odaklanıyorum. Yeni teknolojileri araştırmayı, analitik problem çözmeyi ve yaratıcı projeler üretmeyi seviyorum. Mühendislik eğitimimi finans, dijital tasarım ve veri analizi merakımla birleştirerek çok yönlü bir bakış açısı kazanmayı hedefliyorum.
                    </p>
                </section>

                <section class="cv-card">
                    <h4 class="cv-title"><i class="bi bi-mortarboard-fill icon-warning"></i> Eğitim Bilgileri</h4>
                    <div class="timeline">
                        <article class="timeline-item">
                            <h5 class="text-white mb-1">Sakarya Üniversitesi</h5>
                            <h6 class="text-muted">Bilgisayar Mühendisliği (Lisans)</h6>
                            <span class="badge bg-warning text-dark mb-2">2025 - Devam Ediyor</span>
                            <p class="text-light small mb-0">Algoritma tasarımı, nesne yönelimli programlama, olasılık ve istatistik, web teknolojileri üzerine akademik eğitim.</p>
                        </article>
                        
                        <article class="timeline-item">
                            <h5 class="text-white mb-1">Paşabahçe Ahmet Ferit İnal Anadolu Lisesi</h5>
                            <h6 class="text-muted">Sayısal Bölüm</h6>
                            <span class="badge bg-secondary mb-2">2020 - 2024</span>
                            <p class="text-light small mb-0">Matematik ve fen bilimleri ağırlıklı eğitimle analitik düşünce altyapısının kazanılması.</p>
                        </article>
                    </div>
                </section>

                <section class="cv-card">
                    <h4 class="cv-title"><i class="bi bi-pc-display-horizontal icon-warning"></i> Teknik Beceriler</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between text-light mb-1"><span>HTML5 / CSS3 / Bootstrap</span> <span>%90</span></div>
                            <div class="progress"><div class="progress-bar bg-custom" style="width: 90%;"></div></div>
                            
                            <div class="d-flex justify-content-between text-light mb-1"><span>C# & .NET</span> <span>%85</span></div>
                            <div class="progress"><div class="progress-bar bg-custom" style="width: 85%;"></div></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between text-light mb-1"><span>JavaScript</span> <span>%75</span></div>
                            <div class="progress"><div class="progress-bar bg-custom" style="width: 75%;"></div></div>
                            
                            <div class="d-flex justify-content-between text-light mb-1"><span>PHP & MySQL</span> <span>%70</span></div>
                            <div class="progress"><div class="progress-bar bg-custom" style="width: 70%;"></div></div>
                        </div>
                    </div>
                </section>

                <section class="cv-card">
                    <h4 class="cv-title"><i class="bi bi-globe icon-warning"></i> Diller</h4>
                    <div class="d-flex justify-content-between text-light mb-1"><span>Türkçe</span> <span>Anadil</span></div>
                    <div class="progress mb-3"><div class="progress-bar bg-custom" style="width: 100%;"></div></div>

                    <div class="d-flex justify-content-between text-light mb-1"><span>İngilizce</span> <span>B2 / Akademik</span></div>
                    <div class="progress"><div class="progress-bar bg-custom" style="width: 75%;"></div></div>
                </section>

                <section class="cv-card">
                    <h4 class="cv-title"><i class="bi bi-code-slash icon-warning"></i> Projeler</h4>
                    <article class="mb-3 border-bottom border-secondary pb-2">
                        <h6 class="text-white fw-bold mb-1">Kişisel Web Portfolyosu (Aktif)</h6>
                        <p class="text-light small mb-0">Semantik HTML5, Bootstrap ve PHP kullanılarak geliştirilmiş, responsive tasarıma sahip dinamik portfolyo sitesi.</p>
                    </article>
                    <article>
                        <h6 class="text-white fw-bold mb-1">C# Windows Form - Dinamik Şekil Oluşturucu</h6>
                        <p class="text-light small mb-0">C# ve .NET Framework kullanılarak geliştirilen; kullanıcıdan alınan parametrelere göre çalışma zamanında (runtime) dinamik geometrik şekiller ve grafik nesneleri oluşturan masaüstü uygulaması.</p>
                    </article>
                </section>

                <section class="cv-card">
                    <h4 class="cv-title"><i class="bi bi-controller icon-warning"></i> Hobiler & İlgi Alanları</h4>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge border border-secondary text-light p-2">📈 BIST Finansal Analiz</span>
                        <span class="badge border border-secondary text-light p-2">⚽ Futbol</span>
                        <span class="badge border border-secondary text-light p-2">🎮 Oyun</span>
                        <span class="badge border border-secondary text-light p-2">🧥 Moda Estetiği (Streetwear/Opium)</span>
                        <span class="badge border border-secondary text-light p-2">🧪 Parfüm</span>
                        <span class="badge border border-secondary text-light p-2">🎵 Müzik</span>
                    </div>
                </section>

            </div>
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