<div class="row">
<h3 style="padding-left:20px;">Manage Marking Periods</h3>
<form id="markperiodForm" name="markperiodForm" action="createMarkingPeriod" method="post" enctype="multipart/form-data">

<div class="row jumbotron">
    <div class="form-group">
		<label for="schoolId" class="col-md-6 control-label">School Name</label>
		<div class="col-md-6">
            <select class="form-control" id="schoolId" name="schoolId">
			<?php
          $schools = $this->db->get('schools')->result();

          for($i = 0; $i < count($schools); $i++)
                {
                  echo '<option value="'.$schools[$i]->id.'">'.$schools[$i]->school_name.'</option>';
                }
          ?>
            </select>
			<!--<input type="text" class="form-control" id="schoolId" name="schoolId" placeholder="Fisrt Name" />-->
		</div>
	</div>

    <div class="form-group">
		<label for="customerLastname" class="col-md-6 control-label">Marking Period Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="markingperiodname" name="markingperiodname" placeholder="Marking Period Name" />
		</div>
	</div>

	

	<br/>
	<br/>

<!--</div>-->
 <div class="row">
 	<div class="form-group">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
					<i class="fa fa-floppy-o" aria-hidden="true"><b> Save</b></i></button>
                </div>
                <div class="col-lg-4">
                    <button type="reset" class="btn btn-danger btn-lg" role="button" name="cancel">
					<i class="fa fa-times" aria-hidden="true"></i> <b>Cancel</b></button>
   		         </div>
   </div>
 </div>
</form>
</div>