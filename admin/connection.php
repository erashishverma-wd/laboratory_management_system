<?php
// creating connection(globally)
$conn = new mysqli('localhost','root','','lab');

// patient login
if (isset($_POST['login_btn']))
{
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM pregister WHERE email = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				echo "<script>alert('Welcome!')</script>";
				echo "<script>window.open('patient_panel.php','_self')</script>";
			} else {
				echo "<script>alert('Unauthorised Login')</script>";
			echo "<script>window.open('login.html','_self')</script>";
				
			}
			
		} else {
			echo "Please enter password";
			die();
		}
		
	} else {
		echo "Please enter username";
		die();
	}
}

// Employee login
if (isset($_POST['Elogin_btn']))
{
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM eregister WHERE email = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				echo "<script>alert('Welcome!')</script>";
				echo "<script>window.open('emp_index.php','_self')</script>";
			} else {
				echo "<script>alert('Unauthorised Login')</script>";
			echo "<script>window.open('Elogin.html','_self')</script>";
				
			}
			
		} else {
			echo "Please enter password";
			die();
		}
		
	} else {
		echo "Please enter username";
		die();
	}
}

// Admin Login-Ashish
if (isset($_POST['ad_login_btn']))
{
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM admin WHERE email = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				echo "<script>alert('Welcome!')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			} else {
				echo "<script>alert('Unauthorised Login')</script>";
			echo "<script>window.open('ad_login.html','_self')</script>";
				
			}
			
		} else {
			echo "Please enter password";
			die();
		}
		
	} else {
		echo "Please enter username";
		die();
	}
}

// patient registration
if (isset($_POST['reg_btn'])) {

	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'mail');
	$password = filter_input(INPUT_POST, 'pass2');
	if (!empty($first) || !empty($last) || !empty($email) || !empty($password)) {
		$sql = "INSERT INTO `pregister`(`fname`, `lname`, `email`, `password`) VALUES ('$first', '$last', '$email', '$password')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('register.html','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

// employee registration
if (isset($_POST['ereg_btn'])) {

	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'mail');
	$password = filter_input(INPUT_POST, 'pass2');
	if (!empty($first) || !empty($last) || !empty($email) || !empty($password)) {
		$sql = "INSERT INTO `eregister`(`fname`, `lname`, `email`, `password`) VALUES ('$first', '$last', '$email', '$password')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('Eregister.html','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

// admin registration
if (isset($_POST['ad_reg_btn'])) {

	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'mail');
	$password = filter_input(INPUT_POST, 'pass2');
	if (!empty($first) || !empty($last) || !empty($email) || !empty($password)) {
		$sql = "INSERT INTO `admin`(`fname`, `lname`, `email`, `password`) VALUES ('$first', '$last', '$email', '$password')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('ad_register.html','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}







// Forgot password section
	// for patient 
if (isset($_POST['Pforgot_btn'])) {

	$mail = filter_input(INPUT_POST, 'mail');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `pregister` SET `password`='$rnew' WHERE `email` = '$mail' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('forgot-password.html','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}

// for employee
if (isset($_POST['Eforgot_btn'])) {

	$mail = filter_input(INPUT_POST, 'mail');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `eregister` SET `password`='$rnew' WHERE `email` = '$mail' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('Eforgot.html','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}

// for admin
if (isset($_POST['ad_forgot_btn'])) {

	$mail = filter_input(INPUT_POST, 'mail');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `admin` SET `password`='$rnew' WHERE `email` = '$mail' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('ad_forgot.html','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}


// employee add_test_result
if (isset($_POST['test_btn'])) {

	$first = filter_input(INPUT_POST, 'fname');
	$middle = filter_input(INPUT_POST, 'mname');
	$last = filter_input(INPUT_POST, 'lname');
	$father = filter_input(INPUT_POST, 'fatname');
	$address = filter_input(INPUT_POST, 'add');
	$contact = filter_input(INPUT_POST, 'con');
	$collection = filter_input(INPUT_POST, 'cdate');
	$test = filter_input(INPUT_POST, 'tdate');
	$time = filter_input(INPUT_POST, 'time');
	$testname = filter_input(INPUT_POST, 'testname');
	$HB = filter_input(INPUT_POST, 'hb');
	$PCV = filter_input(INPUT_POST, 'pcv');
	$RBC = filter_input(INPUT_POST, 'rbc');
	$MCV = filter_input(INPUT_POST, 'mcv');
	$MCH = filter_input(INPUT_POST, 'mch');
	$MCHC = filter_input(INPUT_POST, 'mchc');
	$RDW = filter_input(INPUT_POST, 'rdw');
	$TLC = filter_input(INPUT_POST, 'tlc');
	$PC = filter_input(INPUT_POST, 'pc');
	$description = filter_input(INPUT_POST, 'des');
	if (!empty($first) || !empty($last) || !empty($father) || !empty($address) || !empty($contact) || !empty($collection) || !empty($test) || !empty($time) || !empty($testname) || !empty($HB) || !empty($PCV) || !empty($RBC) || !empty($MCV) || !empty($MCH) || !empty($MCHC) || !empty($RDW) || !empty($TLC) || !empty($PC)) {
		$sql = "INSERT INTO `report`(`first`, `middle`, `last`, `father`, `address`, `contact`, `collection`, `tdate`, `time`, `testname`, `hb`, `pcv`, `rbc`, `mcv`, `mch`, `mchc`, `rdw`, `tlc`, `pc`, `description`) VALUES ('$first', '$middle', '$last', '$father', '$address', '$contact', '$collection', '$test', '$time', '$testname', '$HB', '$PCV', '$RBC', '$MCV', '$MCH', '$MCHC', '$RDW', '$TLC', '$PC', '$description')";
		if ($conn->query($sql)) {
			
			// for generating pdf
			require("fpdf/fpdf.php");
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont("Arial","",16);
			$pdf->Image('fpdf/techniqa.jpg',15,35,190,200);
		
			$pdf->Cell(0,20,"Sir Sunder Lal Hospital",1,1,"C");
			$pdf->Cell(45,10,"First Name: ",1,0);
			$pdf->Cell(45,10,$first,1,0);

			$pdf->Cell(50,10,"Father's Name: ",1,0);
			$pdf->Cell(50,10,$father,1,1);

			$pdf->Cell(45,10,"Middle Name: ",1,0);
			$pdf->Cell(45,10,$middle,1,0);

			$pdf->Cell(50,10,"Contact: ",1,0);
			$pdf->Cell(50,10,$contact,1,1);

			$pdf->Cell(45,10,"Last Name: ",1,0);
			$pdf->Cell(45,10,$last,1,0);

			$pdf->Cell(50,10,"Address: ",1,0);
			$pdf->Cell(50,10,$address,1,1);

			$pdf->Cell(45,10,"Collection Date: ",1,0);
			$pdf->Cell(45,10,$collection,1,0);

			$pdf->Cell(50,10,"Test Date: ",1,0);
			$pdf->Cell(50,10,$test,1,1);

			$pdf->Cell(45,10,"Time: ",1,0);
			$pdf->Cell(45,10,$time,1,0);

			$pdf->Cell(50,10,"Test Name: ",1,0);
			$pdf->Cell(50,10,$testname,1,1);


			$pdf->Ln();
			$pdf->Line(10,85,210-10,85);

			$pdf->Cell(45,10,"Test Details: ",0,1);

			$pdf->Cell(45,10,"Hemoglobin: ",1,0);
			$pdf->Cell(45,10,$HB,1,0);


			$pdf->Cell(50,10,"PCV: ",1,0);
			$pdf->Cell(50,10,$PCV,1,1);


			$pdf->Cell(45,10,"RBC Count: ",1,0);
			$pdf->Cell(45,10,$RBC,1,0);


			$pdf->Cell(50,10,"MCV: ",1,0);
			$pdf->Cell(50,10,$MCV,1,1);


			$pdf->Cell(45,10,"MCH: ",1,0);
			$pdf->Cell(45,10,$MCH,1,0);

			$pdf->Cell(50,10,"MCHC: ",1,0);
			$pdf->Cell(50,10,$MCHC,1,1);


			$pdf->Cell(45,10,"RDW: ",1,0);
			$pdf->Cell(45,10,$RDW,1,0);


			$pdf->Cell(50,10,"TLC: ",1,0);
			$pdf->Cell(50,10,$TLC,1,1);


			$pdf->Cell(45,10,"Platelet Count: ",1,0);
			$pdf->Cell(45,10,$PC,1,1);


			$pdf->Cell(95,20,"Result: ",0,1);
			$pdf->Cell(95,10,$description,0,1);



			$pdf->Cell(0,20,"Sir Sunder Lal Hospital ",0,1,"R");
			$pdf->Ln();

			$pdf->Cell(0,20,"Authorised Signatory",0,1,"R");


			$pdf->output();

			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('emp_add_test.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

if (isset($_POST['app_btn'])) {

	$full = filter_input(INPUT_POST, 'fname');
	$fath = filter_input(INPUT_POST, 'ftname');
	$doc = filter_input(INPUT_POST, 'docname');
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$date = filter_input(INPUT_POST, 'date');
	$time = filter_input(INPUT_POST, 'time');
	$contact = filter_input(INPUT_POST, 'con');
	$email = filter_input(INPUT_POST, 'email');
	if (!empty($full) || !empty($fath) || !empty($doc) ||	!empty($date) || !empty($time) ||!empty($contact) || !empty($email)) {
		$sql = "INSERT INTO `appointment`(`fullname`, `fathername`, `test`, `city`, `state`, `date`, `time`, `contact`, `email`) VALUES ('$full', '$fath', '$doc', '$cty', '$state', '$date', '$time', '$contact', '$email') ";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('appointment.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}


if (isset($_POST['operation_btn'])) {

	$first = filter_input(INPUT_POST, 'fname');
	$middle = filter_input(INPUT_POST, 'mname');
	$last = filter_input(INPUT_POST, 'lname');
	$father = filter_input(INPUT_POST, 'fatname');
	$address = filter_input(INPUT_POST, 'add');
	$contact = filter_input(INPUT_POST, 'con');
	$opdate = filter_input(INPUT_POST, 'opdate');
	$time = filter_input(INPUT_POST, 'time');
	$opname = filter_input(INPUT_POST, 'opname');
	$docname = filter_input(INPUT_POST, 'docname');
    $filename = $_FILES["image"]["name"];
    $temp = $_FILES["image"]["tmp_name"];
    $folder = "images/".$filename;
    move_uploaded_file($temp , $folder);

	if (!empty($first) || !empty($last) || !empty($father) || !empty($address) ||	!empty($contact) || !empty($opdate) ||!empty($opname) || !empty($docname) || !empty($filename)) {
		$sql = "INSERT INTO `operation`(`first`, `middle`, `last`, `father`, `address`, `contact`, `opdate`, `time`, `opname`, `docname`, `image`) VALUES ('$first', '$middle', '$last', '$father', '$address', '$contact', '$opdate', '$time', '$opname', '$docname', '$folder') ";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('emp_add_operations.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

if (isset($_POST['search_btn'])) {
	include('includes/emp_header.php');
	include('includes/emp_nav.php');
	
	$key = filter_input(INPUT_POST, 'search');
	$sql = "SELECT * FROM operation WHERE docname = '$key' ";
	$result = mysqli_query($conn, $sql);
	echo "<div class='container-fluid'><br>
          <h1 class='h3 mb-2 text-gray-800'><i class='fas fa-search' style='color: Blue;'></i> Search Results...</h1><br>
          <div class='card shadow mb-4'>
            <div class='card-header py-3'>
              <h6 class='m-0 font-weight-bold text-primary'>Search By Doctor</h6>
            </div>
            <div class='card-body'>
              <div class='table-responsive'>
                <table class='table table-bordered table-hover' id='dataTable' width='100%'' cellspacing='0'>
                  <thead>
                    <tr>
                      <th>Uploaded Image</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>Fathe's Name</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Operation Date</th>
                      <th>Operation Time</th>
                      <th>Operation Name</th>
                      <th>Doctor Name</th>
                    </tr>
                  </thead>
                  <tbody>";
	while ($row = mysqli_fetch_array($result)) {
		$image = "<a href = ' ".$row['image']."  '><img src = ' ".$row['image']." ' height ='100' width = '100' /></a>";
		$fname = $row['first'];
		$mname = $row['middle'];
		$lname = $row['last'];
		$father = $row['father'];
		$add = $row['address'];
		$con = $row['contact'];
		$opDate = $row['opdate'];
		$time = $row['time'];
		$OpName = $row['opname'];
		$DocName = $row['docname'];

		echo "<tr>
		<td>$image</td>
		<td>$fname</td>
		<td>$mname</td>
		<td>$lname</td>
		<td>$father</td>
		<td>$add</td>
		<td>$con</td>
		<td>$opDate</td>
		<td>$time</td>
		<td>$OpName</td>
		<td>$DocName</td>
		</tr>";
	}
	echo "</tbody></table></div></div></div></div>";


}



if (isset($_POST['ad_search_btn'])) {
	include('includes/header.php');
	include('includes/nav.php');
	
	$key = filter_input(INPUT_POST, 'search');
	$sql = "SELECT * FROM operation WHERE docname = '$key' ";
	$result = mysqli_query($conn, $sql);
	echo "<div class='container-fluid'><br>
          <h1 class='h3 mb-2 text-gray-800'><i class='fas fa-search' style='color: Blue;'></i> Search Results...</h1><br>
          <div class='card shadow mb-4'>
            <div class='card-header py-3'>
              <h6 class='m-0 font-weight-bold text-primary'>Search By Doctor</h6>
            </div>
            <div class='card-body'>
              <div class='table-responsive'>
                <table class='table table-bordered table-hover' id='dataTable' width='100%'' cellspacing='0'>
                  <thead>
                    <tr>
                      <th>Uploaded Image</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>Fathe's Name</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Operation Date</th>
                      <th>Operation Time</th>
                      <th>Operation Name</th>
                      <th>Doctor Name</th>
                    </tr>
                  </thead>
                  <tbody>";
	while ($row = mysqli_fetch_array($result)) {
		$image = "<a href = ' ".$row['image']."  '><img src = ' ".$row['image']." ' height ='100' width = '100' /></a>";
		$fname = $row['first'];
		$mname = $row['middle'];
		$lname = $row['last'];
		$father = $row['father'];
		$add = $row['address'];
		$con = $row['contact'];
		$opDate = $row['opdate'];
		$time = $row['time'];
		$OpName = $row['opname'];
		$DocName = $row['docname'];

		echo "<tr>
		<td>$image</td>
		<td>$fname</td>
		<td>$mname</td>
		<td>$lname</td>
		<td>$father</td>
		<td>$add</td>
		<td>$con</td>
		<td>$opDate</td>
		<td>$time</td>
		<td>$OpName</td>
		<td>$DocName</td>
		</tr>";
	}
	echo "</tbody></table></div></div></div></div>";


}

?>