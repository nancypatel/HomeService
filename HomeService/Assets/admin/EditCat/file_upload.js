 $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }








//Remove Image



	$('.remove').on('click',function(){
		var is_remove=$(this).data('is_remove');
		var table=$(this).data('table');
 		var id_name=$(this).data('id_name');
		var id=$(this).data('id');
		var column=$(this).data('column');
		
		
	 		
		
		var data="is_remove="+is_remove+"&table="+table+"&id_name="+id_name+"&id="+id+"&column="+column;

		$.ajax({

			url:url+"/admin/ajax/remove_image",
			type:"get",
			data:data,
			success:function(output){
				
				if(output==1){
					 
					
					$('.image_'+table+'_'+column+'_'+id).fadeOut('slow');
					
					//alert('deleted !');
				}else{
					alert('Some error deleting the image !');
				}

			}

		});

	});
	
	
	
	 
	
	
	

















});