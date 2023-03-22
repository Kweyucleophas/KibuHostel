<?php
date_default_timezone_set('Africa/Nairobi');

# access token
$consumerKey = 'MmALKE9Qgmb1S2OZqINQM5fDMVBU4io8'; 
$consumerSecret = 'FofVeXg1bjWBnOyH'; 

# define the variales
$BusinessShortCode = '174379';
$Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

//cleanup the phone number and remove unecessary symbols
$tel = '254741126016';
$phoneNumber = '254' . substr($tel, -9);

echo $phoneNumber;

$AccountReference = 'KweyuWebsite';
$TransactionDesc = 'Testing';
$Amount = '2';
$Timestamp = date('YmdHis');    
$Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);
$credentials = base64_encode($consumerKey . ':' . $consumerSecret);

# header for access token
$headers = ['Content-Type:application/json; charset=utf8'];

# M-PESA endpoint urls
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

# callback url
$CallBackURL = 'https://theprimehouse.co.ke/darajaC2B/callBackUrl.php'; 

$ch = curl_init($access_token_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
$result = json_decode($response);
$token = $result->access_token;
curl_close($ch);

print_r($token);

# header for stk push
$stkheader = ['Content-Type:application/json','Authorization:Bearer ' . $token];

# initiating the transaction
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $initiate_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader);

$curl_post_data = array(
  'BusinessShortCode' => $BusinessShortCode,
  'Password' => $Password,
  'Timestamp' => $Timestamp,
  'TransactionType' => 'CustomerPayBillOnline',
  'Amount' => $Amount,
  'PartyA' => $phoneNumber,
  'PartyB' => $BusinessShortCode,
  'PhoneNumber' =>$phoneNumber ,
  'CallBackURL' => $CallBackURL,
  'AccountReference' => $AccountReference,
  'TransactionDesc' => $TransactionDesc
);

$data_string = json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
$curl_response = curl_exec($curl);

echo $curl_response;
?>