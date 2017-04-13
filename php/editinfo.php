<html lang="en">
<head>
  <title>SIH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <ul class="nav nav-pills">
    <li><a data-toggle="pill" href="#collegeinfo">College Info</a></li>
    <li><a data-toggle="pill" href="#courseinfo">Course Info</a></li>
    <li><a data-toggle="pill" href="#ratinginfo">Rating Info</a></li>
  </ul><br><br>
  
  <div class="tab-content">    

	   
    <div id="collegeinfo" class="tab-pane fade">
		<form class="form-horizontal">
		<div class="btn-group btn-group-justified">
   <b><I>Edit info</I></b>

  </div>
  	<br>
		<?php
		include 'dd.php';
		?>
		
		 <div class="form-group">
			<label class="control-label col-sm-2" for="ITIcode">ITI Code:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="ITIcode" name="ITIcode">
			</div>
			<label class="control-label col-sm-2" for="displayname">Display name:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="displayname" name="displayname">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="ITIname">ITI Name:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="ITIname" name="ITIname">
			</div>
			<label class="control-label col-sm-2" for="Location">Location:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="Location" name="Location">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="industrialtype">Industrial type:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="industrialtype" name="industrialtype">
			</div>
			<label class="control-label col-sm-2" for="dateofestablishment">Date Of Establishment:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="dateofestablishment" name="dateofestablishment">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="weburl">Web url:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="weburl" name="weburl">
			</div>
			<label class="control-label col-sm-2" for="lastdateupdatedate">Last date Update date:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="lastdateupdatedate" name="lastdateupdatedate">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="addresss">Address:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="address" name="address">
			</div>
			<label class="control-label col-sm-2" for="State">State:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="State" name="State">
			</div>
		  </div>
		     <div class="form-group">
			<label class="control-label col-sm-2" for="district">District:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="district" name="district">
			</div>
			<label class="control-label col-sm-2" for="contactphonenumber">Contact phone number:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="contactphonenumber" name="contactphonenumber">
			</div>
		  </div>

		     <div class="form-group">
			<label class="control-label col-sm-2" for="pincode">Pincode:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="pincode" name="pincode">
			</div>
			<label class="control-label col-sm-2" for="SPIU name">SPIU name:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="SPIU name" name="SPIU name">
			</div>

		  </div>

                        <div class="form-group">
			<label class="control-label col-sm-2" for="contactemail">Contact email:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="contactemail" name="contactemail">
			</div>
			<label class="control-label col-sm-2" for="affiliationstatus">Affiliation Status:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="affiliationstatus" name="affiliationstatus">
			</div>
		  </div>

                          <div class="form-group">
			<label class="control-label col-sm-2" for="Rating">Rating:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="Rating" name="Rating">
			</div>
		  </div>



		   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="Submit" class="btn btn-default">Submit </button>
			</div>
		  </div>
		</form>
    </div>
	

    </div>
    
    
  </div>
</body>
</html>