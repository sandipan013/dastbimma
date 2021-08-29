/**
	Custom JS
	
	1. Superslides Slider
	2. Fixed Top Menubar
	3. Wow animation
	4. SCROLL TOP BUTTON
	5. PRELOADER
	6. MENU SCROLL
	7. MOBILE MENU CLOSE
 	8. FREE CONSULTATION FORM
	
**/


jQuery(function($){

	/* ----------------------------------------------------------- */
	/*  1. Superslides Slider
	 /* ----------------------------------------------------------- */
	jQuery('#slides').superslides({
		animation: 'slide',
		play: '20000'
	});



	/* ----------------------------------------------------------- */
	/*  2. Fixed Top Menubar
	/* ----------------------------------------------------------- */

	// For fixed top bar
       $(window).scroll(function(){
        if($(window).scrollTop() >100 /*or $(window).height()*/){
           // $(".navbar-fixed-top").addClass('past-main');
        }
    else{    	
     // $(".navbar-fixed-top").removeClass('past-main');
      }
    });



	/* ----------------------------------------------------------- */
	/*  3. Wow smooth animation
	/* ----------------------------------------------------------- */

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();



	/* ----------------------------------------------------------- */
	/*  4. SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */

	//Check to see if the window is top if not then display button

	  $(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      $('.scrollToTop').fadeIn();
	    } else {
	      $('.scrollToTop').fadeOut();
	    }
	  });
	   
	  //Click event to scroll to top

	  $('.scrollToTop').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	    return false;
	  });


	/* ----------------------------------------------------------- */
	/*  5. PRELOADER
	/* ----------------------------------------------------------- */ 

	  jQuery(window).load(function() { // makes sure the whole site is loaded
       // $('#status').fadeOut(); // will first fade out the loading animation
       // $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
       //$('body').delay(1).css({'overflow':'visible'});
    })


	/* ----------------------------------------------------------- */
	/*  7. MOBILE MENU ACTIVE CLOSE
	/* ----------------------------------------------------------- */ 

	$('.navbar-nav').on('click', 'li a', function() {
	  $('.navbar-collapse').collapse('hide');
	});


	/* ----------------------------------------------------------- */
	/*  8. FREE CONSULTATION FORM
	 /* ----------------------------------------------------------- */
	$("#mailSubmit").on('click', function() {
		$(".error").hide();
		$(".first-name-help-block").hide();
		$(".last-name-help-block").hide();
		$(".email-help-block").hide();
		$(".phone-help-block").hide();

		var firstname = $("#firstName").val();
		var lastname = $("#lastName").val();
		var compName = $("#compName").val();
		var email = $("#emailAddr").val();
		var phoneNo = $("#phoneNo").val();
		var countryName = $("#countryName").val();
		var message = $("#comments").val();

		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

		if(firstname == '') {
			$(".first-name-help-block").empty();
			$(".first-name-help-block").append("Please enter your first name.");
			$(".first-name-help-block").show();
			document.getElementById("firstName").focus();
		} else if(lastname == '') {
			$(".last-name-help-block").empty();
			$(".last-name-help-block").append("Please enter your last name.");
			$(".last-name-help-block").show();
			document.getElementById("lastName").focus();
		} else if(email == '') {
			$(".email-help-block").empty();
			$(".email-help-block").append("Please enter your e-mail.");
			$(".email-help-block").show();
			document.getElementById("emailAddr").focus();
		} else if (!email.match(mailformat)) {
			$(".email-help-block").empty();
			$(".email-help-block").append("You have entered an invalid e-mail.");
			$(".email-help-block").show();
			document.getElementById("emailAddr").focus();
		} else if(phoneNo == '') {
			$(".phone-help-block").empty();
			$(".phone-help-block").append("Please enter your phone number.");
			$(".phone-help-block").show();
			document.getElementById("phoneNo").focus();
		} else if (!phoneNo.match(phoneformat)) {
			$(".phone-help-block").empty();
			$(".phone-help-block").append("You have entered an invalid phone number.");
			$(".phone-help-block").show();
			document.getElementById("phoneNo").focus();
		} else {
			var dataString = 'email=' + email + '&firstname='+ firstname +'&lastname=' + lastname +'&compname=' + compName +'&phoneno=' + phoneNo +'&countryname=' + countryName   +'&comments=' + message ;
			//------------------------
			$('.showLoading').show();
			$("#mailSubmit").addClass("disabled");

			//---------------------------
			//alert(dataString);
			$.ajax({
				type: "POST",
				url: "php/sendmail.php",
				data: dataString,
				success: function(data){
					//alert("success");
					$('.showLoading').hide();
					$("#mailSubmit").removeClass("disabled");
					//alert(data);
					$('.Scedule-Container,.Forms-Overlay-Container').hide();
					$(".Scedule-msg").empty();
					$(".Scedule-msg").append(data);
					$(".Scedule-msg").show();
					setTimeout(function(){
						$(".OverLay-Container,.Scedule-msg").hide();
						$('body').removeClass('body-OverFlow');
					}, 6000);

					document.getElementById("firstName").value="";
					document.getElementById("lastName").value="";
					document.getElementById("emailAddr").value="";
					document.getElementById("phoneNo").value="";
					document.getElementById("compName").value="";
					document.getElementById("comments").value="";
				}
			});
		}
		return false;
	});



	// const teams = document.querySelectorAll('.team');
	//
	// function transition() {
	// 	if (this.classList.contains('active')) {
	// 		this.classList.remove('active')
	// 	} else {
	// 		this.classList.add('active');
	// 	}
	// }
	//
	// teams.forEach(team => team.addEventListener('click', transition));

});