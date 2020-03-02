$(document).ready(function(){

//To manage city, default city : Delhi

var preferred_city=localStorage.getItem("preferred_city");
var preferred_city_name=localStorage.getItem("preferred_city_name");


if(preferred_city==null){
	preferred_city='delhi-ncr';
	preferred_city_name='Delhi NCR';
	
	localStorage.setItem("preferred_city",preferred_city);
	localStorage.setItem("preferred_city_name",preferred_city_name);
}

//alert(preferred_city);


$('.home_city_name').html(preferred_city_name);
 
$('.select_search_home option[data-slug='+preferred_city+']').attr('selected','selected');


  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?city="+preferred_city;
    	
 ChangeUrl('page', newurl);

////////////
	





	
$('.select_search_home').on('change',function(){
	
 	var city_slug=$(this).find('option:selected').attr("data-slug");
	var city_name=$(this).find('option:selected').attr("data-name");
	
	localStorage.setItem("preferred_city",city_slug);
	localStorage.setItem("preferred_city_name",city_name);
	
	var preferred_city=localStorage.getItem("preferred_city");
	var preferred_city_name=localStorage.getItem("preferred_city_name");

	
	$('.home_city_name').html(preferred_city_name);
	


	//alert(preferred_city);
	//window.location.href = url+"?city="+name;

	//Change Browser URL without reloading 
      var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?city="+preferred_city;
    	
		ChangeUrl('page', newurl);
 		//

	//alert(name);
														  
														  
});	
	
	
	
	
function ChangeUrl(page, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = { Page: page, Url: url };
            history.pushState(obj, obj.Page, obj.Url);
        } else {
            alert("Browser does not support HTML5.");
        }
    }
		


	$("#search-box").keyup(function(){
	
		var keyword=$(this).val();
		if(keyword.length<=1){
			$('#country-list').fadeOut();
			return false;
		}
	
	
		$.ajax({
		type: "GET",
		url: url+"/ajax/search_get_categories",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#fff url({{url('/public/images/ajax-loader.gif')}})    no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			 $("#search-box").css("background","#fff");
		}
		});
	});
	
	
	
	
	
	
	
	
	$('.modal_search_bar').on('click',function(){
		 var screen_size = $(window).width();
		 //alert(screen_size);
		
		 if(screen_size<=768){
			$('#modal_search_bar').modal('show');
		 }
	 
		//$('#modal_search_bar').modal('show');
	
	});
	
	
	
	
	
	$('.home_cat_list_search').on('keyup',function(){
 		
		 var value = $(this).val().toLowerCase();
		$("#home_cat_list_in_modal li").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	
	
	});
	
	 
	
	
	
	
	
	
 
	$('.modal_services_btn').on('click',function(){
		
		$('#modal_services').modal('show');
		
		var cid=$(this).data('cid');
		//alert(cid);
		
		$.each( $('#modal_services').find('.nav-link') ,function(){
			var modal_services_nav_link_cid=$(this).data('modal_services_nav_link_cid');
			
			//alert(modal_services_nav_link_cid);
			
			$(this).removeClass('active');
			$('.modal_services_right').find('.tab-pane').removeClass('active');
			
			//main category
			if(cid==modal_services_nav_link_cid){
				$(this).addClass('active');
			}
			
			//for sub category container
			$('#v-pills-cid-'+cid).addClass('active');
		
		});
	
	
	});



	
	
	
	
	
	
	
	
	
	
  $.validate({
		  ignore: [],
		  form : '#install_app_send_sms',
		  onSuccess:install_app_send_sms,
 		 
	
	});	
  
  
  	function install_app_send_sms(){
						
						var phone=$('.install_app').val();
						
						if(phone==''){
							$('.install_app').addClass('border border-danger');
							return false;
							}
						
						
									$('.install_app_submit_btn').attr('disabled','disabled');
	
										$('.install_app_message').html('').fadeIn();
									//alert('ok');
										var form_action=$('#install_app_send_sms').attr('action');
										
										var form_data=$('#install_app_send_sms').serialize();
										
										$.ajax({
											url:form_action,
											type:"POST",
											data:form_data,
											success:function(output){
											
												 $('.install_app_submit_btn').removeAttr('disabled');
											
											if(output==1){
												$('.install_app_message').html('<div class="alert alert-success"><i  class=" fas fa-check-circle"></i> App install link sent to your mobile no.!</div>').fadeIn();
												
												$('#install_app_send_sms').trigger("reset"); //reset form 
												
												// $('#install_app_send_sms').fadeOut();

												 

												
											}else{
													$('.contact_form_message').html('<div class="alert alert-danger"><i class="text-white fas fa-times-circle"></i>  Some Error !</div>').fadeIn();
											}
											
											
											
											}
											
											
											
										
										});
										
										
										return false;
									
									
									}
	
	
	
	 	/**End for Contact us form   **/	

	
	
	
	
	
	
	
	
	
	
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}