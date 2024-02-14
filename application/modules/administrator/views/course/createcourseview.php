
<div class="row">
	<!-- <h5><i class="fa fa-home" aria-hidden="true"></i>
 Manage College</h5> -->
<ul class="nav nav-tabs bordered" role="tablist">
  <li role="presentation" class="active"><a href="#addCourse" aria-controls="home" role="tab" data-toggle="tab"><h5><i class="fa fa-plus-square" aria-hidden="true"></i>
Add Course</h5></a></li>
  <li role="presentation"><a href="#listCourses" aria-controls="profile" role="tab" data-toggle="tab"><h5><i class="fa fa-list" aria-hidden="true"></i>List Courses</h5></a></li>
  <!--<li role="presentation"><a href="#removedpt" aria-controls="messages" role="tab" data-toggle="tab"><h5><i class="fa fa-chain-broken" aria-hidden="true"></i>Remove College</h5></a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="addCourse">


	<!--<h5 style="padding-left:20px;">Create / Add A New College</h5>-->
	<form id="paymentForm" name="paymentForm" action="addCourse" method="post" enctype="multipart/form-data">
			<div class="row jumbotron">
    

	<div class="form-group">
	<div class="col-md-6">
		<label class="control-label" for="course_name">Course Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="course_name" name="course_name" placeholder="College Name" />
		</div>

	</div>
    
	<div class="form-group">
	<div class="col-md-6">
		<label for="course_code" class="control-label">Course Code</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="course_code" name="course_code" placeholder="Course code" />
		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6">
		<label for="course_desc" class="control-label">Course Description</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="course_desc" name="course_desc" placeholder="Course description" />
		</div>
	</div>
    
    <div class="form-group">
	<div class="col-md-6">
		<label for="department_id" class="control-label">Department Name</label>
	</div>
		<div class="col-md-6">
			<select class="form-control" name="department_id" id="department_id">

				<?php 

				$departments_list = $this->db->get('departments')->result();
				print_r($departments_list);

				for ($i=0; $i < count($departments_list); $i++) { 
					// code...
				  echo '<option value="'.$departments_list[$i]->id.'">'.$departments_list[$i]->department_name.'</option>';
				}

				?>
				
			</select> 
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6">
			<label for="course_cost" class="control-label">Course Cost</label>
		</div>
		
		<div class="col-md-6">
			<input type="text" class="form-control" id="course_cost" name="course_cost" placeholder="Cost of the course" />
		</div>
	</div>
    
	<div class="form-group">
		<div class="col-md-6">
			<label for="credithrs" class="col-md-6 control-label">Credit Hours</label>
		</div>
		
		<div class="col-md-6">
			<input type="text" class="form-control" id="credithrs" name="credithrs" placeholder="Credit hours" />
		</div>
	</div> 
 
<!--<div class="row"><span class="glyphicon glyphicon-save"></span>-->
 	<div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
					<i class="fa fa-university" aria-hidden="true"> Add Course</i></button>
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
  <div role="tabpanel" class="tab-pane" id="listCourses">
    <!-- <h5>List Colleges</h5> -->
    <?php 
      $ci =& get_instance();
      $course_list = $this->db->get('courses')->result();
      //print_r($college_list);
     // echo count($college_list);?>

      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('course_name'); ?></th>
                                        <th><?php echo $this->lang->line('course_code'); ?></th>
                                        <th><?php echo $this->lang->line('course_desc'); ?></th>
                                        <th><?php echo $this->lang->line('course_cost'); ?></th>
                                        <th><?php echo $this->lang->line('credithrs'); ?></th><th>
                                        	<?php echo $this->lang->line('course_department'); ?></th>
                                        <th><?php echo $this->lang->line('action'); ?></th>
                                                         
                                    </tr>
                                </thead>
                      
                            <tbody> 
                            	<?php 
                            	for($i = 0; $i < count($course_list); $i++){
                            		try{
                            		//	$dptid = $course_list[$i]->department_id;
                            		//$dptname = $this->getCourseDept($dptid);
                            		//	var_dump($dptname);
	                            	}catch(Exception $ex){
	                            		echo $ex->getMessage();
	                            	}
                            		
                            	echo '<tr>'.
                            		'<td id="id" style="display: none">'.$course_list[$i]->id.'</td>'.
                            		'<td>'.$course_list[$i]->course_name.'</td>'.
                            		'<td>'.$course_list[$i]->course_code.'</td>'.
                            	'<td>'.$course_list[$i]->course_description.'</td>'.
                            		'<td>'.$course_list[$i]->course_cost.'</td>'.
                            		'<td>'.$course_list[$i]->credithrs.'</td>'.
                            		'<td>'.$course_list[$i]->department_id.'</td>'.
                            		
                            		'<td>
                            		<div><a href="#" data-toggle="modal" data-target="#Mymodal" onclick="edit()" style="background-color:#5bc0de; color:#ffffff" id="edit" class="btn btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></div>
                            		<div><a href="#" onclick="del()" id="delete" class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i>Delete</a></div>
                            		</td>'.

                            		'</tr>'; 

                            	} ?>
                            </tbody>
                                 </table>

  </div>
  
  <div role="tabpanel" class="tab-pane" id="removedpt">
    <div class="modal fade" id="Mymodal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button> 
					<h4 class="modal-title">Notification</h4>                                                             
				</div> 
				<div class="modal-body">
					Are you sure you want to continue?
				</div>   
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                               
				</div>
			</div>                                                                       
		</div>                                          
	</div>
 </div>
  <!--  <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
</div>
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- -->
	<script type="text/javascript">

		function edit(){
			//var dt = + #datatable-responsive[0];
			alert('Editting ... ');
			$('#Mymodal').modal('show');
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
