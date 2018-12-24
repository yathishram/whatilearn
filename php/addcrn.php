<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>what i learn</title>
    <link href="https://fonts.googleapis.com/css?family=K2D:800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="button1.css">
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html">WIL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://learning.linkedin.com/blog/top-skills/the-skills-companies-need-most-in-2018--and-the-courses-to-get-t">Top Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.html">FAQ</a>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
      </div>
    </nav>
    <div id="particles-js">
        <div class="btext">
<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"dbms1");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $cid=$_POST['cid'];
  $con_no=$_POST['con_no'];
 if($cid!="" && $con_no!="")
   {
     $sql3="insert into create_content values('$cid', '$con_no')";   // student is the table name
     if ($con->query($sql3) == TRUE) {
         echo "<p> <font face='Roboto Mono', monospace>New record created successfully</font></p>";
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }
     }

$con->close();
}
?>
<p align=right>
  <button onclick="location.href='createcontent.html'" class="btn btn-1 btn-1b">Next</button>
</p>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
particlesJS.load('particles-js','particles.json',
function(){
  console.log('Its working')
})
</script>
</body>
</html>
