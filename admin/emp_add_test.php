<?php
include('includes/emp_header.php');
include('includes/emp_nav.php');
?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Employee</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">&nbsp<i class="fas fa-fw fa-plus">&nbsp</i>Add Test Report
          </h1><hr>
        </div>
        <!-- /.container-fluid -->
       <form class="user form-group" method="post" action="connection.php" style="padding: 20px;">
       	<h3>Patient Details:</h3><br>
       	<div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>First Name</label>
                    <input type="text" class="form-control form-control-user" name="fname" placeholder="First Name" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>Middle Name</label>
                    <input type="text" class="form-control form-control-user" name="mname" placeholder="Middle Name">
                  </div>
                  <div class="col-sm-4">
                  	<label>Last Name</label>
                    <input type="text" class="form-control form-control-user" name="lname" placeholder="Last Name" required>
                  </div>
        </div>
        <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>Father's Name</label>
                    <input type="text" class="form-control form-control-user" name="fatname" placeholder="Father's Name" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>Address</label>
                    <input type="text" class="form-control form-control-user" name="add" placeholder="Address" required>
                  </div>
                  <div class="col-sm-4">
                  	<label>Contact</label>
                    <input type="text" class="form-control form-control-user" name="con" placeholder="Contact No." required>
                  </div>
        </div>
        <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>Collection Date</label>
                    <input type="date" class="form-control form-control-user" name="cdate" placeholder="Collection Date" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>Test Date</label>
                    <input type="date" class="form-control form-control-user" name="tdate" placeholder="Report Date" required>
                  </div>
                  <div class="col-sm-4">
                  	<label>Time</label>
                    <input type="time" class="form-control form-control-user" name="time" placeholder="Time" required>
                  </div>
        </div>
        <hr>
<!-- test deatils Ashish -->
<h3 class="m-0 font-weight-bold text-primary">Test Details:</h3><br>
			<div class="row">
				<div class="col-sm-4">
					<label>Test Name:</label>
					<select class="form-control" style="color: blue;" name="testname" required>
						<option value="NULL">--Select--</option>
						<option value="CBC">Complete Blodd Count(CBC)</option>
						<option value="HB">Hemoglobin</option>
						<option value="Malaria">Malaria</option>
						<option value="Dengue">Dengue</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Urine">Urine</option>
						<option value="Sperm counts">Sperm Counts</option>
						<option value="Juindice">Juindice</option>
						<option value="Liver Function Test">Liver Function Test</option>
						<option value="Thyroid Stimulating Hormone">Thyroid Stimulating Hormone</option>
					</select>
				</div>
			</div><br>

			<!-- teble -->
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Results</th>
                      <th>Units</th>
                      <th>Bio. Ref. Interval</th>
                    </tr>
                    <tr>
                    	<td>Hemoglobin</td>
                    	<td><input type="text" name="hb" class="form-control form-control-user" placeholder="Hemoglobin..." required></td>
                    	<td>g/dL</td>
                    	<td>13.00 - 17.00</td>
                    </tr>
                    <tr>
                    	<td>Packed Cell Volume(PCV)</td>
                    	<td><input type="text" name="pcv" class="form-control form-control-user" placeholder="Packed Cell Volume..." required></td>
                    	<td>%</td>
                    	<td>40.00 - 50.00</td>
                    </tr>
                    <tr>
                    	<td>RBC Count</td>
                    	<td><input type="text" name="rbc" class="form-control form-control-user" placeholder="RBC Count..." required></td>
                    	<td>mill/mm3</td>
                    	<td>4.50 - 5.50</td>
                    </tr>
                    <tr>
                    	<td>MCV</td>
                    	<td><input type="text" name="mcv" class="form-control form-control-user" placeholder="MCV..." required></td>
                    	<td>fL</td>
                    	<td>80.00 - 100.00</td>
                    </tr>
                    <tr>
                    	<td>MCH</td>
                    	<td><input type="text" name="mch" class="form-control form-control-user" placeholder="MCH..." required></td>
                    	<td>pg</td>
                    	<td>27.00 - 32.00</td>
                    </tr>
                    <tr>
                    	<td>MCHC</td>
                    	<td><input type="text" name="mchc" class="form-control form-control-user" placeholder="MCHC..." required></td>
                    	<td>g/dL</td>
                    	<td>32.00 - 35.00</td>
                    </tr>
                    <tr>
                    	<td>Red Cell Distribution Width(RDW)</td>
                    	<td><input type="text" name="rdw" class="form-control form-control-user" placeholder="Red Cell Distribution..." required></td>
                    	<td>%</td>
                    	<td>11.50 - 14.50</td>
                    </tr>
                    <tr>
                    	<td>Total Leukocyte Count(TLC)</td>
                    	<td><input type="text" name="tlc" class="form-control form-control-user" placeholder="Total Leukocyte Count..." required></td>
                    	<td>thou/mm3</td>
                    	<td>4.00 - 10.00</td>
                    </tr>
                    <tr>
                    	<td>Platelet Count</td>
                    	<td><input type="text" name="pc" class="form-control form-control-user" placeholder="Platelet Count..." required></td>
                    	<td>thou/mm3</td>
                    	<td>150.00 - 450.00</td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div><br>

          <div class="col-sm-4">
                  	<label>Description:</label>
                    <textarea rows="5" cols="150" name="des" placeholder=" Description Here..."></textarea>
          </div>

<!-- button -->
				<div class="row">
					<div class="col-sm-5"></div>
					<div class="col-sm-2">
						 <input type="submit" name="test_btn" value="Add Report" class="btn btn-success btn-user btn-block" style="margin-top: 20px;">
					</div>
				</div>
               
          </form>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Techniqa Solution</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
