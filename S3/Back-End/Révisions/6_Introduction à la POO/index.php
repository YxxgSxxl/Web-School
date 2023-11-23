<?php
require 'maitre.php';

$tintin = new tintin("Tintin", "journaliste", "Belgique", "Milou", "fox-terrier");

echo $tintin->description();