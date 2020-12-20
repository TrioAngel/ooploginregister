<?php
  require_once 'core/init.php';

  if(Input::exists()){
    echo Input::get('username');
  }


?>


<form action="" method="post">
  <div class="field">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" autocomplete="off" value="">
  </div>
  <div class="field">
    <label for="password">Enter your password</label>
    <input type="password" name="password" id="password" autocomplete="off" value="">
  </div>
  <div class="field">
    <label for="password_again">Enter your password again</label>
    <input type="password" name="password_again" id="password_again" autocomplete="off" value="">
  </div>
  <div class="field">
    <label for="name">Your name</label>
    <input type="text" name="name" id="name" autocomplete="off" value="">
  </div>

  <input type="submit" value="Register">
</form>