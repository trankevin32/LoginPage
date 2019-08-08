<?php
  session_start()
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title></title>

  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
        <div class="a">
          <?php
          if(isset($_SESSION['userId'])){
            echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          else{
            echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-mail...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
            </form>
            <a class="signuplink" href="signup.php">Sign-up</a>';
          }
          ?>

        </div>
      </nav>
    </header>
