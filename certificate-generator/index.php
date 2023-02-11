<?php

  $FileHandle = fopen('result.pdf', 'w+');

  $curl = curl_init();

  $instructions = '{
    "parts": [
      {
        "html": "index.html",
        "assets": [
          "logo.svg",
          "Inter-Bold.ttf",
          "Inter-Medium.ttf",
          "Inter-Regular.ttf",
          "SpaceMono-Regular.ttf"
        ]
      }
    ]
  }';

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.pspdfkit.com/build',
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_POSTFIELDS => array(
      'instructions' => $instructions,
      'index.html' => new CURLFILE('index.html'),
      'logo.svg' => new CURLFILE('logo.svg'),
      'Inter-Bold.ttf' => new CURLFILE('Inter-Bold.ttf'),
      'Inter-Medium.ttf' => new CURLFILE('Inter-Medium.ttf'),
      'Inter-Regular.ttf' => new CURLFILE('Inter-Regular.ttf'),
      'SpaceMono-Regular.ttf' => new CURLFILE('SpaceMono-Regular.ttf')

    ),
    CURLOPT_HTTPHEADER => array(
      'Authorization: Bearer pdf_live_U5krncSvOfwQP5C9Wcdw9yzV15jDeqshtbendSGKjiV', // Replace <YOUR_API_KEY> with your API key.
    ),
    CURLOPT_FILE => $FileHandle,
  ));

  $response = curl_exec($curl);

  curl_close($curl);

  fclose($FileHandle);

?>


<a href="result.pdf">click Here to Preview PDF</a>