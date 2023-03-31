<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codestar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="main.js"></script> 
</head>
<body onload="LoadData()">

<div class="container">
  <h1>Simple Chat System</h1>
  <form name="frm1" method="post">
	<div class="form-group">
	  <label for="usr">Name:</label>
	  <input type="text" class="form-control" name="name">
	</div>
    <div class="form-group">
      <label for="comment">Message:</label>
      <textarea class="form-control" rows="5" name="msg"></textarea>
    </div>
	 <input type="button" name="save" class="btn btn-primary" value="Send" id="butsave">
  </form>
</div>
  
  <hr>

<div class="container">
	
	<h2>Messages</h2>           
	<table class="table table-dark table-striped" id="MyTable">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
  
</body>
</html>