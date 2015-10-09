<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="jqm/jquery.mobile-1.4.0.min.css">
<script src="jqm/jquery-1.11.0.min.js"></script>
<script src="jqm/jquery.mobile-1.4.0.min.js"></script>
<script src="phonegap.js"></script>

</head>
<body>

<div data-role="page" id="p200">
	<div data-role="header">
		<a href="index.html" data-role="button">Home</a>
		<h1>Page title</h1>
		<a href="#" data-role="button" data-rel="back" data-icon="back">Back</a>
	</div>

	<div role="main" class="ui-content">
    	<p>This is an external page
    		<?php 
    		echo "There can be only one *page* in here namely data role=page";
    		echo "This was printed by php but is a standard jqueryMobile page";
    		?>
    	</p>

  	</div>

	<div data-role="footer">
    	<h1>Footer Text Here</h1>
    </div>

</div>







</body>
</html>