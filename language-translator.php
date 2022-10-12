
<?php

  if (!empty($_REQUEST['submit'])) {
  	$text = $_REQUEST['text'];

  	$lang = $_GET['lang'];

  	$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://translef-translator.p.rapidapi.com/translate/text",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "q=$text&target=$lang ",
    CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: translef-translator.p.rapidapi.com",
		"X-RapidAPI-Key: 95f4e7b7e8msh081d5fcc9913c69p102cb5jsn7915cabaeefd",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Language app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
</style>
<body>
<div class="container d-flex justify-content-center" style="height: 100vh;">
    <div class="col-md-5 card1">
      <h3 class="text-center mb-4">language Translater</h3>
      <!-- ----form-starts-here-- -->
    <form >
        
        <div class="form-group">
			<select  class="form-select" name="lang" id="lang">
				<option value="">Choose Language </option>
                <option value="ar">Arabic</option>
				<option value="bn">Bengali</option>
				<option value="de">German</option>
				<option value="es">Spanish</option>
				<option value="en">English</option>
				<option value="fr">French</option>
				<option value="hi">Hindi</option>
				<option value="it">Italian</option>
				<option value="ja">Japanese</option>
				<option value="ko">Korean</option>
				<option value="mr">Marathi</option>
				<option value="pa">Punjabi</option>
				<option value="ru">Russian</option>
				<option value="ta">Tamil</option>
				<option value="te">Telugu</option>
				<option value="uk">Ukrainian</option>
				<option value="tr">Turkish</option>	
			</select>
        </div>
        <br/>
        <div class="form-group">
          <input type="text" class="form-control" id="text" name="text" placeholder="Enter text...">
        </div>
        <input type="submit" name="submit" value="Translate" class="btn btn-success mt-2">
    </form>
     
    </div>
</div>
</body>
</html>