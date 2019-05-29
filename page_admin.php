<?php
session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{

?>

<!DOCTYPE html>
<html>
<head>
<title>Ecosolar connexion</title>
<meta charset="UTF-8">
</head>
<body>
  <?php
                  if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                  {
                      echo $_SESSION['pseudo'];
                  } ?>
</body>
</html>

<?php } else { header("Location: index.php");
 } ?>
