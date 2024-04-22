<?php
$ad = $_POST['ad'];
$email = $_POST['email'];
$konu = $_POST['konu'];
$mesaj = $_POST['mesaj'];

$alici_email = "alici@example.com";

$eposta_basligi = "İletişim Formu: $konu";

$eposta_icerigi = "Ad: $ad\n";
$eposta_icerigi .= "E-posta: $email\n";
$eposta_icerigi .= "Mesaj: \n$mesaj";

mail($alici_email, $eposta_basligi, $eposta_icerigi);

echo "Mesajınız başarıyla gönderildi. Size en kısa sürede geri dönüş yapacağız.";
?>
