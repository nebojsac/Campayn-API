<?php

$key = 'your_api_key_goes_here';
$listId = 123; //replace with your list ID

$fields = array(
    'email'=>'sample@sample.com',
    'first_name'=>'Nick', // optional
    'last_name'=>'Sample' // optional
);

// if you want the request to fail for duplicate contacts, uncomment this:
// $fields['failOnDuplicate'] = true;

$url = 'https://campayn.com/api/v1/lists/' . $listId . '/contacts.json';
$curl = curl_init($url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$json = json_encode($fields);      
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    'Authorization: TRUEREST apikey=' . $key
));
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, count($fields));
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

$result = json_decode(curl_exec($curl));
curl_close($curl);

if ($result['success'] == true) {
    // it worked
} else {
    // it failed (maybe the contact is already on the list)
}