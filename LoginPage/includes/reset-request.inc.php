<?php

if(isset($_POST['reset-request-submit'])) {

  $selecter = bin2hex(random_bytes(8));
  $token = random_bytes(32);

}
else{
  header("Location: ../index.php");
}
