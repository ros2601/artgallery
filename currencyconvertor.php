<?php
if (array_key_exists('submit', $_GET)) {
  if (!$_GET['amount']) {
    $error = "Sorry, Your Input is empty";
  }
  if ($_GET['amount']) {
  	$amt = $_GET['amount'];
  	$from = $_GET['from'];
  	$to = $_GET['to'];
  	$curl = curl_init();

		curl_setopt_array($curl, array(
		   CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=$to&from=$from&amount=$amt",
		   CURLOPT_HTTPHEADER => array(
		    "Content-Type: text/plain",
		    "apikey: i6GStXgi8dCIy5GHzEsLRyiKvrjHasQK"
		  ),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET"
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$result = json_decode($response,true);
		$final_amt = $result['result'];
		// print_r($final_amt);
		  }
 }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>currency app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
body{
	/*background: black;*/
}
.card1{
  background: rgba( 255, 255, 255, 0.25 );
  box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 4px );
  -webkit-backdrop-filter: blur( 4px );
  border-radius: 10px;
  border: 1px solid rgba( 255, 255, 255, 0.18 );
  /*color: white;*/
  height:500px; 
  padding: 45px 30px;
}
</style>
<body>
<div class="container d-flex justify-content-center" style="height: 100vh;">
    <div class="col-md-5 mt-5 card1">
      <h3 class="text-center">Convert Your Currency</h3>
      <form action="" method="get">
        <div class="form-group">
          <b><label for="amount">Enter amount</label></b>
          <input type="text" class="form-control" id="amount" name="amount" placeholder="enter amount">
        </div>
        <div class="form-group">
        	<b><label for="from">From</label></b>
			<select  class="form-select" name="from" id="from">
				<option value="">Choose a currency from</option>
				<option value="INR">INR</option>
				<option value="EUR">EUR</option>
				<option value="AED">AED</option>
				<option value="GBP">GBP</option>
				<option value="CAD">CAD</option>
			</select>
        </div>
        <div class="form-group">
        	<b><label for="to">To</label></b>
			<select  class="form-select" name="to" id="to">
				<option value="">Choose a currency from</option>
				<option value="INR">INR</option>
				<option value="EUR">EUR</option>
				<option value="AED">AED</option>
				<option value="GBP">GBP</option>
				<option value="CAD">CAD</option>
			</select>
        </div>
        <input type="submit" name="submit" class="btn btn-success mt-2">
      </form>
      <div class="output">
        <?php 
        if ($final_amt) {
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