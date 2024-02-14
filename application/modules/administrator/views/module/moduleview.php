<?php 
    		$modules = $this->db->get('modules')->result();
    		print_r($modules[0]->module_name);
    	?>
<div class="row">
	<!-- <h5><i class="fa fa-home" aria-hidden="true"></i>
 Manage College</h5> -->
<ul class="nav nav-tabs bordered" role="tablist">
  <li role="presentation" class="active"><a href="#addmod" aria-controls="home" role="tab" data-toggle="tab"><h5><i class="fa fa-plus-square" aria-hidden="true"></i>
Add Module</h5></a></li>
  <li role="presentation"><a href="#modoperation" aria-controls="profile" role="tab" data-toggle="tab"><h5><i class="fa fa-list" aria-hidden="true"></i>Module Operations</h5></a></li>
  <li role="presentation"><a href="#removemod" aria-controls="messages" role="tab" data-toggle="tab"><h5><i class="fa fa-chain-broken" aria-hidden="true"></i>Remove Module</h5></a></li>
  <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="addmod">


	<!--<h5 style="padding-left:20px;">Create / Add A New College</h5>-->
	<form id="addmodForm" name="addmodForm" action="addModule" method="post" enctype="multipart/form-data">
			<div class="row jumbotron">
    

	<div class="form-group">
	<div class="col-md-6">
		<label class="control-label" for="module_name">Module Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="module_name" name="module_name" placeholder="Module Name" />
		</div>

	</div>
    
	<div class="form-group">
	<div class="col-md-6">
		<label for="module_slug" class="control-label">Module Slug</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="module_slug" name="module_slug" placeholder="Module Slug" />
		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6">
		<label for="dean_fname" class="control-label">Status</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="status" name="status" placeholder="Status" />
		</div>
	</div>
    
    <div class="form-group">
	<div class="col-md-6">
		<label for="created_by" class="control-label">Created By</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created By" value="<?php echo $this->session->userdata('role_id'); ?>" />
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6">
			<label for="modified_by" class="control-label">Modified By</label>
		</div>
		
		<div class="col-md-6">
			<input type="text" class="form-control" id="modified_by" name="modified_by" placeholder="Modified By" value="0" />
		</div>
	</div>
 
<!--<div class="row"><span class="glyphicon glyphicon-save"></span>-->
 	<div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
					<i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Add Module</i></button>
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
  <div role="tabpanel" class="tab-pane" id="modoperation">
    
    <form id="operationForm" name="operationForm" action="addOperation" method="post" enctype="multipart/form-data">
    <div class="row jumbotron">
    

  <div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="module_id">Module Name</label>
  </div>
    <div class="col-md-6">

    	<select class="form-control" name="module_id" id="module_id">

    			<?php
    			$modules = $this->db->get('modules')->result();

    			for($i = 0; $i < count($modules); $i++)
	    					{

	    						echo '<option value="'.$modules[$i]->id.'">'.$modules[$i]->module_name.'</option>';
	    					}
    					?>
    					
      </select>
      
    </div>

  </div>
    
  <div class="form-group">
  <div class="col-md-6">
    <label for="operation_name" class="control-label">Operation Name</label>
  </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="operation_name" name="operation_name" placeholder="Operation Name" />
    </div>
  </div>

  <div class="form-group">
  <div class="col-md-6">
    <label for="operation_slug" class="control-label">Operation Slug</label>
  </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="operation_slug" name="operation_slug" placeholder="Normally the module name in lowercase" />
    </div>
  </div>

   <div class="form-group">
	  <div class="col-md-6">
	    <label for="is_view_vissible" class="control-label">Is View Vissible</label>
	  </div>
    <div class="col-md-6">
      <select class="form-control" id="is_view_vissible" name="is_view_vissible">
    		<option value="0">
    			0
    		</option>
    		<option value="1">
    			1
    		</option>
    	</select>
    </div>
  </div>

    <div class="form-group">
	  <div class="col-md-6">
	    <label for="is_add_vissible" class="control-label">Is Add Vissible</label>
	  </div>
    <div class="col-md-6">
      <select class="form-control" id="is_add_vissible" name="is_add_vissible">
    		<option value="0">
    			0
    		</option>
    		<option value="1">
    			1
    		</option>
    	</select>
    </div>
  </div>

  <div class="form-group">
	  <div class="col-md-6">
	    <label for="is_edit_vissible" class="control-label">Is Edit Vissible</label>
	  </div>
    <div class="col-md-6">
      <select class="form-control" id="is_edit_vissible" name="is_edit_vissible">
    		<option value="0">
    			0
    		</option>
    		<option value="1">
    			1
    		</option>
    	</select>
    </div>
  </div>

  <div class="form-group">
	  <div class="col-md-6">
	    <label for="is_delete_vissible" class="control-label">Is Delete Vissible</label>
	  </div>
    <div class="col-md-6">

    	<select class="form-control" id="is_delete_vissible" name="is_delete_vissible">
    		<option value="0">
    			0
    		</option>
    		<option value="1">
    			1
    		</option>
    	</select>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-md-6">
      <label for="status" class="col-md-6 control-label">Status</label>
    </div>
    
    <div class="col-md-6">
      <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="1" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-6">
      <label for="created_by" class="col-md-6 control-label">Created By</label>
    </div>
    
    <div class="col-md-6">
      <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created By" value="<?php echo $this->session->userdata('role_id'); ?>" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-6">
      <label for="modified_by" class="col-md-6 control-label">Modified By</label>
    </div>
    
    <div class="col-md-6">
      <input type="text" class="form-control" id="modified_by" name="modified_by" placeholder="Modified by" value="0" />
    </div>
  </div>
 
<!--<div class="row"><span class="glyphicon glyphicon-save"></span>-->
  <div class="form-group">
          <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
          <i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Add Operation</button>
          </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-danger btn-lg" role="button" name="cancel">
          <i class="fa fa-times" aria-hidden="true"></i>Cancel
                        </button>
               </div>
   </div>
 <!--</div>-->
  </form>


  </div>
  <div role="tabpanel" class="tab-pane" id="removemod">
    <h5>Remove College</h5>
  
  <div role="tabpanel" class="tab-pane" id="removedpt">...</div>
</div>
</div>



	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--</div>container ends here
</body>
</html>-->
