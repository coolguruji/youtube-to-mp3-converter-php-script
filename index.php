<?php

if(isset($_GET['ytlink'])) {
	$id=strip_tags($_GET['ytlink']);
	$id=trim($id);
}

if(!empty($id)) {

	if (strpos($id, 'youtube.com') !== FALSE)
	{
   	$query = parse_url($id, PHP_URL_QUERY);
   	parse_str($query, $params);
	$id = $params['v'];
	} 
	if (strpos($id, 'youtu.be') !== FALSE)
	{
    	$ex = explode('/',$id);
    	$id = end($ex);
	} 
	
$ytresponse = @file_get_contents("https://www.youtube.com/oembed?url=http%3A//youtube.com/watch%3Fv%3D$id&format=json");
$ytinfo = array();
$ytinfo = json_decode($ytresponse, true);
$type = $ytinfo['type'];

 if(isset($type)) {
	
	 // FETCHING DATA FROM SERVER
	 $jsonData = @file_get_contents("http://api.youtube6download.top/api/?id=$id");
	 $links = json_decode($jsonData,TRUE);

    } else { $error = "Error Found!"; }

 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>YouTube to MP3 Converter PHP Script</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .middle {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <script>
  function validatebeforesubmit(thisform) {
  var yout = thisform.ytlink.value;
  if(yout==null || yout == "")
     {
     alert("Please Enter the Youtube Video URL");
     thisform.ytlink.focus();
     return false;
     }
  return true;
  }   
  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
  <br/><br/>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-4 sidenav">
       <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>You can use this place as a widget.</p>
      </div>
    </div>
    
    <div class="col-sm-4 well text-left middle"> 
      <h2>YouTube to Mp3 Converter</h2>
      <br/>
      
	 <form action="" method="GET" onsubmit="return validatebeforesubmit(this)">
	  <div class="form-group">
	    <label for="url">YouTube Video Link</label>
	    <input type="url" class="form-control" name="ytlink" id="url" placeholder="https://www.youtube.com/watch?v=R7xbhKIiw4Y">
	  </div>
	  <button type="submit" value="submit" class="btn btn-success">Convert</button>
	</form>
     
      
<?php

if(!empty($error)) { ?>

<div><br />
<div class="alert alert-warning">
  <strong>Warning!</strong> Something went wrong, Possible reasons!</div>
  <br>
  <ul>
	<li>Check Youtube video URL.</li>
	<li>Maybe That video have been deleted.</li>
	<li>Maybe You have entered something else except URL.</li>
  </ul>
</div>

<?php } else if(!empty($links)) {

echo '<h4>'.$ytinfo['title'].'</h4>
      <p><img src="'.$ytinfo['thumbnail_url'].'" class="img-thumbnail pull-left"  width="150" height="150"/><br/>
      <span class="label label-info pull-right">By  '.$ytinfo['author_name'].'</span><br/>
      <span class="label label-danger pull-right">YouTube</span><br/>
      <a href="'.$links['data']['html'].'" target="_blank" class="btn btn-warning btn-lg pull-right"> <span class="glyphicon glyphicon-download"></span>
 Download Mp3</a></p><br/>';

} else {

echo '<br /><div class="row" style="background:#fff">
	  <div class="col-sm-4">Any Text/ Paragraph or Advertisement that you want.</div>
      </div>';


}
 ?>      
      </div>
    
    <div class="col-sm-4 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>You can use this place as a widget.<br/>
	</p>
      </div>
    </div>
  </div>
</div>
<br/><br/>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
