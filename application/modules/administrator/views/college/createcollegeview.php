
<div class="row">
	<!-- <h5><i class="fa fa-home" aria-hidden="true"></i>
 Manage College</h5> -->
<ul class="nav nav-tabs bordered" role="tablist">
  <li role="presentation" class="active"><a href="#addCollege" aria-controls="home" role="tab" data-toggle="tab"><h5><i class="fa fa-plus-square" aria-hidden="true"></i>
Add College</h5></a></li>
  <li role="presentation"><a href="#listdpt" aria-controls="profile" role="tab" data-toggle="tab"><h5><i class="fa fa-list" aria-hidden="true"></i>List Colleges</h5></a></li>
  <!--<li role="presentation"><a href="#removedpt" aria-controls="messages" role="tab" data-toggle="tab"><h5><i class="fa fa-chain-broken" aria-hidden="true"></i>Remove College</h5></a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="addCollege">


	<!--<h5 style="padding-left:20px;">Create / Add A New College</h5>-->
	<form id="paymentForm" name="paymentForm" action="addcollege" method="post" enctype="multipart/form-data">
			<div class="row jumbotron">
    

	<div class="form-group">
	<div class="col-md-6">
		<label class="control-label" for="college_name">College Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="college_name" name="college_name" placeholder="College Name" />
		</div>

	</div>
    
	<div class="form-group">
	<div class="col-md-6">
		<label for="college_code" class="control-label">College Code</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="college_code" name="college_code" placeholder="College code" />
		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6">
		<label for="dean_fname" class="control-label">Dean First Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="dean_fname" name="dean_fname" placeholder="Dean first name" />
		</div>
	</div>
    
    <div class="form-group">
	<div class="col-md-6">
		<label for="dean_lastname" class="control-label">Dean Last Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="dean_lastname" name="dean_lastname" placeholder="Dean last name" />
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6">
			<label for="dean_email" class="control-label">Email Address</label>
		</div>
		
		<div class="col-md-6">
			<input type="text" class="form-control" id="dean_email" name="dean_email" placeholder="Email Address" />
		</div>
	</div>
    
	<div class="form-group">
		<div class="col-md-6">
			<label for="dean_mobile" class="col-md-6 control-label">Phone Number</label>
		</div>
		
		<div class="col-md-6">
			<input type="text" class="form-control" id="dean_mobile" name="dean_mobile" placeholder="Phone Number" />
		</div>
	</div>
 
<!--<div class="row"><span class="glyphicon glyphicon-save"></span>-->
 	<div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
					<i class="fa fa-university" aria-hidden="true"> Add College</i></button>
                </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-danger btn-lg" role="button" name="cancel">
					<i class="fa fa-times" aria-hidden="true"></i> Cancel
                        </button>
   		         </div>
   </div>
 <!--</div>-->
	</form>
	</div>
  </div>
  <div role="tabpanel" class="tab-pane" id="listdpt">
    <!-- <h5>List Colleges</h5> -->
    <?php 
      $ci =& get_instance();
      $college_list = $this->db->get('colleges')->result();
      //print_r($college_list);
     // echo count($college_list);?>

      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('college_name'); ?></th>
                                        <th><?php echo $this->lang->line('college_code'); ?></th>
                                        <th><?php echo $this->lang->line('dean_fullname'); ?></th>
                                        <th><?php echo $this->lang->line('dean_mobile'); ?></th>
                                        <th><?php echo $this->lang->line('dean_email'); ?></th>
                                        <th><?php echo $this->lang->line('action'); ?></th>
                                                         
                                    </tr>
                                </thead>
                      
                            <tbody> 
                            	<?php 
                            	for($i = 0; $i < count($college_list); $i++){
                            	echo '<tr>'.
                            		'<td id="id" style="display: none">'.$college_list[$i]->id.'</td>'.
                            		'<td>'.$college_list[$i]->college_name.'</td>'.
                            		'<td>'.$college_list[$i]->college_code.'</td>'.
                            		'<td>'.$college_list[$i]->dean_fname.' '.$college_list[$i]->dean_lastname.'</td>'.
                            		'<td>'.$college_list[$i]->dean_mobile.'</td>'.
                            		'<td>'.$college_list[$i]->dean_email.'</td>'.
                            		'<td>
                            		<div><a href="#" onclick="edit()" style="background-color:#5bc0de; color:#ffffff" id="edit" class="btn btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></div>
                            		<div><a href="#" onclick="del()" id="delete" class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i>Delete</a></div>
                            		</td>'.

                            		'</tr>';                      		
                            	

                            	} ?>
                            </tbody>
                                 </table>

  </div>
  
  <div role="tabpanel" class="tab-pane" id="removedpt">
    <h5>Remove College</h5>
  </div>
  <div role="tabpanel" class="tab-pane" id="settings">...</div>
</div>
</div>



	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- -->
	<script type="text/javascript">
		function edit(){
			//var dt = + #datatable-responsive[0];
			alert('Editting ... ');
		}

		function del(){
			alert('Deleting ...');
		}

		$(function(){
			('a#edit').click(function(){
			edit();
		});
/**/
		('a#delete').click(function(){
			del();
		})
	});
</script>

<!--</div>container ends here
</body>
</html>-->
