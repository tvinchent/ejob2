<?php

$mail = $db->prepare("INSERT INTO mail SET mail = ?");

$mail->execute([$_POST['mail']]);

?>
