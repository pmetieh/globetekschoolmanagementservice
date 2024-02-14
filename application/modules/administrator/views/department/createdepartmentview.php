<!-- In Bootstrap 3, you can set the active tab by adding the `active` class to the corresponding tab and panel elements. Here's an example:


Nav tabs -->
<div class="row">
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#adddpt" aria-controls="home" role="tab" data-toggle="tab"><h5>Add Departments</h5></a></li>
  <li role="presentation"><a href="#listdpt" aria-controls="profile" role="tab" data-toggle="tab"><h5>List Departments</h5></a></li>
  <!--<li role="presentation"><a href="#removedpt" aria-controls="messages" role="tab" data-toggle="tab"><h5>Remove Department</h5></a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="adddpt">
    <h5 style="padding-left:20px;">Create / Add A New Department</h5>
    <div class="row jumbotron">
      <form id="paymentForm" name="paymentForm" action="addDepartment" method="post" enctype="multipart/form-data">

      <div class="form-group">
              <div class="col-md-6">
              <label for="month" class="col-md-6 control-label">
              College Name
              </label>
              </div>
              
              <div class="col-md-6">
                <!--<div class="col-md-4 pull-left"-->
                <select class="form-control" name="college_id" id="college_id">
                  <?php 

                    $college_list = $this->db->get('colleges')->result();
                    //print_r($college_list);

                    for ($i=0; $i < count($college_list); $i++) { 
                      // code...
                      echo '<option value="'.$college_list[$i]->id.'">'.$college_list[$i]->college_name.'</option>';
                    }

                    ?>
                  </select>
              </div>
            </div>	

      <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="department_name">Department Name</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="department_name" name="department_name" placeholder="Department Name" />
              </div>

            </div>
              
            <div class="form-group">
            <div class="col-md-6">
              <label for="department_code" class="control-label">Department Code</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="department_code" name="department_code" placeholder="Department code" />
              </div>
            </div>

            <div class="form-group">
            <div class="col-md-6">
              <label for="hod_phone" class="control-label">ChairPerson Phone</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_phone" name="hod_phone" placeholder="Head Of Department phone" />
              </div>
            </div>

            <div class="form-group">
            <div class="col-md-6">
              <label for="hod_fname" class="control-label">ChairPerson FirstName</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_fname" name="hod_fname" placeholder="Head Of Department first name" />
              </div>
            </div>

            <div class="form-group">
            <div class="col-md-6">
              <label for="hod_lname" class="control-label">ChairPerson LastName</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_lname" name="hod_lname" placeholder="Head Of Department Last name" />
              </div>
            </div>

             <div class="form-group">
            <div class="col-md-6">
              <label for="hod_email" class="control-label">ChairPerson Email</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_email" name="hod_email" placeholder="ChairPerson email" />
              </div>
            </div>

            

            <!--<div class="form-group">
              <div class="col-md-6">
                <label for="hod_email" class="control-label">Email Address</label>
              </div>
              
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_email" name="hod_email" placeholder="Email Address" />
              </div>
            </div>
              
             <div class="form-group">
              <div class="col-md-6">
                <label for="dean_mobile" class="col-md-6 control-label">Phone Number</label>
              </div>
              
              <div class="col-md-6">
                <input type="text" class="form-control" id="dean_mobile" name="dean_mobile" placeholder="Phone Number" />
              </div>
            </div> -->


            <div class="form-group">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
                  <i class="fa fa-university" aria-hidden="true"> Add Department</i></button>
                        </div>
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-danger btn-lg" role="button" name="cancel">
                  <i class="fa fa-times" aria-hidden="true"></i> Cancel
                                </button>
                       </div>
           </div>

      </form>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane" id="listdpt">
    <h5>List Departments</h5>
     <?php 
      //$ci =& get_instance();
      $dept_list = $this->db->get('departments')->result();
      //print_r($college_list);
     // echo count($college_list);?>

      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('department_name'); ?></th>
                                        <th><?php echo $this->lang->line('department_code'); ?></th>
                                        <th><?php echo $this->lang->line('hod_fullname'); ?></th>
                                        <th><?php echo $this->lang->line('hod_phone'); ?></th>
                                        <th><?php echo $this->lang->line('hod_email'); ?></th>
                                        <th><?php echo $this->lang->line('hod_phone'); ?></th>
                                        <th><?php echo $this->lang->line('action'); ?></th>
                                                         
                                    </tr>
                                </thead>
                      
                            <tbody> 
                            	<?php 
                            	for($i = 0; $i < count($dept_list); $i++){
                            	echo '<tr>'.
                            		'<td id="id" style="display: none">'.$dept_list[$i]->id.'</td>'.
                            		'<td>'.$dept_list[$i]->department_name.'</td>'.
                            		'<td>'.$dept_list[$i]->department_code.'</td>'.
                            		'<td>'.$dept_list[$i]->hod_fname.' '.$dept_list[$i]->dean_lastname.'</td>'.
                            		'<td>'.$dept_list[$i]->hod_lname.'</td>'.
                            		'<td>'.$dept_list[$i]->hod_email.'</td>'.
                            		'<td>'.$dept_list[$i]->hod_phone.'</td>'.
                            		'<td>
                            		<div><a href="#" style="background-color:#5bc0de; color:#ffffff" class="btn btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></div>
                            		<div><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i>Delete</a></div>
                            		</td>'.

                            		'</tr>';                      		
                            	

                            	} ?>
                            </tbody>
                                 </table>
  </div>
  <!-- <div role="tabpanel" class="tab-pane" id="removedpt">
    <h5>Remove Department</h5>
  </div>
  <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
</div>
</div>

