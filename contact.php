<?php require_once (dirname(__FILE__). '/include/header.php');?>
<div class="contact_page">
<div id="alert_top" class="alert alert-success" align="center">
<h4>Message Sent!</h4>
</div>	
<div class="container" id="contact_top">	
<h1 id="page_header">Get in touch with Us</h1>
<h2>We are always available to Help.</h2>
<h4>We would Love to hear from you</h4>
</div>
<div class="container">
<div class="address">
<div class="row">
<div class="col-md-4 col-sm-4 addr" id="addressPhone">
<i class="fa fa-phone fa-5x" aria-hidden="true"></i>
<address><a href="tel:+2348029409798">+234 (0) 8029409798</a></address>
<address><a href="tel:+2348052429800">+234 (0) 8052429800</a></address>				
</div>
<div class="col-md-4 col-sm-4 addr" id="addressEmail">
	<i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
<address><a href="mailto:bahengineeringconsultant@yahoo.com">bahengineeringconsultant@yahoo.com</a></address>
<address><a href="mailto:bahengineeringconsultant@gmail.com">bahengineeringconsultant@gmail.com</a></address>
</div>
<div class="col-md-4 col-sm-4 addr" id="contact_marker">
<i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
<address> No 2, Akinremi Adekunle Crescent<br/>
off KM 51/52 Lagos-Abeokuta expressway,<br/>
Abule-Oke (Beside Aucco Filling station)<br/>
Ogun state, Nigeria</address>
</div>
</div>
</div>
</div>

<div class="contact_content">
<div class="container-fluid">
<div class="row">
<div class="col-md-7 col-xs-12" id="formContact">
<form method="post" action="" id="contactForm">
<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="name" name="name" maxlength="30" required value="" placeholder="Chukwuemeka Chioma" />
</div>

<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="phone" name="phone" placeholder="+2348012345678" maxlength="15" required value=""/>
</div>


<div class="col-md-6 col-xs-12">
<input type="email" class="form-control" id="email" name="email" maxlength="50" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please use standard email format" placeholder="you@example.com" value=""/>
</div>

<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" maxlength="20" required value=""/>
</div>

<div class="col-xs-12">
<textarea class="form-control" id="message" name="message" maxlength="150" required placeholder="Your Message"></textarea>
</div>

		<div class="col-md-offset-6 col-md-6 col-xs-12" >
<button type="submit" id="sub" name="contact_us" class="btn btn-default" > Send  &nbsp;<span id="submitted"><i class="glyphicon glyphicon-send"></i></span></button>
</div>
</form>
</div>
	<div class="col-md-5 col-xs-12">
		<div class="googlemap">
			<div id="googlemap">
			
		</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<style type="text/css">
</style>
<script type="text/javascript">
	function initMap() {
  // The location of Uluru
  var uluru = {lat: 6.753063634315678, lng: 3.215414771984797};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('googlemap'), {zoom: 12, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
	$(document).ready(function(){
		$('#contactForm').on('submit', function(e){
			var data = new FormData(this);
			e.preventDefault();
			var name = $('#name').val().trim(),
			phone = $('#phone').val().trim(),
			email = $('#email').val().trim(),
			subject = $('#subject').val().trim(),
			message = $('#message').val().trim(); 

			if (name == '') {
				alert("Kindly enter your name");
			}else if ((phone == '') || !$.isNumeric(phone) || (phone.length <= 10)) {
				alert('Kindly enter your Phone Number');
			}else if (email == '') {
				alert("Kindly enter your email");
			}else if (subject == '') {
				alert("Kindly enter the mail Subject");
			}else if (message == '') {
				alert("Kindly enter the message");
			}else{
			$.ajax({
				type: "POST",
                    url: "others/send.php",
                    cache: false,
                    timeout: 50000,
                    data: data,
                    dataType: 'json',
                    processData: false,
					contentType: false,
					cache: false,
                    beforeSend: function(){ 
                    $("#submitted").html('<i class="fa fa-spinner fa-sm fa-spin"></i>');
                    },
                    complete: function(){ 
                    	$("#submitted").html('<i class="glyphicon glyphicon-send"></i>');
                    },
                    success: function(data){
                    	if (data == 2) {
                    	$('#contactForm').trigger('reset');
						$('#alert_top').slideDown(1000);
						setTimeout(function(){
							$('#alert_top').slideUp();
						},5000);
                    	}else{
                    	alert('Oops... Somthing went wrong, try after some time.');	
                    	}
                    },
                    error: function(jqXHR, textStatus, errorThrown){

                    }
			});
			}
		});
$('#title').html('Contact BAH Engineering Consultant');		
	});
</script>
<?php require_once (dirname(__FILE__). '/include/footer.php');?>