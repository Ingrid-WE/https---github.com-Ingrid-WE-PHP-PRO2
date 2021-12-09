<?php
include 'includes/api.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lampor världen</title>
   
</head>
<body>
 
    <main>
    <div class="card" style="width: 18rem;">
        <img src="lampa1.jpeg" class="card-img-top" alt="...">
        <div id="lampasInfo" class="card-body">
          <p class="card-text" >{route{{$data=>content}}}</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="lampa2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="lampa3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"></p>
        </div>
      </div>
    </main>
</body>
</html>
