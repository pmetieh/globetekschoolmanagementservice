
<div class="row">
	<h1>Pay with your debit card</h1>
<form id="paymentForm" name="paymentForm" action="postpayment" method="post" enctype="multipart/form-data">
		<div class="row jumbotron">
    

	<div class="form-group">
	<div class="col-md-5">
		<label class="control-label" for="customerFirstName">First Name</label>
	</div>
		<div class="col-md-5">
			<input type="text" class="form-control" id="customerFirstName" name="customerFirstName" placeholder="Fisrt Name" />
		</div>

	</div>
    
	<div class="form-group">
	<div class="col-md-6">
		<label for="customerLastname" class="control-label">Last Name</label>
	</div>
		<div class="col-md-6">
			<input type="text" class="form-control" id="customerLastname" name="customerLastname" placeholder="Last Name" />
		</div>
	</div>

    

	<div class="form-group">
		<label for="customerEmail" class="col-md-6 control-label">Email Address</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="customerEmail" name="customerEmail" placeholder="Email Address" />
		</div>
	</div>
    
	<div class="form-group">
		<label for="customerPhoneNumber" class="col-md-6 control-label">Phone Number</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" />
		</div>
	</div>

    
	<div class="form-group">
		<label for="description" class="col-md-6 control-label">Description</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="description" name="description" value="Entrance Exam"/>
			<input type="hidden" class="form-control" id="referenceNumber" name="referenceNumber" value="refNumber" />

		</div>
	</div>

    
	<div class="form-group">
		<label for="amount" class="col-md-6 control-label">Amount</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="amount" name="amount" placeholder="Amount that you are paying" />
			<input type="hidden" class="form-control" id="serviceKey" name="serviceKey" value="serviceKey" />
		</div>
	</div>

    
	<div class="form-group">
		<!--<label for="noOfItems" class="col-md-6 control-label">No Of Items</label>-->
		<div class="col-md-6">
			<input type="text" style="display:none;" class="form-control" id="noOfItems" name="noOfItems" value="1" placeholder="The number of things that you are paying for" />
		</div>
	</div>

   
	<div class="form-group">
		<label for="date" class="col-md-6 control-label">Date</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="date" name="date" value="{{ date('d/m/Y h:m:s') }}"/>
		</div>
	</div>

   
	<div class="form-group">
		<label for="nameoncard" class="col-md-6 control-label">
			Name On Card
		</label>
		<div class="col-md-6">
			<input type="text" name="nameoncard" id="nameoncard" class="form-control">
		</div>
	</div>

   
	<div class="form-group">
		<label for="cardnumber" class="col-md-6 control-label">
			Card Number
		</label>
		<div class="col-md-6">
			<input type="text" name="cardnumber" id="cardnumber" class="form-control" placeholder="4111111111111111">
		</div>
	</div>

   
	<div class="form-group">
		<label for="month" class="col-md-6 control-label">
			Expiration Date
		</label>
		<div class="col-md-6">
			<div class="col-md-4 pull-left">
			<select class="form-control" name="month" id="month">
				<option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
            </select>
			</div>


			<div class="col-md-3 pull-right">
			<select class="form-control" name="year" id="year">
				<option value="21">2021</option>
				<option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
                <option value="28">2028</option>
                <option value="29">2029</option>
                <option value="30">2030</option>
			</select>
			</div>
		</div>

	</div>

   
	<div class="form-group">
        <label class="col-md-6 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-6">
          <input type="text" maxlength="3" class="form-control" name="cvvCode" id="cvvCode" placeholder="123">
        </div>
    </div>

   
	<div class="form-group">
		<label for="description" class="col-md-6 control-label">Currency Code</label>
		<div class="col-md-6">
			<select class="form-control" id="curCode" name="curCode">
				<option value="566">Naira</option>
				<option value="567">LRD</option>
				<option value="560">USD</option>
				<option value="559">Euro</option>
				<option value="558">GBD</option>
			</select>
		</div>
	</div>
</div>

	</form>



	<!--<script type="text/javascript" src="{{url('js/jquery-1.11.0.js')}}"></script>
	 <script type="text/javascript" src="{{url('css/bootstrap-3.3.7-dist/js/bootstrap.js')}}"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div><!--container ends here-->
</body>
</html>
