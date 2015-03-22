<html>
	<head>
		<title>Next</title>

	</head>
<body>


<div>Click the button below to get response.</div>

<!-- our form -->
<input type='button' value='Post JSON' id='postJson' />

<!-- where the response will be displayed -->
<div id='response'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
$(document).ready(function(){

	$('#postJson').click(function(){

		// show that something is loading
		$('#response').html("<b>Loading response...</b>");

		/*
		 * 'post_receiver.php' - where you will pass the form data
		 * $(this).serialize() - to easily read form data
		 * function(data){... - data contains the response from post_receiver.php
		 */
		$.post('post/post_receiver.php', {Id:"1",Continue:"true"}, function(data){

			// show the response
			$('#response').html(data);

		}).fail(function() {

			// just in case posting your form failed
			alert( "Posting failed." );

		});

		// to prevent refreshing the whole page page
		return false;

	});
});
</script>

</body>
</html>
