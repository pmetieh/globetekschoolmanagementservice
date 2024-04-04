
<div class="row"style="padding-left: 30px;">
<div style="margin:auto;">
<h1><?php
 echo "Generate Student Report Card";
 $query = "";
?></h1>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="school_id">School Name</label>
  </div>
    <div class="col-md-6">

      <select class="form-control" name="school_id" id="school_id">

        <!--<option value="1">Tubman High</option>
        <option value="2">DTweh High</option>-->
          <?php
          $schools = $this->db->get('schools')->result();

          for($i = 0; $i < count($schools); $i++)
                {
                  echo '<option value="'.$schools[$i]->id.'">'.$schools[$i]->school_name.'</option>';
                }
          ?>
              
      </select>
      
    </div>

  </div>

  <div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="class_id">Class  Name</label>
  </div>
    <div class="col-md-6">
      <select class="form-control" name="class_id" id="class_id">

          <?php
          /*$classes = $this->db->get('classes')->result();

          for($i = 0; $i < count($classes); $i++)
                {

                  echo '<option value="'.$classes[$i]->id.'">'.$classes[$i]->name.'</option>';
                }*/
              ?>
              
      </select>
    </div>

  </div>

  <div class="form-group">
    <div class="col-md-6">
      <label class="control-label" for="section_id">Section  Name</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="section_id" id="section_id">
        
                        
      </select>
    </div>

  </div>
  
	<div class="form-group">
	<div class="col-md-6">
		<label class="control-label" for="subject_id">Subject  Name</label>
	</div>
		<div class="col-md-6">
			<select class="form-control" name="subject_id" id="subject_id">

          <?php
          $subjects = $this->db->get('subjects')->result();

          for($i = 0; $i < count($subjects); $i++)
                {
                  echo '<option value="'.$subjects[$i]->id.'">'.$subjects[$i]->name.'</option>';
                }
              ?>
              
      </select>
		</div>

	</div>
    <div class="form-group">
	<div class="col-md-6">
		<label class="control-label" for="student_id">Student Name</label>
	</div>
		<div class="col-md-6">
			<select class="form-control" name="student_id" id="student_id">
          <?php
         
              ?>
              
      </select>
		</div>

	</div>
    <div class="form-group">
                <div class="col-md-6">
                
                    <button type="submit" class="btn btn-success btn-lg" role="button"  id="submit"  name="submit">
                    <i class="fa fa-book fa-fw" aria-hidden="true"></i><span>Generate Report Card</span>
					</button>
                </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-danger btn-lg" role="button" name="cancel">
					<i class="fa fa-times" aria-hidden="true"></i> Cancel
                        </button>
   		         </div>
   </div>

    
                
    </div>
    <script 
