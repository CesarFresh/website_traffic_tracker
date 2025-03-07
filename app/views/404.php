<?php
$title = '404 Not Found';
ob_start();
?>
<h1>404 Not Found</h1>
<?php
$content = ob_get_clean(); 
include __DIR__ . '/Main.php'; 
