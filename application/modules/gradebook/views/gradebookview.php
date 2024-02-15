<div class="row">
<ul class="nav nav-tabs bordered" role="tablist">
  <li role="presentation" class="active"><a href="#addgradebookitem" aria-controls="home" role="tab" data-toggle="tab"><h5><i class="fa fa-plus-square" aria-hidden="true"></i>
Setup Subject Gradebook</h5></a></li>
  <li role="presentation"><a href="#entergrades" aria-controls="profile" role="tab" data-toggle="tab"><h5><i class="fa fa-list" aria-hidden="true"></i>Enter Grades</h5></a></li>
  <!--<li role="presentation"><a href="#removemod" aria-controls="messages" role="tab" data-toggle="tab"><h5><i class="fa fa-chain-broken" aria-hidden="true"></i>Remove Module</h5></a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
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
                    <button type="submit" class="btn btn-danger btn-lg" role="button"  id="submit"  name="submit">
					<i class="fa fa-book fa-fw" aria-hidden="true">  
          Add Graded Item</i></button>
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
    
    <form id="gradesForm" name="gradesForm" action="addgrades" method="post" enctype="multipart/form-data">
    <div class="row jumbotron">
    
    <div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="schoolid">School Name</label>
  </div>
    <div class="col-md-6">
      <select class="form-control" name="schoolid" id="schoolid">

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
    <label for="class_name" class="control-label">Class Name</label>
  </div>
    <div class="col-md-6">
      <select class="form-control" name="class_name" id="class_name">


      </select>
    </div>
  </div>

  <div class="form-group">
  <div class="col-md-6">
    <label for="sectionid" class="control-label">Section Name</label>
  </div>
    <div class="col-md-6">
      <select class="form-control" id="sectionid" name="sectionid">
      </select>
    </div>
  </div>

  <div class="form-group">
  <div class="col-md-6">
    <label class="control-label" for="subject_id">Subject Name</label>
  </div>
    <div class="col-md-6">

    	<select class="form-control" name="subjectId" id="subjectId">

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
		<label for="created_by" class="control-label">Marking Period</label>
	</div>
		<div class="col-md-6">
      <select  class="form-control" name="markingperiodId" id="markingperiodId">
      <?php
    		/* 	$mrkp = $this->db->get('markingperiod')->result();

    			for($i = 0; $i < count($mrkp); $i++)
	    					{

	    						echo '<option value="'.$mrkp[$i]->id.'">'.$mrkp[$i]->marking_periodName.'</option>';
	    					} */
    					?>
    					       
      </select>
    </div>
  </div>

 
  <div class="form-group">
	<div class="col-md-6">
		<label for="created_by" class="control-label">Current Accademic Year</label>
	</div>
		<div class="col-md-6">
      
      <input type="text"  class="form-control" name="academicyearName" id="academicyearName"  
      value="">
      <input type="hidden"   class="form-control" name="academicyearId" id="academicyearId"  
      value="">
      
    
    </div>
  </div>



	<!-- 	</div>
	</div> -->

   <div class="row">
     <div class="col-md-12">
       <h4>Student Grade Items</h4>
       <table id="grades_table" border="1" colspace="1">  
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
          <i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Add GradeItems</button>
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
 <!--  <div role="tabpanel" class="tab-pane" id="removemod">
    <h5>Remove College</h5>
  
  <div role="tabpanel" class="tab-pane" id="removedpt">...</div>
</div> -->
</div>



	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript">
    
    $(function(){

      getAccademicYear();
      //submit form
    //  $('#gradesForm').submit
        //gradebook setup
      //get the section associated with the class
      $('#school_id').on('change', function(){
        getClasses();
       // getSections();
      });

        //entergrades
      $('#schoolid').on('change', function(){
        getClasses_entergrades();
        getmarkingperiod_entergrades();
        getAccademicYear();
       // getSections();getmarkingperiod_entergrades
       $('#grades_table').empty();  
      });

      //gradebook setup
      //get the section associated with the class
      $('#class_id').on('change', function(){
        getSections();
      });

      //entergrades
      $('#class_name').on('change', function(){

       // alert('Sections Entergrades');
        getSections_entergrades();
       
      });

      $('#sectionid').on('change', function(){

     //     alert('Getting students');
          //getSections_entergrades();
         console.log(getStudents());
         // alert("Calling get_grade_items");
        //  get_grade_items();
        });

        $('#subjectId').on('change', function(){

        //  alert('Getting gradeitems');
               get_grade_items();
          });

          $("#gradesForm").submit(function (event) {
            event.preventDefault();
            //alert("Submitting form ..\n");

            //build the json aobject array from the table data and send it to the server
            //var accademicYearId = document.getElementById('academicyearId').value;
            var gradesItemTable = document.getElementById("grades_table");
            var mrkprd = document.getElementById('markingperiodId').value;
            var rowColtn = gradesItemTable.rows;
            var cellColtn;
            //var gradeItems = {};
            var allgradeItems = [];
            //var keys = Object.keys(gradeItems);

            var totalRows = rowColtn.length;
            var actualDataRows = totalRows - 2; //the data starts on the third row i.e row no 2
            //starting from zero
            console.log(' Number of Tablerows : ' + totalRows);

            var allItemStartIndex = 0;
            
          //  alert("Number of rows : "+ rowColtn.length);
            //we are reading values from the third row
            for (let i = 2; i < rowColtn.length; i++) {
             
              for (let n = 2; n < rowColtn[0].cells.length; n++) {
                var gradeItems = {}; //create a new object with each iteration of the loop
               //rowColtn[0].cells
               // alert(rowColtn[0].cells[n].innerText);

               //get the grade item ids from the second row

               //if it is the second cell in the row, i.e n =  1, set the property name to studentId
              // if(n == 1)
               //{
                //var memName = "studentId";
                gradeItems["markingprd"] = mrkprd;
                gradeItems["subjectId"] = document.getElementById("subjectId").value;
                gradeItems["schoolId"] = document.getElementById("schoolid").value;
                gradeItems["sectionid"] = document.getElementById("sectionid").value;
                gradeItems["class_id"] = document.getElementById("class_name").value;
                gradeItems["accademicYear"] = document.getElementById('academicyearId').value; 
                 alert(rowColtn[i].cells[1].getElementsByTagName('input')[0].value); 
                gradeItems["studentId"] = rowColtn[i].cells[1].getElementsByTagName('input')[0].value;
                //var memName = rowColtn[1].cells[n].innerText; 
                gradeItems["gradeitemId"] = rowColtn[1].cells[n].innerText; 
               // var memName = rowColtn[1].cells[n].innerText;
                gradeItems["grade"] = rowColtn[i].cells[n].getElementsByTagName('input')[0].value; 
              // }
               /* else{
                var memName = rowColtn[1].cells[n].innerText; //assign the grade item id as property name 
                // and assign the innerText to the id property 
               } */
               // var memName = rowColtn[1].cells[n].innerText; //'"' + rowColtn[0].cells[n].innerText +'"';
               // memName = memName;
               //  console.log("Mem name : "+ memName);
               //console.log(rowColtn[i].cells[n].getElementsByTagName('input')[0].value);
               /*  gradeItems[memName] = rowColtn[i].cells[n].getElementsByTagName('input')[0].value; //rowColtn[i].cells[n].innerText;// + ':';

                gradeItems["markingprd"] = mrkprd;
                gradeItems["subjectId"] = document.getElementById("subjectId").value;
                gradeItems["schoolId"] = document.getElementById("schoolid").value;
                gradeItems["sectionid"] = document.getElementById("sectionid").value;
                gradeItems["class_id"] = document.getElementById("class_name").value;
                gradeItems["accademicYear"] = document.getElementById('academicyearId').value; */

               // console.log("gradeItems["+memName+"] : "+gradeItems[memName]); 
                //console.log('Marking period : '+gradeItems["markingprd"]);

                //start assigning values from cell 1 in every row, because cell 0 has the students Name
                //and cell 1 has the student Id.
                
                allgradeItems.push(gradeItems);
              }
              

              
              //console.log("gradeItems[markingprd] : "+gradeItems["markingprd"]);
              //console.log("gradeItems[schoolId] : "+gradeItems["schoolId"]);
              //console.log("gradeItems[subjectId] : "+gradeItems["subjectId"]);

              //console.log(Object.keys(gradeItems));   
              
              console.log("Added one grade Item : ");
           //  console.log(allgradeItems);
              
            }
            //console.log(JSON.stringify(allgradeItems));
            
            console.log('All gradeItems length '+allgradeItems.length);
            $.ajax({
              url: "<?php echo base_url(); ?>gradebook/saveGradebookitems",
              type: 'POST',
              datatype: 'json',
              data: JSON.stringify(allgradeItems),
              success: function(response){
              console.log(response);
              }
            });

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

                         //   console.log(arr);
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

    function getClasses_entergrades()
    {
     // alert("Get classess function");
      

      //var classId = document.getElementById('class_id').value;// 
      var schoolId = document.getElementById('schoolid').value;

    //  alert("<?php echo base_url(); ?>gradebook/getClasses/" +schoolId);
      //$('#locCounty').value;
            //alert('County Id '+Id);

            $.ajax({

                    url:"<?php echo base_url(); ?>gradebook/getClasses/"+schoolId,
                    type:"get",
                    success: function(data){

                           // parse the jason string and convert it to a javascript

                            var arr = JSON.parse(data);

//console.log(arr);
                        //
                      //  alert(arr[0]);
                        //  alert(arr.length);
                        //loop through the array
                        //clear the contents of the prvious data appended to the <select> element
                          $('#class_name').empty(); //html("");

                          for(var i =0; i < arr.length; i++)
                          {
                              // alert(arr[i].districtName);
                              $('#class_name').append('<option value="'+arr[i].id+'">'+ arr[i].name+'</option>');
                          }



                        }

                    });

                  //  alert("After Ajax Call ");

    }

    function getSections()
    {

     // alert("Get sections function");
      var classId = document.getElementById('class_id').value;// 
      var schoolId = document.getElementById('school_id').value;
     // $('#locCounty').value;
         //   alert("<?php echo base_url(); ?>gradebook/getSections/"+schoolId+"/"+classId);

            $.ajax({

                    url:"<?php echo base_url(); ?>gradebook/getSections/"+schoolId+"/"+classId,
                    type:"get",
                    success: function(data){

                           // parse the jason string and convert it to a javascript

                            var arr = JSON.parse(data);

                           // alert(arr[0]);
                        
                   //      alert(typeof(arr[0]));
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
//gets the sections of a selected class under entergrades
    function getSections_entergrades()
    {

       // alert("Classes - Entergrades");
      var classId = document.getElementById('class_name').value;// 
      var schoolId = document.getElementById('schoolid').value;
     // $('#locCounty').value;
          //  alert("<?php echo base_url(); ?>"+"gradebook/getSec`tions/"+schoolId+"/"+classId);
            //  var promise = new Promise()
            $.ajax({
                    async: false,
                    url:"<?php echo base_url(); ?>"+"gradebook/getSections/"+schoolId+"/"+classId,
                    type:"get",
                    success: function(data){

                           // parse the jason string and convert it to a javascript

                            var arr = JSON.parse(data);

                           // alert(arr[0]);
                        
                  //      alert(typeof(arr[0]));
                        //use the dot notation to access object properties in Javascript
                       // console.log(arr[1].name);
                      //  console.log(arr[0].name);
                        //  alert(arr.length);
                        //loop through the array
                        //clear the contents of the prvious data appended to the <select> element
                          $('#sectionid').empty(); //.html("");

                          for(var i =0; i < arr.length; i++)
                          {
                                //  alert(arr[i].districtName);
                              $('#sectionid').append('<option value="'+arr[i].id+'">'+ arr[i].name+'</option>');
                          }
                        }

                    });



    }

    //get studes under enter grades tab
    function getStudents()
    {
      //remove all table content
      
      var students_arry; // = [];
   //   alert("Students - Entergrades");
      var classId = document.getElementById('class_name').value;// 
      var schoolId = document.getElementById('schoolid').value;
      var sectionId = document.getElementById('sectionid').value;
     // $('#locCounty').value;
        //    alert("<?php echo base_url(); ?>gradebook/getStudents/"+classId+"/"+ schoolId + "/" +sectionId);

            $.ajax({
                    async: false,
                    url:"<?php echo base_url(); ?>gradebook/getStudents/"+classId+"/"+schoolId + "/" + sectionId,
                    type:"get",
                    success: function(data){

                           // parse the jason string and convert it to a javascript
                            //list of all students in the selected section
                            students_arry = JSON.parse(data);

                           // alert(arr[0]);
                        
                        //    alert(typeof(data));
                            //alert(students_arry);
                            //use the dot notation to access object properties in Javascript
                            console.log(students_arry[1].StudentName);
                            console.log(students_arry[1].student_id);
                            console.log(students_arry.length);

                            //generate an HTML table that wil l contain the students and the 
                            //grade items for the section and class
                            //the number of cells in the table will be determined by the number
                            //of grade items and the student names
                         //   $('#grades_table').html(""); //empty();

                            for(var i = 0; i < students_arry.length; i++)
                            {
                              $('#grades_table').append('<tr><td>'+students_arry[i].StudentName+'</td>'+
                              '<td><input type="text" name="id[]" value="'+students_arry[i].student_id+'"/></td></tr>');
                            }
                       
                        // loop through the array
                        // clear the contents of the prvious data appended to the <select> element
                       /*   $('#sectionid').empty(); //.html("");

                          for(var i =0; i < arr.length; i++)
                          {
                                // alert(arr[i].districtName);
                              $('#sectionid').append('<option value="'+arr[i].id+'">'+ arr[i].name+'</option>');
                          
                          }

                          */
                            
                        }
                        
                    });
          return students_arry;          
                    
    }

    function get_grade_items()
    {
     // alert("Getgradeitems");
      var classId = document.getElementById('class_name').value;
      var schoolId = document.getElementById('schoolid').value;
      var subjectId = document.getElementById('subjectId').value;
      var sectionId = document.getElementById('sectionid').value; 
      var gradesTab = document.getElementById("grades_table");

     // alert("Number of table rows : "+gradesTab.rows.length);

     // alert("<?php echo base_url(); ?>gradebook/get_gradeitems/"+schoolId+"/"+classId + "/" +subjectId+ "/" + sectionId);


      $.ajax({
        
             url:"<?php echo base_url(); ?>gradebook/get_gradeitems/"+schoolId+"/"+classId + "/" +subjectId+ "/" + sectionId,
             type:"get",
             success: function(data){

             //get all the gradeitems and assign them to the variable arr
             gradeItems = JSON.parse(data);
          //    alert(typeof(arr));
              console.log(gradeItems[0]['gradeitem_name']);
              //get the table id and append the cells with the grade items
              //loop over the rows of the table
      
              for(var n = 0; n < gradesTab.rows.length; n++)
              {
                  //add one extra cell for the total of all the grades
                for(var i = 0; i < gradeItems.length; i++)
                  {
                  //  alert("Table row  " +gradesTab.rows[n]);
                    //insert the new cell at the end of the row
                    // n represents the row number
                    var newcell = gradesTab.rows[n].insertCell(-1);
                    //create a new input box
                    var inputElement = document.createElement('input');
                    inputElement.type = "text";
                    inputElement.name = "gradeItems[]";
                    //newcell.innerText = "<input name="+arr[i].gradeitem_name+"/>";
                    newcell.appendChild(inputElement);
                    
                  //  alert(arr[i].gradeitem_name);
                   // $('#grades_table').append("<")
                  }
              }
              createHeader('grades_table', gradeItems.length, gradeItems);
              
            }

      })
    }
    function createHeader(tableId, numCells, datArry) 
    {
     // alert("Inside - createHeader");
      var table = document.getElementById(tableId);
      var header = table.createTHead();
      //there must be a row in the thead element
      var row = header.insertRow(0);
      var cell = row.insertCell(0);
      cell.innerHTML = "<b>Student Name</b>";
      //var row = header.insertRow(1);
      var cell_1 = row.insertCell(1);
      cell_1.innerHTML = "<b>studentID</b>";
      
      //this second row contains the gradeItem ids
      var secrow = table.insertRow(1);
      //these first two cells are empty
      var secCell = secrow.insertCell(0);
      var secCell1 = secrow.insertCell(1);

     // var secCell1 = secrow.insertCell(2);
     // secCell1.innerText = 2;

      //start from the second cell in the header row, because it is already populated
      for (let i = 0; i < numCells; i++) {
        var cell = row.insertCell(-1); //insert the cell at the end of the row
        var secRowCell = secrow.insertCell(-1);

        cell.innerHTML = '<b>'+datArry[i].gradeitem_name+'</b>';
        secRowCell.innerHTML = '<b>'+datArry[i].id +'</b>';
      //  alert('Cell headername datArry['+i+'] : ' +datArry[i].gradeitem_name);
      
    }

    //lets add the column header for the grades items total
   // cell = row.insertCell(-1);
    //cell.name = "avggrade";
    //  cell.innerHTML = "<b>Average Grade</b>";
    
  }

  function getmarkingperiod_entergrades()
  {
     alert("Marking period");
     var schoolId = document.getElementById('schoolid').value;
     var mrkprdElement = document.getElementById('markingperiodId');
     //clear the select tage
     mrkprdElement.innerHTML = "";
     //$('#markingperiodId').innerHTML = "";

     $.ajax({
      url:"<?php echo base_url(); ?>gradebook/getmakingpd/"+schoolId,
      type:"get",
            success: function(data){
             var markprd = JSON.parse(data);
             console.log(markprd[0].marking_periodName);

             for(var i = 0; i < markprd.length; i++)
                {
                  $('#markingperiodId').append('<option value ="'+markprd[i].id +'">'+ markprd[i].marking_periodName+'</option>');
                }

            }
     });
  }

  function submitdata()
  {
     
          $.ajax({
          type: "POST",
          url: "process.php",
          data: formData,
          dataType: "json",
          encode: true,
        }).done(function (data) {
          console.log(data);
        });

        event.preventDefault();
  }

  function getAccademicYear()
  {
    var schoolId = document.getElementById('schoolid').value;
    var sccademicYearName = document.getElementById('academicyearName');
    var sccademicYearId = document.getElementById('academicyearId');

    $.ajax({
      url : "<?php echo base_url(); ?>gradebook/getAccademicYear/"+schoolId,
      type : "get",
      success: function(data){
             var accayr = JSON.parse(data);
             var academicyearId = accayr[0].id;
             var academicYearName = accayr[0].session_year;
             
            console.log('Number of Accademic year '+accayr.length);
          //   
             console.log('Accademic Year :'+academicYearName);
             console.log('Accademic Year Id :'+academicyearId);
             
             sccademicYearName.value = academicYearName;
             sccademicYearId.value = academicyearId;
              
            }
    });
  }
  </script>

<!--</div>container ends here
</body>
</html>-->

