<!DOCTYPE html>
<html>

	<head>
		<title>Birth Certificate Application Form</title>
        <link rel="stylesheet" href="css1.css" type="text/css">
        <meta name="authors" content="Leila Chichioco, Larkneil Felipe, Jessa Magayo, Lemuel Jeremy Victoria">
		<meta http-equiv="description" content="Educational Purposes">
        <style>
            body{
                background-image: url(five.jpg);
	               background-size: cover;
	             background-attachment: fixed;
	             background-repeat: no-repeat;
                 color: white;
            }
        </style>
	</head>

	<body>
        <header style="height:auto; text-align: center; background-color: #6e6260; font-family: 'Courier New', Courier, monospace; ">
            <h1>AVENGERS GROUP</h1>
        </header>
        <ul>
            <li><a href = "Goverment Documents Main Page.php">Home</a></li>
            <li class = "dropdown">
                <a href = "#" class = "dropbtn">Government Forms</a>
                <div class = "dropdown-content">
                <a href = "Marriage Certificate Application Form.php">Marriage Certificate Application Form</a>
                <a href = "PhilHealth Application Form.php">PhilHealth Application Form</a>
                <a href = "SSS form.php">SSS Form</a>
                <a class = "active" href = "Birth Certificate Application Form.php">Birth Certificate Application Form</a>
                <a href = "Death Certificate Application Form.php">Death Certificate Application Form</a>
                </div>
            </li>
            <li><a href = "about.php">About Us</a></li>
            <li><a href = "AVENGERS.php">Contact Us</a></li>
            <li><a href = "index (2).php">Manage Users</a></li>    
            <li><a href = "logout.php">Logout</a></li>
        </ul>
        <form action="Birth Certificate Application Form.php" method="post">
		<br>
		<h1 style= "font-family:'Verdana'; text-align: center;">
			THIS FORM IS NOT FOR SALE
		</h1>
        <h5 style= "font-family:'Verdana'; text-align: center;">
			Republic of the Philippines<br/>
            Philippine Statistics Authority
		</h5>
        <h4 style= "font-family:'Verdana'; text-align: center;">
			OFFICE OF THE CIVIL REGISTRAR GENERAL<br/>
            APPLICATION FORM - BIRTH CERTIFICATION
		</h4>
		<table style="color:black" width ="60%" border=".5" align="center" bgcolor="White">
            <tr>
				<th colspan="10">IMPORTANT: PLEASE READ GENERAL INSTRUCTIONS BEFORE FILLING OUT THE FORM</th>
          </tr>
            <tr>
               <td colspan="2">
                    1. Please PRINT letters in the spaces provided.<br/>
                    2. A valid ID is required for both owner & requester of document.<br/>
                    3. An authorization is required from representative upon filing of the application. 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                     Number of Copies:
                         OTHERS(Specify): <input type="text" name="others" size="3">
                 </td>
             </tr>
            <tr>
                <td colspan="2">
                    Birth Reference No. BRen(If known) <input type="text" name="bren" size="7">
                </td>
            </tr>           
            <tr>
                <td>
                    OWNER'S PERSONAL INFORMATION<br>
                    Last Name<br> 
                    First Name<br>
                    Middle Name<br>
                    <br>
                    Date of Birth<br>
                    Place of Birth &emsp; (City/Municipality)<br>
                     &emsp;&emsp;&emsp;&emsp;(Province)
                </td>
                <td>
                    <br>
                    <input type="text" name="lastname" size="15"> <br>
                    <input type="text" name="firstname" size="15"> <br>
                    <input type="text" name="middlename" size="15"> <br>
                    <br>
                    <input type="text" name="dob" size="15"> <br>
                    <input type="text" name="pob" size="15"> <br>
                    <input type="text" name="prov" size="15">
                </td>
            </tr>
            
            <tr>
                <td>
                    Please specify country if born abroad only:
                </td>
                <td>
                    Country: <input type="text" name="country" size="15">
                </td>
            </tr>
            <tr>
                <td >
                    NAME OF FATHER <br>
                    Last Name <br>
                    First Name <br>
                    Middle Name <br>    
                    MAIDEN NAME OF MOTHER <br>
                    Last Name <br>
                    First Name <br>
                    Middle Name <br>         
                </td>
                <td>
                    <br>
                    <input type="text" name="lastname1" size="15"> <br>
                    <input type="text" name="firstname1" size="15"> <br>
                    <input type="text" name="middlename1" size="15"> <br>
                    <br>
                    <input type="text" name="lastname2" size="15"> <br>
                    <input type="text" name="firstname2" size="15"> <br>
                    <input type="text" name="middlename2" size="15">
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    Requester's Tax Identification No. (TIN) (if know) &emsp;&emsp;
                    <input type="text" name="tin" size="15">
               </td>
            </tr>
            <tr>
                <th colspan="2">
                    PLEASE TURN TO NEXT PAGE
                </th>
            </tr>
            <tr>
                <td>
                    FOR PSA USE ONLY <br> TRANSACTION NUMBER:
                </td>
                <td>
                    <input type="text" name="tn" size="15">
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    REQUESTER'S INFORMATION <br>
                    Last Name &emsp; &emsp;&emsp;&emsp;&emsp; First Name &emsp; &emsp;&emsp;&emsp; Middle Initial <br>
                    <input type="text" name="lname" size="15"> &emsp; &emsp;&emsp;
                    <input type="text" name="fname" size="15"> &emsp; &emsp;&emsp;
                    <input type="text" name="mi" size="15"> <br>
                    Mailing address: <input type="text" name="add1" size="15"> <br>
                    City/Municipality: <input type="text" name="city" size="15"> <br>
                    Province: <input type="text" name="prov1" size="15"> <br>
                    Tel. No. <input type="text" name="telno" size="15"> <br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    NOTE: AUTHORIZATION and ID of the document owner together with the requester's ID are required if the requester  is NOT any of the following: <br>
                    a. the owner of the document; &emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; d. his/her direct descendant;<br>
                    b. his/her parent; &emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; e. his/her legal guardian/institution-in-charge, if minor. <br>
                    c. his/her spouse; <br>
                    I understand that as per PD 603 (Child and Youth Welfare Code), birth certificate documents, if available in his 
                    office, cannot be released to me without proper authorization from the owner of the document, his/her parent 
                    (if minor), his/her spouse, his/her direct descendant, or his/her authorized guardian/institution-in-charge. <br>
                        <input type="text" name="sign" size="15"> <br> 
                        Signature of Requester   
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    FOR PSA USE ONLY
                </td>
            </tr>
            <tr>
                <td>
                    Date of Filing: &emsp;&emsp; MONTH<input type="text" name="month" size="5"> &emsp;&emsp;DAY <input type="text" name="day" size="5"> &emsp;&emsp;
                        YEAR<input type="text" name="year" size="5"> <br>
                        Date of Release: &emsp;&emsp; MONTH<input type="text" name="month1" size="5"> &emsp;&emsp;DAY <input type="text" name="day1" size="5"> &emsp;&emsp;
                        YEAR<input type="text" name="year1" size="5">
                </td>
                
            </tr>
            <tr>
                <td colspan="2">
                    Received by: <input type="text" name="rby" size="5"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Date of Receipt: <input type="text" name="date" size="5">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="SAVE">
                    <input type="Reset" name="clear" Value="RESET">
                    &emsp;&emsp; <a href="SSS form.php" target="blank"><font color="black">Previous</font> </a></th>                      
                        &emsp;&emsp; <a href="Death Certificate Application Form.php" target="blank"><font color="Black">Next</font> </a></th>
        
                </td>
            </tr>
        </table>

        <?php
  //including the database connection file
  include_once("dbconfig.php");

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,'finalproj');

  // Check If form submitted, insert user data into database.
  if (isset($_POST['submit'])) {
      $others = $_POST['others'];
      $bren = $_POST['bren'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $dob = $_POST['dob'];
      $pob = $_POST['pob'];
      $prov = $_POST['prov'];
      $country = $_POST['country'];
      $lastname1 = $_POST['lastname1'];
      $firstname1 = $_POST['firstname1'];
      $middlename1 = $_POST['middlename1'];
      $lastname2 = $_POST['lastname2'];
      $firstname2 = $_POST['firstname2'];
      $middlename2 = $_POST['middlename2'];
      $tin = $_POST['tin'];
      $tn = $_POST['tn'];
      $lname = $_POST['lname'];
      $fname = $_POST['fname'];
      $mi = $_POST['mi'];
      $add1 = $_POST['add1'];
      $city = $_POST['city'];
      $prov1 = $_POST['prov1'];
      $telno = $_POST['telno'];
      $sign = $_POST['sign'];
      $month = $_POST['month'];
      $day = $_POST['day'];
      $year = $_POST['year'];
      $month1 = $_POST['month1'];
      $day1 = $_POST['day1'];
      $year1 = $_POST['year1'];
      $rby = $_POST['rby'];
      $date = $_POST['date'];


         $data  = mysqli_query($mysqli, "INSERT INTO birth(others,bren,lastname,firstname,middlename,dob,pob,prov,country,lastname1,firstname1,middlename1,lastname2,firstname2,middlename2,tin,tn,lname,fname,mi,add1,city,prov1,telno,sign,month,day,year,month1,day1,year1,rby,date)
                                          VALUES('$others','$bren','$lastname','$firstname','$middlename','$dob','$dob','$prov','$country','$lastname1','$firstname1'
                                          ,'$middlename1','$lastname2','$firstname2','$middlename2','$tin','$tn','$lname','$fname','$mi','$add1','$city','$prov1','$telno','$sign','$month','$day','$year','$month1','$day1','$year1','$rby','$date')");
         $data_run = mysqli_query($connection,$data);

      if($data_run)
      {
            echo '<script type="text/javascript"> alert("Data not Saved") </script>';
      }
      else
      {
            echo '<script type="text/javascript"> alert("Data Saved") </script>';
      }

    }
          
?>


        </form>
        <br>
        <br> 
        <br>
        <br>
        <h4>DISCLAIMER</h4>
        <h5>These Government Forms are only for Educational Purposes. <br>
            We will not make or sell any of these copies to anyone else.
        </h5>              
   <footer style="height:auto; text-align: center; background-color: #6e6260; font-family: 'Courier New', Courier, monospace; ">
       <table>
           <tr>
               <td width ="33%">
                   Group Members: <br>
                   Leila Chichioco, Jessa Magayo<br>
                   Larkneil Felipe, Lemuel Jeremy Victoria
               </td>
               <td width ="34%">
                   Course: ITEL 203 - Web Systems and Technologies<br>
                   Program: Bachelor of Science in Information Technology
                   
               </td>
               <td width ="33%">
                   Year and Section: 2C<br>
                   Academic Year 2020 - 2021 Second Semester
               </td>
           </tr>
       </table>
	</body>
</html>