<?php
// save as `whatsapp.php`
$wa_number = "6287763044576";
$message = "Halo, saya ingin membeli...";
$url = "https://wa.me/" . $wa_number . "?text=" . urlencode($message);
header("Location: $url");
exit();
?>
