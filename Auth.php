<?php
if (!$_POST || !$_POST["action"]) {
  echo 'There is no action';
  return;
}

switch ($_POST["action"]) {
  case 'login':
    $authController = new Auth();
    $res = $authController->login($_POST["email"], $_POST["password"]);
    print_r($res);
    break;

  default:
    break;
}

class Auth
{
  function login($email, $password)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('email' => $email, 'password' => $password),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
  }
}
