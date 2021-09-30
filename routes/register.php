<?php
    define('CSSPATH', 'template/css/'); //define css path

    $cssItem = '/resources/app.css'; //css item to display

    ?>


<html>

<head>
<title>Agrega tus favoritos !!! </title>

<body >
<h1>Registrate aquí !!! </h1>

</head>
<link href="/resources/app.css" >

<form method="post" action="" name="signup-form">


<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>

  <link rel="stylesheet" href="<?php echo ("$cssItem"); ?>" type="text/css">
  <button type="submit" name="register" value="register"id="boton" >Registrate</button>


</body>
</html>

<form method="post" action="" name="signup-form">
<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="register" value="register">Register</button>
</form>