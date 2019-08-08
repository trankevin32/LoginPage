<?php
  require "header.php";
?>
<link rel="stylesheet" href="style.css">
  <main>
    <div class="signupsheet">
      <h1>Sign-up</h1>
      <?php
      if(isset($_GET['error'])) {
        if($_GET["error"] == "emptyfields"){
          echo '<p>Fill in all fields!</p>';
        }
        else if($_GET["error"] == "invalidmailuid"){
          echo '<p>Invaid username and email</p>';
        }
        else if($_GET["error"] == "invaliduid"){
          echo '<p>Invaid username</p>';
        }
        else if($_GET["error"] == "invalidmails"){
          echo '<p>Invaid email</p>';
        }
        else if($_GET["error"] == "passwordCheck"){
          echo '<p>Passwords do not match!</p>';
        }
        else if($_GET["error"] == "usertaken"){
          echo '<p>Username is already taken.</p>';
        }
      }

      else if(isset($_GET["signup"]) == "success"){
        echo '<p>Sign-up success!</p>';
      }

      ?>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit">Sign Up</button>
      </form>
    </div>
  </main>

<?php
  require "footer.php";
?>
