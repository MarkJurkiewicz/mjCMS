<?php
$password = "cigar";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;