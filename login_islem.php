<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Güvenlik için trim yaptım
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // 2. Ödev PDF'indeki kurala göre kontrol değerlerini tanımlaım
    $dogru_no = "b251210088"; 
    $dogru_mail = "b251210088@sakarya.edu.tr";

    if (!empty($username) && !empty($password)) {
        
        if ($username == $dogru_mail && $password == $dogru_no) {
            // Bilgiler doğruysa başarı sayfasına 
            header("Location: basari.php?no=" . $dogru_no);
            exit();
        } else {
            // Bilgiler yanlışsa logine geri dönme
            header("Location: login.php?hata=1");
            exit();
        }
    } else {
        // Alanlar boşsa geri gönderme
        header("Location: login.php?hata=1");
        exit();
    }
} else {
    // Doğrudan bu sayfaya girilmeye çalışılırsa ana sayfaya at
    header("Location: index.php");
    exit();
}
?>