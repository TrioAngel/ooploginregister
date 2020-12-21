<?php
require_once 'core/init.php';

if(Session::exists('home')){
  echo Session::flash('home');
}

$user = new User();
if($user->isLoggedIn()){
?>
  <p>Hello <i><?php echo escape($user->data()->username); ?></i>!!!</p>

  <ul>
    <li><a href="logout.php">Log out</a></li>
  </ul>
<?php
} else {
  echo "you need to <a href='login.php'> login </a> or <a href='register.php'>register</a>";
}