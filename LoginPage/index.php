<?php
  require "header.php";
?>

<link rel="stylesheet" href="style.css">

  <main>
    <div>
      <section class="loginlogoutmessage">
        <?php
          if(isset($_GET['error']) == 'wrongpwd'){
            echo '<p>Wrong password/username. Try again.</p>';
            exit();
          }
          if(isset($_SESSION['userId'])){
            echo '<p>You are logged in.</p>';
          }
          else{
            echo '<p>You are logged out.</p>';
          }

        ?>
      </section>

    </div>
  </main>

<?php
  require "footer.php";
?>
