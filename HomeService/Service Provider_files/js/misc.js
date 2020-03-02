$(document).ready(function(){
						   

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 15) {
        $('.logo_with_navbar').addClass('bg_white_in_mobile');
    } else {
        $('.logo_with_navbar').removeClass('bg_white_in_mobile');
    }
});

						   
	
//For for main menu	
var height=$( document ).height();

//alert(height);

$('[data-toggle="slide-collapse"],.menu_outside_bg').on('click', function() {
	
	
  $('.menu_outside_bg').css({"height":height+"px"}).fadeToggle();
  
  $navMenuCont = $($(this).data('target'));
  
  //alert($navMenuCont);
  
  $navMenuCont.animate({
    'width': 'toggle'
  }, 350);
  $(".menu-overlay").fadeIn('fast');

});
	
	
$(".menu-overlay").click(function(event) {
  $(".navbar-toggle").trigger("click");
  $(".menu-overlay").fadeOut('fast');
});


 
//End for main menu

	
	
	
	

	
	$('#update_on_whatsapp .form-check-label').on('click',function(){
		
		//delay a bit to work because the toggleinput jquery plugin also changes radio button value
 		setTimeout(function(){
							
			return update_on_whatsapp();
		
		},1000);
												 
	});
	




$('.btn_right_fixed').on('click',function(){
	$('.btn_right_fixed_label').hide();	
	$('.btn_right_fixed_no').show();	
										  
});



$('.home_banner_link').on('click',function(){
	 var banner_link=$(this).data('banner_link');
	 //alert(banner_link);
		window.location.href=banner_link								  
});






    $.validate({
		  ignore: [],
		  form : '#review',
		  onSuccess:review_submit,
		  validateHiddenInputs:true,
		 
	
	});
	
	
	
	function review_submit(){
			var data=$('#review').serialize();
			$('.submit_review').prop('disabled',true);
			
			var action=$('#review').attr('action');
	
			$.ajax({
					url:action,
					type:'POST',
					data:data,
					success:function(output){
							 
								if(output==1){
									 
									$('.review_msg').html('<div class="alert alert-success">Thanks for your review. It is submitted for approval !</div>');
									$('.submit_review').prop('disabled',false);
									$('#review').fadeOut('slow');
									 
								}						  
						
							}
				
				});
			
					
		return false;
	}
	









/**   Contact us form   **/	

	
	
	
  $.validate({
		  ignore: [],
		  form : '#contact_us',
		  onSuccess:contact_us,
 		 
	
	});	
  
  
  	function contact_us(){
						
									$('#submit_btn_contact').attr('disabled','disabled');
	
										$('.contact_form_message').html('').fadeIn();
									//alert('ok');
										var form_action=$('#contact_us').attr('action');
										
										var form_data=$('#contact_us').serialize();
										
										$.ajax({
											url:form_action,
											type:"POST",
											data:form_data,
											success:function(output){
											
												 $('#submit_btn_contact').removeAttr('disabled');
											
											if(output==1){
												$('.contact_form_message').html('<div class="alert alert-success"><i  class=" fas fa-check-circle"></i>  Thanks for your enquiry , We will get back to you soon !</div>').fadeIn();
												
												$('#contact_us').trigger("reset"); //reset form 
												
												 $('#contact_us').fadeOut();

												 

												
											}else{
													$('.contact_form_message').html('<div class="alert alert-danger"><i class="text-white fas fa-times-circle"></i>  Some Error !</div>').fadeIn();
											}
											
											
											
											}
											
											
											
										
										});
										
										
										return false;
									
									
									}
	
	
	
	 	/**End for Contact us form   **/	

	
	









});





	
function service_page(cat_slug){
	
	var preferred_city=localStorage.getItem("preferred_city");

	//alert(preferred_city);
	
	window.location.href = url+"/service/"+preferred_city+"/"+cat_slug;
	return false;
}	




function update_on_whatsapp(){
	 
	 var update_on_whatsapp=$('input[name=update_on_whatsapp]:checked').val();
	 var id=$('input[name=id]').val();
	 var token=$('input[name=_token]').val();
 	
	var loader='<img src="'+url+'/public/images/ajax-loader-2.gif">'; 
	
	//alert(update_on_whatsapp);
	//return false;
	
	$('.loader').html(loader).show();
	
	//var form="id="+id+"&update_on_whatsapp="+update_on_whatsapp+"&_token="+token;
	var form=$('#update_on_whatsapp').serialize();
	var form_action=$('#update_on_whatsapp').prop('action');
	
	
  	$.ajax({
			url:form_action,
			type:'POST',
			data:form,
			success:function(output){
						 
  						if(output==1){  
						
							$('.loader').fadeOut();
							
 							
							}else{
 							//alert("Some error !");
 							   
 
						 } 
				
					}
		
		}); 
		
	
	return false;
}