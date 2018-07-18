<script>
	
//Insert Database
 $(document).ready(function(){
                $("#add-data").click(function(){
           		$('#studentModal').modal('show');
				//$('#student_form')[0].reset();
				$('#form_output').html('');
				$('#button_action').val('insert');
				$('#action').val('Add');
                });


		$('#student_form').on('submit', function(event){
			event.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
					url: "{{ route('members.do-create')}}",
					method:"POST",
					data:form_data,
					dataType:"json",
					success: function(data)
					{
						if(data.error.length >0)
						{
							var error_html = '';
							for(var count = 0; count < data.error.length;count++)
							{
								error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
							}
							$('#form_output').html(error_html);
						} else
						{
							$('#form_output').html(data.success);
							$('#student_form')[0].reset();
							$('#action').val('add');
							$('.modal-title').text('Add Data');
							$('#button_action').val('insert');
							$('#student_table').DataTable().ajax.reload();
						}
					}
			});
		});


});
</script>