<!-- In Bootstrap 3, you can set the active tab by adding the `active` class to the corresponding tab and panel elements. Here's an example:


Nav tabs -->
<div class="row">
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#adddpt" aria-controls="home" role="tab" data-toggle="tab"><h5>Add Departments</h5></a></li>
  <li role="presentation"><a href="#listdpt" aria-controls="profile" role="tab" data-toggle="tab"><h5>List Departments</h5></a></li>
  <li role="presentation"><a href="#removedpt" aria-controls="messages" role="tab" data-toggle="tab"><h5>Remove Department</h5></a></li>
  <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="adddpt">
    <h5 style="padding-left:20px;">Create / Add A New Department</h5>
    <div class="row jumbotron">
      <form id="paymentForm" name="paymentForm" action="postpayment" method="post" enctype="multipart/form-data">
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
              <label for="college_code" class="control-label">Department Code</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="department_code" name="department_code" placeholder="Department code" />
              </div>
            </div>

            <div class="form-group">
            <div class="col-md-6">
              <label for="dean_fname" class="control-label">ChairPerson Phone</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_mobile" name="hod_mobile" placeholder="Head Of Department phone" />
              </div>
            </div>

             <div class="form-group">
            <div class="col-md-6">
              <label for="hod_email" class="control-label">ChairPerson Email</label>
            </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="hod_email" name="hod_email" placeholder="Head Of Department email" />
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6">
              <label for="month" class="col-md-6 control-label">
                Colleges
              </label>
              </div>
              
              <div class="col-md-6">
                <!--<div class="col-md-4 pull-left"-->
                <select class="form-control" name="collegeid" id="collegeid">
                  <option>Colleges</option>
                          <option value="01">Engineering College</option>
                          <option value="02">Business College</option>
                          <option value="03">Science College</option>
                          <!--<option value="04">Apr (04)</option>
                          <option value="05">May (05)</option>
                          <option value="06">June (06)</option>
                          <option value="07">July (07)</option>
                          <option value="08">Aug (08)</option>
                          <option value="09">Sep (09)</option>
                          <option value="10">Oct (10)</option>
                          <option value="11">Nov (11)</option>
                          <option value="12">Dec (12)</option>-->
                      </select>
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
  </div>
  <div role="tabpanel" class="tab-pane" id="removedpt">
    <h5>Remove Department</h5>
  </div>
  <div role="tabpanel" class="tab-pane" id="settings">...</div>
</div>
</div>

