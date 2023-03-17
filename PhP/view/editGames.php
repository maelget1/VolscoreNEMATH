<?php
ob_start();
$title = "Gérer";
echo "page en développement"
?>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
