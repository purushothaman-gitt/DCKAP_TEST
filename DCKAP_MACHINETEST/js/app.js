 $(document).ready(function() {
 	var _token = $('input[name="_token"]').val();
 	$(document).on('click', '.btn_delete', function(){  
 		var id=$(this).data("id3");  
 		if(confirm("Are you sure you want to delete this?"))  
 		{  
 			$.ajax({  
 				url:"/category/subtasks/delete",  
 				method:"POST",  
 				data:{id:id, _token:_token},  
 				dataType:"text",  
 				success:function(data){ 
 					location.reload(true);  
 				}  
 			});  
 		}  
 	}); 
 $(".subcatebutton").click(function() {
 		var id = $(this).val();
 		var name=$(this).prop("name");
 		fetch_data();
 		function fetch_data()
 		{
 			$.ajax({
 				url:"/category/details/id",
 				data:{id:id,name:name},
 				dataType:"json",
 				success:function(data)
 				{
 					var html = '<button type="button" class="btn btn-primary modalbutton" data-bs-toggle="modal" data-bs-target="#exampleModalsubcategory" name="'+name+'" value="'+id+'">Add '+name+' Testcase</button>';
 					for(var count=0; count < data.length; count++)
 					{
 						html +='<tr>'
 						html +='<td contenteditable class="column_name" data-column_name="first_name" data-id="'+data[count].id+'">'+data[count].testcasesum+'</td>';
 						html += '<td contenteditable class="column_name" data-column_name="last_name" data-id="'+data[count].id+'">'+data[count].description+'</td>';
 						html += '<td><button type="button" class="btn btn-danger btn-xs btn_delete" data-id3="'+data[count].id+'">Delete</button></td>';
 						html +='<tr>'
 					}
 					$('#fetch').html(html);
 				}
 			});
 		}
 	});
 	$(document).on('click','.modalbutton', function(){  
 		var id = $(".modalbutton").val();
 		var name= $('.modalbutton').prop("name");
 		$(".modal-body2 #categoryid").val(id);
 		$(".modal-bodycat2 #tastcaseval").val(name);
 		$('.category option[value=name]').attr('selected','selected');
 	});






 });