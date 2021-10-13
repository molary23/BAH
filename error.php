<?php require_once (dirname(__FILE__). '/include/header.php');?>
<div class="errorPage">
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<p class="sadface">&#x1F625;</p>
		</div>
		<div class="col-md-7">
			<h1>Oops!</h1>
			<h2>We can't seem to find the page you are looking for.</h2>
			<h3><i class="errorUrl"></i> can't be found.</h3>
			<h4>It happens to the best of us.</h4>
			<p>Here are some helpful links, you can start from there:</p>
			<ul class="errorLink">
				<li><a href="//bahengineeringconsultant.com/">Home</a></li>
<li><a href="//bahengineeringconsultant.com/about">About Us</a></li>				
<li><a href="//bahengineeringconsultant.com/contact">Contact Us</a></li>
<li><a href="//blog.bahengineeringconsultant.com"><i class="fas fa-external-link-alt"></i> Our Blog</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	var url      = window.location.href;
	$(".errorUrl").html(url);
	});
</script>
<?php require_once (dirname(__FILE__). '/include/footer.php');?>