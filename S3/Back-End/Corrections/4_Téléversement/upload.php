<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Upload</title>
  <style>
    form {
      width: 300px;
    }
  </style>
</head>

<body>
  <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend><strong>Déposez votre photo</strong></legend>
      <input type="hidden" name="MAX_FILE_SIZE" value="500000">
      <input type="file" name="photo" accept="image/gif, image/jpeg, image/png">
    </fieldset>
    <input type="submit" name="envoyer" value="Envoyer">
  </form>

  <?php
    define("UPLOAD_DIR", "mesImages");
    
  // Test si le fichier a été transféré
  if (isset($_FILES['photo'])) {
    echo 'Contenu de <b>$_FILES</b>:<br>';
    var_dump($_FILES);

    // Test s'il n'y a pas d'erreur
    if ($_FILES['photo']['error'] == 0) {
      // Test si la taille du fichier uploadé est conforme
      if ($_FILES['photo']['size'] <= 500000) {
        // Test si l'extension du fichier uploadé est autorisée
        $infosfichier = new SplFileInfo($_FILES['photo']['name']);
        $extension_upload = $infosfichier->getExtension();
        $extensions_autorisees = array('jpg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
          // Stockage définitif du fichier photo dans le dossier uploads
          move_uploaded_file($_FILES['photo']['tmp_name'], UPLOAD_DIR . '/' . $_FILES['photo']['name']);
          echo "Transfert du fichier <b>" . $_FILES['photo']['name'] . "</b> effectué !";
        } else
          echo "Echec du transfert : Type de fichier non autorisé.";
      } else
        echo "Echec du transfert : Fichier trop volumineux.";
    } else
      echo "Echec du transfert avec le code d'erreur : " . $_FILES['photo']['error'];
  }
  ?>

  <?php
  // Test si il n'y a pas d'erreurs
  if (isset($_FILES['photo']))
  {
    // Test si la taille du fichier est uploadé est conforme
    if ($_FILES['photo']['error'] == '0')
    {
      // Test si l'extension est autorisée
      $infosfichier = new SplFileInfo($_FILES['photo']['name']);
      $extension_upload = $infosfichier->getExtension();
      $extensions_autorisees = array('jpg', 'gif', 'png');
      
      if (in_array($extension_upload, $extensions_autorisees))
      {
        //Verification si le dossier d'enregistrement des images existe
        if (!is_dir(UPLOAD_DIR))
        {
          mkdir(UPLOAD_DIR);

          move_uploaded_file($_FILES['photo']['tmp_name'], UPLOAD_DIR . '/' . $_FILES['photo']['name']);

          echo "Transfert du fichier <b>" . $_FILES['photo']['name'] . "</b> effectué !<br>";
          echo "<img style='width:500px' src='" .UPLOAD_DIR. "/" . $_FILES['photo']['name'] . "'>";
        }
      }
    }
  }

  ?>

</body>

</html>