<?php

class AuthController
{
  public $modelAuth;

  public function __construct()
  {
    $this->modelAuth = new AuthModel();
  }

  public function signIn()
  {
    try {
      require_once "./views/auth/signin.php";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function handleSignIn()
  {
    try {
      if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // var_dump($password);die();
        $user = $this->modelAuth->checkSignin($username, $password);
        if ($user==true) {
          $_SESSION['username'] = $user;
          if ($user['vai_tro'] === 0) {
            header("Location: http://localhost/seven-store");
            exit ();
          }
          header("Location: ?act=/");
          exit ();
        }else{
          $_SESSION['error'] = $user;
          $_SESSION['flash'] = true;
          // var_dump($user);die();
          header("Location: ?act=signin");
          exit ();
        }
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function signUp()
  {
    try {
      require_once "./views/auth/signup.php";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function signOut()
  {
    try {
      require_once "./views/auth/signout.php";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function fogotPassword()
  {
    try {
      require_once "./views/auth/fogotPassword.php";
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
