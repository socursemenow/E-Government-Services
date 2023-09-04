
<!DOCTYPE html>
<html>

	<head>
		<title>Death Certificate Application Form</title>
        <meta name="authors" content="Leila Chichioco, Larkneil Felipe, Jessa Magayo, Lemuel Jeremy Victoria">
		<meta http-equiv="description" content="Educational Purposes">
        <link rel="stylesheet" type="text/css" href="css/style6.css">
        <style>
            h1{
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
            }
        </style>
	</head>

	<body>
        <header style="height:auto; text-align: center; background-color: #6e6260;"></header>
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
                <a href = "Birth Certificate Application Form.php">Birth Certificate Application Form</a>
                <a class = "active" href = "Death Certificate Application Form.php">Death Certificate Application Form</a>
                </div>
            </li>
            <li><a href = "about.php">About Us</a></li>
            <li><a href = "AVENGERS.php">Contact Us</a></li>
            <li><a href = "index (2).php">Manage Users</a></li>    
            <li><a href = "logout.php">Logout</a></li>
        </ul>
        <form action="Death Certificate Application Form.php" method="post">
		<br>
		<h1>
			THIS FORM IS NOT FOR SALE
		</h1>
        <h4>
			Republic of the Philippines<br/>
            Philippine Statistics Authority
            <br>
			OFFICE OF THE CIVIL REGISTRAR GENERAL<br/>
            APPLICATION FORM - DEATH CERTIFICATION
		</h4>
		<table style="color:black" width ="60%" border=".5" align="center" bgcolor="White">
            <tr style="font-size:11px"align="center">
				<th colspan="10">IMPORTANT: PLEASE READ GENERAL INSTRUCTIONS BEFORE FILLING OUT THE FORM</th>
          </tr>
            <tr style="font-size:11px"align="left">
               <td colspan="2">
                    1. Please PRINT letters in the spaces provided. Please CHECK appropriate box(es).
              </td>
            </tr>
            
            <tr style="font-size:11px"align="center">
                <td colspan="2">
                     Number of Copies: 
                         (Specify): <input type="text" name="others" size="3">
                 </td>
             </tr>
            <tr style="font-size:11px"align="center">
                <td colspan="2">
                    Birth Reference No. BRen(If known) <input type="text" name="bren" size="7">
                    
                </td>
            </tr>           
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    OWNER'S PERSONAL INFORMATION (For married female, please use maiden name)<br>
                    Last Name &emsp;&emsp;&emsp;&emsp; <input type="text" name="lastname" size="15"> <br>
                    First Name &emsp;&emsp;&emsp;&emsp;<input type="text" name="firstname" size="15"> <br>
                    Middle Name &emsp;&emsp;&emsp;&emsp;<input type="text" name="middlename" size="15"> <br>
                    Date of Birth Name &emsp;&emsp;&emsp;<input type="text" name="dob" size="15"> <br>
                    Place of Death &emsp;&emsp;&emsp;&emsp; (City/Municipality)<input type="text" name="pob" size="15"> <br>
                    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;(Province)<input type="text" name="prov" size="15">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    Please specify country if born abroad only:
                </td>
                <td>
                    Country: <input type="text" name="country" size="15">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    REGISTERED LATE? <br>
                    When: <input type="text" name="whens" size="15">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    Requester's Tax Identification No. (TIN) (if know) &emsp;&emsp;
                    <input type="text" name="tin" size="15">
               </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    FOR PSA USE ONLY <br> TRANSACTION NUMBER:
                </td>
                <td>
                    <input type="text" name="tn" size="15">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    PURPOSE: Choose one and check appropriate box. <br>
                   
                    (Specify Country)<input type="text" name="country1" size="15"> &emsp;
                    Others (Specify)<input type="text" name="others1" size="15"> &emsp;<br>
                    Employment (Abroad)(Specify Country)<input type="text" name="country2" size="15"> &emsp;
                </td>
            </tr>
            <tr style="font-size:11px"align="center">
                <th colspan="2">
                    PLEASE TURN TO NEXT PAGE
                </th>
            </tr>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    FOR PSA USE ONLY
                </td>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    REQUESTER'S INFORMATION <br>
                    Last Name &emsp; &emsp;&emsp;&emsp; First Name &emsp; &emsp;&emsp;&emsp; Middle Initial <br>
                    <input type="text" name="lname" size="15"> &emsp; &emsp;&emsp;&emsp;
                    <input type="text" name="fname" size="15"> &emsp; &emsp;&emsp;&emsp;
                    <input type="text" name="mi" size="15"> <br>
                    Mailing address: <input type="text" name="adds" size="15"> <br>
                    City/Municipality: <input type="text" name="city" size="15"> <br>
                    Province: <input type="text" name="prov1" size="15"> <br>
                    Tel. No. <input type="text" name="telno" size="15"> <br>
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    FOR PSA USE ONLY
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    Date of Filing: &emsp;&emsp; MONTH<input type="text" name="month" size="5"> &emsp;&emsp;DAY <input type="text" name="day" size="5"> &emsp;&emsp;
                        YEAR<input type="text" name="year" size="5"> <br>
                        Date of Release: &emsp;&emsp; MONTH<input type="text" name="month1" size="5"> &emsp;&emsp;DAY <input type="text" name="day2" size="5"> &emsp;&emsp;
                        YEAR<input type="text" name="year2" size="5">
                </td>
                <td>
                    
                    For CDLI request only: <br>
                    CDLI Type: <input type="text" name="cdli" size="5"> <br>
                    <input type="text" name="pages" size="5">pages <br>
                    <input type="text" name="pages1" size="5">pages <br>
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td colspan="2">
                    Received by: <input type="text" name="rby" size="5"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Date of Receipt: <input type="text" name="dates" size="5">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="SAVE">
                    <input type="Reset" name="clear" Value="RESET">
                    &emsp;&emsp; <a href="Birth Certificate Application Form.php" target="blank"><font color="black">Previous</font> </a></th>                      
                    &emsp;&emsp; <a href="Goverment Documents Main Page.php" target="blank"><font color="Black">Next</font> </a></th>

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
      $whens = $_POST['whens'];
      $tin = $_POST['tin'];
      $tn = $_POST['tn'];
      $country1 = $_POST['country1'];
      $others1 = $_POST['others1'];
      $country2 = $_POST['country2'];
      $lname = $_POST['lname'];
      $fname = $_POST['fname'];
      $mi = $_POST['mi'];
      $adds = $_POST['adds'];
      $city = $_POST['city'];
      $prov1 = $_POST['prov1'];
      $telno = $_POST['telno'];
      $month = $_POST['month'];
      $day = $_POST['day'];
      $year = $_POST['year'];
      $month1 = $_POST['month1'];
      $day2 = $_POST['day2'];
      $year2 = $_POST['year2'];
      $cdli = $_POST['cdli'];
      $pages = $_POST['pages'];
      $pages1 = $_POST['pages1'];
      $rby = $_POST['rby'];
      $dates = $_POST['dates'];


         $data  = mysqli_query($mysqli, "INSERT INTO death(others,bren,lastname,firstname,middlename,dob,pob,prov,country,whens,tin,tn,country1,others1,country2,lname,fname,mi,adds,city,prov1,telno,month,day,year,month1,day2,year2,cdli,pages,pages1,rby,dates)
                                          VALUES('$others','$bren','$lastname','$firstname','$middlename','$dob','$pob','$prov','$country','$whens','$tin','$tn','$country1','$others1','$country2','$lname','$fname','$mi','$adds','$city','$prov1','$telno','$month','$day','$year','$month1','$day2','$year2','$cdli','$pages','$pages1','$rby','$dates')");
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