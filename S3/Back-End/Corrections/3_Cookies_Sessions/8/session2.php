<?php
session_start();
echo 'session_id : '.session_id().'<br>';
echo 'Bonjour '.$_SESSION['nom'].'<br>';
echo '<a href="session1.php">Vers la page session1.php </a>';
?>