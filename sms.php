<!DOCTYPE html>
<?php

if(isset($_REQUEST['send']))
{
    $mobile='91'.$_REQUEST['mobile'];
    $message=$_REQUEST['message'];

    echo $_REQUEST['mobile'];

    // Account details
	$apiKey = urlencode('NTg0ZjUyMzE2ZjY4Nzc0OTM1NDc2OTU5NzE2NjUxNGE=');
	
	// Message details
	$numbers = array($mobile);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($message);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Sending</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <h2 class="text-center">Send SMS</h2>
        <form class="form-horizontal" action="">

            <div class="form-group">
                <label class="control-label col-sm-2" for="mobile">Mobile Number: </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="Mobile" name="mobile" placeholder="Enter mobile number">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="message">Message: </label>
                <div class="col-sm-10">
                    <textarea name="message" class="form-control" name="message" placeholder="Enter your Message here.."> </textarea>
                </div>
            </div>
            <br/>
            <div class="form-group">
                <div class="control-label col-sm-2 col-sm-10">
                    <button type="submit" name="send" value="send" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>