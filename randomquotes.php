<?php
$api_url = 'https://api.quotable.io/random';
$quotes = json_decode(file_get_contents($api_url));

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Random Quotes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
body{
  background: rgb(0,0,36);
background: linear-gradient(90deg, rgba(0,0,36,1) 0%, rgba(9,90,121,1) 59%, rgba(0,212,255,1) 100%);
}
.card1{
  background: rgba( 255, 255, 255, 0.25 );
  box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 4px );
  -webkit-backdrop-filter: blur( 4px );
  border-radius: 10px;
  border: 1px solid rgba( 255, 255, 255, 0.18 );
  color: white;
  /*height:500px; */
  padding: 20px 10px;
}
</style>
<body>
  <div class="container ">
    <div class="row align-items-center justify-content-center" style="height: 100vh;">
      <div class="col-md-4 ">
        <div class="card card1" >
          <div class="card-body">
            <h4 class="text-center">Quotes</h4>
            <p class="card-text"><?php echo $quotes->content; ?></p>
            <h5 class="card-title"><b>By : </b><?php echo $quotes->author; ?></h5>
             <form action="" method="get">
            <input type="submit" class="btn btn-sm btn-outline-light mt-2" value="Next Quote">
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>