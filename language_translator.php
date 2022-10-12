<!-- i6GStXgi8dCIy5GHzEsLRyiKvrjHasQK -->

<?php
if (array_key_exists('submit', $_GET)) {
  if (!$_GET['text']) {
    $error = "Sorry, Your Input is empty";
  }
  if ($_GET['text']) {
  	$text = $_GET['text'];

  	$to = $_GET['to'];

  	$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "q=$text&target=$to",
	CURLOPT_HTTPHEADER => [
		"Accept-Encoding: application/gzip",
		"X-RapidAPI-Host: google-translate1.p.rapidapi.com",
		"X-RapidAPI-Key: d7b4029552msh4ac635fc439220cp11ae43jsnaff0745aa259",
		"content-type: application/x-www-form-urlencoded"
	],
]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		$result = json_decode($response,true);
		
		 $final_amt = $result['data']['translations']['0']['translatedText']; 
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
      <h3 class="text-center mb-4">Translator</h3>
      <!-- ----form-starts-here-- -->
      <form action="" method="get">
        <div class="form-group">
          <b><label for="text">Enter Text</label></b>
          <input type="text" class="form-control" id="text" name="text" placeholder="enter text">
        </div>
        <div class="form-group">
        	<b><label for="to">Language</label></b>
					<select  class="form-select" name="to" id="to">
						<option value="">Choose a Language from</option>
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
        <input type="submit" name="submit" class="btn btn-success mt-2">
      </form>
      <div class="output">
        <?php 
        if($final_amt) {
          echo '<div class="alert alert-success mt-4" role="alert">
         '.$final_amt.'</div>';
        }else{
          echo '<div class="alert alert-danger" role="alert">
         '.$error.'</div>';
        }
        ?>
      </div>
    </div>
</div>
</body>
</html>