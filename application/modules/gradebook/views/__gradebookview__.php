<div class="row">
<ul class="nav nav-tabs bordered" role="tablist">
  <li role="presentation" class="active"><a href="#addgradebookitem" aria-controls="home" role="tab" data-toggle="tab"><h5><i class="fa fa-plus-square" aria-hidden="true"></i>
Setup Subject Gradebook</h5></a></li>
  <li role="presentation"><a href="#entergrades" aria-controls="profile" role="tab" data-toggle="tab"><h5><i class="fa fa-list" aria-hidden="true"></i>Enter Grades</h5></a></li>
  <li role="presentation"><a href="#removemod" aria-controls="messages" role="tab" data-toggle="tab"><h5><i class="fa fa-chain-broken" aria-hidden="true"></i>Remove Module</h5></a></li>
  <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="addgradebookitem">


	<!--<h5 style="padding-left:20px;">Create / Add A New College</h5>-->
	<form id="addgradeditemForm" name="addgradeditemForm" action="createGradeBookItem" method="post" enctype="multipart/form-data">
			<div class="row jumbotron">
    
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
		<label for="graded_item_name" class="control-label">Graded Item Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="graded_item_name" name="graded_item_name" placeholder="Graded Item Name" />
		</div>
	</div>
	<div class="form-group">
	<div class="col-md-6">
		<label for="graded_item_type" class="control-label">Graded Item Type</label>
	</div>
		<div class="col-md-6">
			<!-- <input type="text" class="form-control" id="graded_item_type" name="graded_item_type" placeholder="Graded Item Type e.g Assignment" /> -->

      <select class="form-control" name="graded_item_type" id="graded_item_type">
        <option  value="assignment">Assignment</option>
        <option  value="quiz">Quiz</option>
        <option  value="midtermexam">Midterm Exam</option>
        <option  value="finalexam">Final Exam</option>
      </select>  


		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6">
		<label for="max_grade" class="control-label">Max Grade</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="max_grade" name="max_grade" placeholder="Maximum grade allowed for this activity" />
		</div>
	</div>

  <div class="form-group">
  <div class="col-md-6">
    <label for="max_grade" class="control-label">Min Grade</label>
  </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="min_grade" name="min_grade" placeholder="Minimum grade allowed for this activity" />
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

	<!-- <div class="form-group">
		<div class="col-md-6">
			<label for="modified_by" class="control-label">Modified By</label>
		</div>
		
		<div class="col-md-6">
			<input type="text" class="form-control" id="modified_by" name="modified_by" placeholder="Modified By" value="0" />
		</div>
	</div> -->
 
<!--<div class="row"><span class="glyphicon glyphicon-save"></span>-->
 	<div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="btnsubmit"  name="submit">
					<i class="fa fa-book fa-fw" aria-hidden="true">   
          &nbsp; Add Graded Item</i></button>
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
  <div role="tabpanel" class="tab-pane" id="entergrades">
    
    <form id="operationForm" name="operationForm" action="addOperation" method="post" enctype="multipart/form-data">
    <div class="row jumbotron">
    
    <div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="module_id">School Name</label>
  </div>
    <div class="col-md-6">

      <select class="form-control" name="school_id" id="school_id">

          <?php
          $schools = $this->db->get('schools')->result();

          for($i = 0; $i < count($schools); $i++)
                {

                  echo '<option value="'.$schools[$i]->id.'">'.$schools[$i]->name.'</option>';
                }
              ?>
              
      </select>
      
    </div>

  </div>

  <div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="subject_id">Subject Name</label>
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
    <label for="operation_name" class="control-label">Class Name</label>
  </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="class_name" name="class_name" placeholder="Class Name" />
    </div>
  </div>

  <div class="form-group">
  <div class="col-md-6">
    <label for="section_id" class="control-label">Section Name</label>
  </div>
    <div class="col-md-6">
      <select class="form-control" id="section_id" name="section_id">
      </select>
    </div>
  </div>

   <div class="row">
     <div class="col-md-12">
       <h4>Student Grade Items</h4>
       <table id="grades_table">
         
       </table>
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

  <script type="text/javascript">
    
    $(function(){

      //get the section associated with the class
      $('#school_id').on('change', function(){
        getClasses();
       // getSections();
      });

      //get the section associated with the class
      $('#class_id').on('change', function(){
        getSections();
      });
      
    });

    function getClasses()
    {
      alert("Get classess function");
      

      //var classId = document.getElementById('class_id').value;// 
      var schoolId = document.getElementById('school_id').value;

      alert("<?php echo base_url(); ?>gradebook/getClasses/" +schoolId);
      //$('#locCounty').value;
            //alert('County Id '+Id);

            $.ajax({

                    url:"<?php echo base_url(); ?>gradebook/getClasses/"+schoolId,
                    type:"get",
                    success: function(data){

                           // parse the jason string and convert it to a javascript

                            var arr = JSON.parse(data);

                            console.log(arr);
                        //
                        alert(arr[0]);
                        //  alert(arr.length);
                        //loop through the array
                        //clear the contents of the prvious data appended to the <select> element
                          $('#class_id').empty(); //html("");

                          for(var i =0; i < arr.length; i++)
                          {
                              // alert(arr[i].districtName);
                              $('#class_id').append('<option value="'+arr[i].id+'">'+ arr[i].name+'</option>');
                          }



                        }

                    });

                    alert("After Ajax Call ");

    }

    function getSections()
    {

      alert("Get sections function");
      var classId = document.getElementById('class_id').value;// 
      var schoolId = document.getElementById('school_id').value;
     // $('#locCounty').value;
            alert("<?php echo base_url(); ?>/gradebook/getSections/"+schoolId+"/"+classId);

            $.ajax({

                    url:"<?php echo base_url(); ?>/gradebook/getSections/"+schoolId+"/"+classId,
                    type:"get",
                    success: function(data){

                           // parse the jason string and convert it to a javascript

                            var arr = JSON.parse(data);

                           // alert(arr[0]);
                        
                        alert(typeof(arr[0]));
                        //use the dot notation to access object properties in Javascript
                       // console.log(arr[1].name);
                      //  console.log(arr[0].name);
                        //  alert(arr.length);
                        //loop through the array
                        //clear the contents of the prvious data appended to the <select> element
                          $('#section_id').empty(); //.html("");

                          for(var i =0; i < arr.length; i++)
                          {
                                //  alert(arr[i].districtName);
                              $('#section_id').append('<option value="'+arr[i].id+'">'+ arr[i].name+'</option>');
                          }



                        }

                    });


    }
  </script>

<!--</div>container ends here
</body>
</html>-->


