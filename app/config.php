<?php
session_start();
if (!isset($_SESSION['global_token'])) {
  $_SESSION['global_token'] = bin2hex(openssl_random_pseudo_bytes(32));
}
