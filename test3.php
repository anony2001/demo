<?php
header('Content-Type: image/gif');
// Complete minimal valid GIF structure
$gif = "GIF89a" . 
       "\x01\x00\x01\x00" .  // width=1, height=1
       "\x00" .               // global color table flag
       "\x00" .               // background color
       "\x00" .               // pixel aspect ratio
       "\x21\xf9\x04" .       // graphic control extension
       "\x01\x00\x00\x00\x00" . // disposal method, delay
       "\x2c" .               // image separator
       "\x00\x00\x00\x00" .   // left, top
       "\x01\x00\x01\x00" .   // width, height
       "\x00" .               // local color table flag
       "\x02\x02\x04\x01" .   // LZW data
       "\x00" .               // block terminator
       "\x3b";                // trailer

echo $gif . '<script>alert(1)</script>';
?>
