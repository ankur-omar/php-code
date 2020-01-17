<?php
extract($_POST);// this command is used to collect the data sent by the form
if(isset($sub))//  this function is used to check wether the button is pressed or not
{
    $a = $text1;
    $b = $text2;
    $c = $a + $b;

    echo "<p>The result is: ".$c."</p><br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Number-1</label>
    <input type="text" name="text1" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number-1">
     
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Number-2</label>
    <input type="text" name="text2" required class="form-control" id="exampleInputPassword1" placeholder="Enter Number-2">
  </div>
  
  <button type="submit" name="sub"class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>