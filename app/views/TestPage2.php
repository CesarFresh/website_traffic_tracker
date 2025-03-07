<?php
$title = 'Test Page 2';
ob_start();
?>
<h1>Test Page 2</h1>
<?php
$content = ob_get_clean(); 
include __DIR__ . '/Main.php'; 