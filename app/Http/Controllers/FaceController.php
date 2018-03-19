<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaceController extends Controller
{
  protected function getFaceAppResults (Request $request)
  {

      if (!empty($request->imageUrl)) {
          $imageUrl = $response->imageUrl;
      }
    $curl = curl_init();

    curl_setopt_array($curl, array(
     CURLOPT_URL => "https://api-us.faceplusplus.com/facepp/v3/detect?api_key=IJXARUZHq4AQOIH5r8F5FknxneD-qNS2&api_secret=AdwvUK2Whfwe1PXuKj8oVseZF5JUBdrU&image_url=$imageUrla&return_attributes=gender,age,smiling,headpose,facequality,blur,eyestatus,emotion,ethnicity,beauty,mouthstatus,eyegaze,skinstatus",
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "POST",
     CURLOPT_HTTPHEADER => array(
       "Cache-Control: no-cache",
       "Postman-Token: 47caa901-cae8-4610-b943-4c10717c0ebc"
     ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $data = [
      'faceData' => $response
    ];

    return view('results')->with($data);
  }
}