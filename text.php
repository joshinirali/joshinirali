<?php
$text="invoice 123 paid on 2025-04-14";
preg_match_all("/\d+/",$text,$matches,);
echo '<pre>';
print_r($matches[0]);
?>