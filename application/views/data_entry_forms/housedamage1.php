<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/pdmastyle.css">
		<link rel="stylesheet" type="text/css" href="css/1.css">
		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	</head>
	<body>
		<div class="container">
			<div class="row">		
			<div class="col-lg-3 text"> House Damage</div>
			</div> <br/>

            <div ng-controller="HouseDamageCtrl">
    <form ng-submit="AddHouseDamage(data)" method="post" role="form">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">

                    <div class="row">
                 		<div class="col-lg-2 label text-right"> Name of Owner:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control" name="" id="" placeholder="Name" ng-model="data.name">
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="" id="" placeholder="Father Name" ng-model="data.fathername">
                
				</div>
				</div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="text" class="datepicker" ng-model="data.incidentdate"></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Cnic Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="" id="" placeholder="Cnic number" ng-model="data.cnicnumber">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="" id="" placeholder="Address" ng-model="data.address">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Reason For Damage:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="" id="" placeholder="Reason" ng-model="data.reason">
                       </div>
                       </div>

                <div class="row">
                <div class="col-lg-2 text-right label">House Damage:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="HouseDamage" value="Fully Damage" ng-model="data.housedamage"> Fully Damage
                 <input type="radio" name="HouseDamage" value="Partially Damage" ng-model="data.housedamage"> Partially Damage

                
                </div>
                </div>

 					<div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
               		 <div class="col-lg-3 "> 
                  <input type="radio" name="Halqapatwari" value="yes" ng-model="data.halqapatwari"> Yes
                 <input type="radio" name="Halqapatwari" value="no" ng-model="data.halqapatwari"> No

                
				</div>
				</div>

                <div class="row">
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="RepOfMPA" value="yes" ng-model="data.repofmpa"> Yes
                 <input type="radio" name="RepOfMPA" value="no" ng-model="data.repofmpa"> No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">Tehsiladar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="Tehsiladar" value="yes" ng-model="data.tehsiladar"> Yes
                 <input type="radio" name="Tehsiladar" value="no" ng-model="data.tehsiladar"> No
   
				</div>
				</div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="LocalSchoolHeadmaster" value="yes" ng-model="data.localschoolheadmaster"> Yes
                 <input type="radio" name="LocalSchoolHeadmaster" value="no" ng-model="data.localschoolheadmaster"> No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="LocalImamMasjid" value="yes" ng-model="data.localimammasjid"> Yes
                 <input type="radio" name="LocalImamMasjid" value="no" ng-model="data.localimammasjid"> No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
            <button type="submit" class="btn btn-success">Add to list</button>
                    </div>
                </div>
        </form>
        </div>

		</div>
		<script type="text/javascript" src="js/2.js"></script>
		<script type="text/javascript" src="js/3.js"></script>

		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  		  <script>
   	 $( ".datepicker" ).datepicker();
   
  </script>
	</body>
	 
</html>