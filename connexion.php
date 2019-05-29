<!DOCTYPE html>
<html>
<head>
<title>Ecosolar connexion</title>
<link href="css/admin.css" rel="stylesheet">
<meta charset="UTF-8">
</head>
<body>
  <img src="img/icone-pastille-ecosolar-rvb.png" />
    <center><h2>On se Connecte</h2></center>
  <form class="login-form" method="POST" action="loguser.php">
    <label for="pseudo">Pseudo<label>
    <input type="text" placeholder="pseudo" id="pseudo" name="pseudo"/>
    <label for="password">Password</label>
    <input type="password" placeholder="Mdp" id="password" name="password"/>
    <label for="email">Email</label>
    <input type="email" placeholder="email" id="email" name="email"/>
    <button>Login</button>
  </form>
</body>
</html>
