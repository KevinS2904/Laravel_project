<?php
    define('CSSPATH', 'template/css/'); //define css path

    $cssItem = '/resources/app.css'; //css item to display

    ?>


<html>

<head>
<title>Agrega tus favoritos !!! </title>

<body >

<p class="cursiv"> Este es un párrafo con tipo de letra cursive</p>

<h1>Agregando tus sites favoritos</h1>

</head>
<link href="/resources/app.css" >

<form method="post" action="" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>

  <link rel="stylesheet" href="<?php echo ("$cssItem"); ?>" type="text/css">
  <button type="submit" name="ingreso" value="ingreso"
id="boton" >Ingreso</button>





<form action="/routes/register.php">
    <input type="submit" value="Registro" />
</form>

<a href="../register.php" class="button">Go to Google</a>


</body>
</html>
<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>
