<?php
  // PHP implementation of the Caesar Cipher encryption algorithm
  function encrypt($plaintext, $key) {
    $ciphertext = '';
    for ($i=0; $i < strlen($plaintext); $i++) {
      $char = substr($plaintext, $i, 1);
      if (isalpha($char)) {
        $char_ord = ord($char) + $key;
        if ($char_ord > ord('z')) {
          $char_ord -= 26;
        } else if ($char_ord < ord('a')) {
          $char_ord += 26;
        }
        $ciphertext .= chr($char_ord);
      } else {
        $ciphertext .= $char;
      }
    }
    return $ciphertext;
  }
  
  // PHP implementation of the Caesar Cipher decryption algorithm
  function decrypt($ciphertext, $key) {
    $plaintext = '';
    for ($i=0; $i < strlen($ciphertext); $i++) {
      $char = substr($ciphertext, $i, 1);
      if (isalpha($char)) {
        $char_ord = ord($char) - $key;
        if ($char_ord > ord('z')) {
          $char_ord -= 26;
        } else if ($char_ord < ord('a')) {
          $char_ord += 26;
        }
        $plaintext .= chr($char_ord);
      } else {
        $plaintext .= $char;
      }
    }
    return $plaintext;
  }
  
  // Example usage of the Caesar Cipher functions
  echo encrypt("hello world", 3) . "\n";
  echo decrypt(encrypt("hello world", 3), 3) . "\n";
?>
