<?php
// GÜVENLİK: Sayfaya dışarıdan direkt erişimi engellemek için POST kontrolü yapıyorum.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Kullanıcıdan gelen verileri yakalayıp, sağındaki solundaki gereksiz boşlukları temizliyorum.
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    //  11 haneli öğrenci numarasını tanımladım. 
    $dogru_no = "b2512100088"; 
    $dogru_mail = "b2512100088@sakarya.edu.tr";

    // Sunucu tarafında  boş alan kontrolü yaparak güvenliği iki katına çıkarıyorum. 
    if (!empty($username) && !empty($password)) {
        
        // Girilen bilgiler PDF'te istenen formatla eşleşiyor mu kontrolü:
        if ($username == $dogru_mail && $password == $dogru_no) {
            
            // Giriş başarılı! PDF'te istendiği gibi 'Hoşgeldiniz [No]' yazdırmak için numarayı başarı sayfasına atıyorum. 
            header("Location: basari.php?no=" . $dogru_no);
            exit();
            
        } else {
            // Hatalı girişte tekrar login sayfasına hata koduyla yönlendirme yapıyorum. 
            header("Location: login.php?hata=1");
            exit();
        }
    } else {
        // Alanlar boşsa yine login sayfasına geri gönderiyorum.
        header("Location: login.php?hata=1");
        exit();
    }
} else {
    // Kaçak girişleri ana sayfaya yönlendirerek sistemi koruyorum.
    header("Location: index.php");
    exit();
}
?>