<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/flat-ui.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$("document").ready(function(){
	$('.main-content').delay(900).fadeIn();
	$('.carousel').carousel({
		interval: 3000
	});	
	$('a').click(function(){
		$('body').fadeOut();
		// $('.contact').delay(500).effect('slide',{direction:'right'});
	})
});
</script>