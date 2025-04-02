<?php
  // Define variables
  $username = "admin";
  $password = "securepassword123";

  // Login user
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['user'] = array(
      'username' => $_POST['username'],
      'password' => md5($_POST['password'])
    );
    
    // If the session is already set, redirect to the login page
    if (!empty($this->session)) {
      header("Location: index.php");
      exit();
    } else {
      echo "Logged in as: $username";
    }
  }

  // Output errors (if any) and flash messages
  if ($_POST['username'] != "" && !isset($_SESSION['user']['username'])) {
    $errors[] = "Username not provided or incorrect.";
  }
  
  // If the session is already set, redirect to the login page
  if (!empty($this->session)) {
    header("Location: index.php");
    exit();
  } else {
    echo "<div class='error-message'>";
    foreach ($errors as $error) {
      echo " - <span class='message'>" . $error . "</span>";
    }
    echo "</div>";

    // If the session is not set, redirect to the login page
    if (!empty($this->session)) {
      header("Location: index.php");
      exit();
    } else {
      echo "Please login again.";
    }
  }

  // Output success message and flash messages
  $success = "<div class='message'>";
  foreach ($successful_messages as $message) {
    $success .= $message . "<br>";
  }
  $success .= "</div>";

  if (isset($_POST['submit'])) {
    $_SESSION['user'] = array(
      'username' => $_POST['username'],
      'password' => md5($_POST['password'])
    );
    
    // If the session is already set, redirect to the login page
    if (!empty($this->session)) {
      header("Location: index.php");
      exit();
    } else {
      echo "Logged in as: $username";
    }
  }

  // Render template with session variables
  echo "<h1>Welcome, <b>$username</b>!</h1>";
  echo $success;
?>
