<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var flag = 0;

			$.ajax({
				type: "GET",
				url: "get_data.php",
				data: {
					'offset':0,
					'limit':3
				},
				success: function(data) {
					$('body').append(data);
					flag +=3;
				}
			});

			$(window).scroll(function(){
				if($(window).scrollTop() >= $(document).height() - $(window).height()) {
					$.ajax({
						type: "GET",
						url: "get_data.php",
						data: {
							'offset':flag,
							'limit':3
						},
						success: function(data) {
							$('body').append(data);
							flag +=3;
						}
					});
				}
			});
		});

	</script>
	<style type="text/css">
		.blog-post {
			border-bottom: solid  4px black;
			margin-bottom:20px;
		}

		.blog-post h1 {
			font-size: 40px;
		}

		.blog-post p {
			font-size: 30px;
		}
	</style>
</head>
<body>
	<div class="blog-post">
<!-- 		<h1>Heading</h1>
		<p>Lorem ipsum dolor sit amet, </p> -->

	</div>
</body>
</html>