<?php
if (array_key_exists('submit', $_POST)) {
  if (!$_POST['text']) {
    $error = "Sorry, Your Input is empty";
  }
  if ($_POST['text']) {
  	$text = $_POST['text'];

  	$curl = curl_init();  

	  curl_setopt_array($curl, [
		CURLOPT_URL => "https://cloudlabs-text-to-speech.p.rapidapi.com/synthesize",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "voice_code=en-US-1&text=$text&speed=0.80&pitch=1.00&output_type=audio_url",
		CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cloudlabs-text-to-speech.p.rapidapi.com",
		"X-RapidAPI-Key: af65e2a038msh6da9c55ee1f6960p1ded06jsn453d2d93981e",
		"content-type: application/x-www-form-urlencoded"
	],
]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		$result = json_decode($response,true);
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$result = $result['result']['audio_url'];
		}
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>voice app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
body{
	background: white;
}
.card1{
  background: rgba( 255, 255, 255, 0.25 );
  box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 4px );
  -webkit-backdrop-filter: blur( 4px );
  border-radius: 10px;
  border: 1px solid rgba( 255, 255, 255, 0.18 );
  /*color: white;*/
  margin-top: 10rem;
  height:400px; 
  padding: 45px 30px;
}
</style>
<body>
<div class="container d-flex justify-content-center" style="height: 100vh;">
    <div class="col-md-5 card1">
      <h3 class="text-center mb-4">Convert Your Text to Speech</h3>
      <!-- ----form-starts-here-- -->
      <form action="" method="post">
        <div class="form-group">
          <b><label for="text">Enter Text</label></b>
          <input type="text" class="form-control" id="text" name="text" placeholder="enter text">
        </div>
        <input type="submit" name="submit" class="btn btn-success mt-2">
      </form>
      <div class="output d-flex justify-content-center mt-4">
        <audio controls>
				  <source src="<?php echo $result; ?>" >
				</audio>
      </div>
    </div>
</div>
</body>
</html>