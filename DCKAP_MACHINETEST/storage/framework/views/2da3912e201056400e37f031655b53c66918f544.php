<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="/js/app.js"></script>
	<!-- Custom styles for this template -->
	<link href="css/styles.css" rel="stylesheet">
	<title>DCKAP_TEST</title>
</head>
<body>
	<?php echo $__env->yieldContent('content'); ?>
	<!--Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$('.sub-menu ul').hide();
		$(".sub-menu a").click(function () {
			$(this).parent(".sub-menu").children("ul").slideToggle("100");
			$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
		});

		var toggler = document.getElementsByClassName("caret");
		var i;

		for (i = 0; i < toggler.length; i++) {
			toggler[i].addEventListener("click", function() {
				this.parentElement.querySelector(".nested").classList.toggle("active");
				this.classList.toggle("caret-down");
			});
		}
	</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\DCKAP_MACHINETEST\resources\views/layouts/layout.blade.php ENDPATH**/ ?>