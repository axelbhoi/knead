
	
	<footer>

		<div class="modal fade" id = "user-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">New user</h4>
		      </div>
		      <div class="modal-body">
		      	
				<form role="form" method = "POST" action = "" id = "user-form">
				  <div class="form-group">
				    <label class="control-label" >Username</label>
				    <input type="text" class="form-control" id="account-username" name = "account-username" placeholder="Username">
				  </div>

				  <div class="form-group">
				    <label class="control-label" >Password</label>
				    <input type="password" class="form-control" id="account-password" name = "account-password" placeholder="Password">
				  </div>

				</form>

		      </div>
		      <div class="modal-footer">
		      	<a class = "btn btn-primary" id = "user-save" href = "#">Save</a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->	


		<div class="modal fade" id = "password-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">New Password</h4>
		      </div>
		      <div class="modal-body">
		      	
				<form role="form" method = "POST" action = "<?php echo base_url();?>dashboard/new_password" id = "password-form">
				  <div class="form-group">
				    <label class="control-label" >Password</label>
				    <input type="password" class="form-control" id="new-password" name = "new-password" placeholder="Password">
				  </div>


				</form>

		      </div>
		      <div class="modal-footer">
		      	<a class = "btn btn-primary" id = "password-save" href = "#">Save</a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->	

	</footer>

	<script type = "text/javascript">
		var base_url = "<?php echo base_url()?>";

		$(document).ready(function(){

			$('#add-user-btn').on('click',function(e){
				e.preventDefault();

				$('#user-modal').modal('show');
			});

			$('#user-save').on('click',function(e){
				e.preventDefault();

				var username = $('#account-username').val();
				var password = $('#account-password').val();

				if( $('#account-username').val() == "" && $('#account-password').val() == "" )
				{
					alert('all fields are required');
				}
				else
				{
					
					$.ajax({
						type: "POST",
						url: base_url + "dashboard/new_account",
						data: {
								username:username,
								password:password
							},
						asyc: false,
						cache: false,
			            beforeSend : function (){
			            	$.blockUI({ message: "<h5><img src='"+base_url+"img/busy.gif' /> Just a moment...</h5>" });
			            },				
						success:
							function(data)
							{	
								if(data)
								{
									$('#user-modal').modal('hide');
									$('#account-password').val("");
									$('#account-username').val("");
								}
								else
								{
									alert('Username is already taken');
								}
							},
			            complete : function (){
			                $.unblockUI();
			            }

					});						
				}
			});

			$('#password-btn').on('click',function(e){
				e.preventDefault();

				$('#password-modal').modal('show');
			});

			$('#password-save').on('click',function(e){
				e.preventDefault();
				if($('#new-password').val() == "")
				{
					alert('field is required')
				}
				else
				{
					$('#password-form').submit();
				}
			});

		});

	</script>



</div>