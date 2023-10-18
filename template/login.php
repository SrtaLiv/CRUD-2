<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>Login</title>
</head>
            
<body>

<h1>Iniciar Sesion</h1>
<div class="">
</div>

<fieldset>
  <legend>Register</legend>

<form method="POST">
                    
  <div> 
      <label for="email">Email</label>
      <input type="email" name='email' placeholder="Ejemplo@gmail.com" required>
  </div>

  <div>
      <label for="password">Password</label>
      <input type="password" name='password' placeholder="*******" required>
      
  </div>

    <button type="submit" class="btn-sesion">Login</button>

  <div>
  <!--<p class="error">{$message}</p>-->
  </div>

  </fieldset>
</form>


   
