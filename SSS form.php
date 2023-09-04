
<!DOCTYPE html>
<html>

	<head>
		<title>SSS E1 Form</title>
		<meta name="authors" content="Leila Chichioco, Larkneil Felipe, Jessa Magayo, Lemeul Jeremy Victoria">
		<meta http-equiv="description" content="Educational Purposes">
		<link rel="stylesheet" type="text/css" href="css/style3.css">
		<style>
			h4{
				font-family: Verdana, Geneva, Tahoma, sans-serif; 
				text-align: center;
				color: black;
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
                <a class = "active" href = "SSS form.php">SSS Form</a>
                <a href = "Birth Certificate Application Form.php">Birth Certificate Application Form</a>
                <a href = "Death Certificate Application Form.php">Death Certificate Application Form</a>
                </div>
            </li>
            <li><a href = "about.php">About Us</a></li>
            <li><a href = "AVENGERS.php">Contact Us</a></li>
            <li><a href = "index (2).php">Manage Users</a></li>    
            <li><a href = "logout.php">Logout</a></li>
        </ul>
		<form action="SSS form.php" method="post">
		
		<h4>
			Republic of the Philippines
		</h4>

		<h3>
			SOCIAL SECURITY System <BR>
			PERSONAL RECORD<br>
			FOR ISSUANCE OF SSS NUMBER</h3>
		<table style="color:black"width="60%" border=".5" align="center" bgcolor="White">
			<tr><th colspan="10">THIS FORM MAY BE REPRODUCED AND IS NOT FOR SALE. THIS CAN ALSO BE DOWNLOADED THRU THE SSS WEBSITE AT www.sss.gov.ph</th></tr>
			<tr bgcolor = "" align="center">
				<th colspan="10">PART I - TO BE FILLED OUT BY THE REGISTRANT</th>
			</tr>
            <tr style="font-size:11px" bgcolor = "" align="center">
				<th colspan="10">A. PERSONAL DATA</th>
			</tr>
			<tr style="font-size:11px" align="center">
                <td>NAME:</td>
				<td>Last Name<br/><input type="text" name="lastname" size="3"></td>
				<td>First Name<br/><input type="text" name="firstname" size="3"></td>
				<td colspan = "2">Middle Name<br/><input type="text" name="middlename" size="3"></td>
                <td>Suffix<br/><input type="text" name="suffixname" size="3"></td>
				<td>Date of Birth:</td>
				<td>MM<br/><input type="text" name="month" size="3"></td>
				<td>DD<br/><input type="text" name="day" size="3"></td>
				<td>YYYY<br/><input type="text" name="year" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
								<td colspan ="3">TAX IDENTIFICATION NUMBER(if any)<br/><input type="text" name="qyear2" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan = "2">NATIONALITY<br/><input type="text" name="nat" size="3"></td>
				<td colspan = "2" >RELIGION<br/><input type="text" name="rel" size="3"></td>
				<td>PLACE OF BIRTH</td>
				<td colspan = "2" >(City/Municipality, Province)<br/><input type="text" name="prov" size="3"></td>
				<td colspan = "3" >(City, Country(If born outside Philippines))<br/><input type="text" name="prov1" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td rowspan = "2">HOME ADDRESS</td>
				<td colspan = "3" >(rm./flr./unit no. & bldg. name)<br/><input type="text" name="bldg" size="3"></td>
				<td colspan = "2">(house/lot & blk. no.)<br/><input type="text" name="blk" size="3"></td>
				<td colspan = "2" >(street name)<br/><input type="text" name="street" size="3"></td>
				<td colspan = "2" >(subdivision)<br/><input type="text" name="subd" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan = "2" >(barangay/district/locality)<br/><input type="text" name="brgy" size="3"></td>
				<td colspan = "2">(city/municipality)<br/><input type="text" name="muni" size="3"></td>
				<td colspan = "2" >(province)<br/><input type="text" name="province" size="3"></td>
				<td colspan = "2" >(country)<br/><input type="text" name="country" size="3"></td>
				<td>(zipcode)<br/><input type="text" name="zipcode" size="3"></td>
			</tr>			
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan = "3" >MOBILE/CELLPHONE NUMBER<br/><input type="text" name="mobileno" size="3"></td>
				<td colspan = "3" >E-MAIL ADDRESS<br/><input type="text" name="email" size="3"></td>
				<td colspan = "4" >TELEPHONE NUMBER(country code+area code+tel no.)<br/><input type="text" name="phoneno" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan = "2" >FATHER</td>
				<td colspan = "2">(Last Name)<br/><input type="text" name="flastname" size="3"></td>
				<td colspan = "2" >(First Name)<br/><input type="text" name="ffirstname" size="3"></td>
				<td colspan = "2" >(Middle Name)<br/><input type="text" name="fmiddlename" size="3"></td>
				<td colspan = "2">(Suffix)<br/><input type="text" name="fsuffix" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan = "2" >MOTHER'S MAIDEN NAME</td>
				<td colspan = "2">(Last Name)<br/><input type="text" name="mlastname" size="3"></td>
				<td colspan = "2" >(First Name)<br/><input type="text" name="mfirstname" size="3"></td>
				<td colspan = "2" >(Middle Name)<br/><input type="text" name="mmiddlename" size="3"></td>
				<td colspan = "2">(Suffix)<br/><input type="text" name="msuffix" size="3"></td>
			</tr>
			<tr bgcolor = "" align="center">
				<th colspan="10">B. DEPENDENT(S)/BENEFICIARY/IES</th>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
                <td rowspan="2">SPOUSE:</td>
				<td rowspan="2" colspan = "2">Last Name<br/><input type="text" name="slastname" size="3"></td>
				<td rowspan="2" colspan = "2">First Name<br/><input type="text" name="sfirstname" size="3"></td>
				<td rowspan="2">Middle Name<br/><input type="text" name="smiddlename" size="3"></td>
                <td rowspan="2">Suffix<br/><input type="text" name="ssuffixname" size="3"></td>
				<td colspan="4">Date of Birth:</td>
			</tr>
			<tr style="font-size:11px">
				<td>MM<br/><input type="text" name="month1" size="3"></td>
				<td>DD<br/><input type="text" name="day1" size="3"></td>
				<td>YYYY<br/><input type="text" name="year1" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
                <td rowspan="2">CHILDREN: 1.</td>
				<td rowspan="2" colspan = "2">Last Name<br/><input type="text" name="clastname" size="3"></td>
				<td rowspan="2" colspan = "2">First Name<br/><input type="text" name="cfirstname" size="3"></td>
				<td rowspan="2">Middle Name<br/><input type="text" name="cmiddlename" size="3"></td>
                <td rowspan="2">Suffix<br/><input type="text" name="csuffixname" size="3"></td>
				<td colspan="4">Date of Birth:</td>
			</tr>
			<tr style="font-size:11px">
				<td>MM<br/><input type="text" name="month2" size="3"></td>
				<td>DD<br/><input type="text" name="day2" size="3"></td>
				<td>YYYY<br/><input type="text" name="year2" size="3"></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
                <td>2.</td>
				<td colspan = "2"><input type="text" name="lastname1" size="3"></td>
				<td colspan = "2"><input type="text" name="firstname1" size="3"></td>
				<td><input type="text" name="middlename1" size="3"></td>
                <td><input type="text" name="suffixname1" size="3"></td>
				<td><input type="text" name="cmonth2" size="3"></td>
				<td><input type="text" name="cday2" size="3"></td>
				<td><input type="text" name="cyear2" size="3"></td>
			</tr>
			
			<tr style="font-size:11px"align = "center">
				<td colspan="5">OTHER BENEFICIARIES(if without spouse & child and parents are both deceased)</td>
				<td>RELATIONSHIP
				<td colspan="4">Date of Birth:</td>
			</tr>
			<tr style="font-size:11px"align = "center">
				<td>1.</td>
				<td colspan = "2">Last Name<br/><input type="text" name="lastname2" size="3"></td>
				<td colspan = "2">First Name<br/><input type="text" name="firstname2" size="3"></td>
				<td>Middle Name<br/><input type="text" name="middlename2" size="3"></td>
				<td>Suffix<br/><input type="text" name="suffixname2" size="3"></td>
				<td>MM<br/><input type="text" name="month3" size="3"></td>
				<td>DD<br/><input type="text" name="day3" size="3"></td>
				<td>YYYY<br/><input type="text" name="year3" size="3"></td>
			</tr>
			<tr style="font-size:11px"align = "center">
				<td>2.</td>
				<td colspan = "2"><input type="text" name="lastname3" size="3"></td>
				<td colspan = "2"><input type="text" name="firstname3" size="3"></td>
				<td><input type="text" name="middlename3" size="3"></td>
				<td><input type="text" name="suffixname3" size="3"></td>
				<td><input type="text" name="smonth3" size="3"></td>
				<td><input type="text" name="sday3" size="3"></td>
				<td><input type="text" name="syear3" size="3"></td>
			</tr>
			<tr bgcolor = "" align="center">
				<th colspan="10">C. FOR SELF-EMPLOYED/OVERSEAS FILIPINO WORKER/NON-WORKING SPOUSE</th>
			</tr>
			<tr style="font-size:11px" bgcolor = "" align="center">
				<th colspan="2">SELF-EMPLOYED(SE)</th>
				<th colspan="5">OVERSEAS FILIPINO WORKER(OFW)</th>
				<th colspan="3">NON-WORKING SPOUSE(NWS)</th>
			</tr>
			<tr style="font-size:11px"align="center">
				<td colspan="2">Profession/Business<br/><input type="text" name="prof" size="3"><br/>
					Year Prof./Business Started<br><input type="text" name="yearprof" size="3"><br/>
					Monthly Earnings<br/><input type="text" name="earning" size="3"></td>
				<td colspan="5">Foreign Address<br/><textarea name="foradd" cols="50" wrap="hard"></textarea><br/>
					Monthly Earnings<br/><input type="text" name="earning1" size="3"><br/>
				
				<td colspan="3">SS No./Common Reference No. of Working Spouse<br/><input type="text" name="earning2" size="3"><br/>
					Monthly Income of Working Spouse<br/><input type="text" name="income" size="3"><br/>
					SIGNATURE OVER PRINTED NAME OF WORKING SPOUSE</td>
			</tr>
			<tr bgcolor = "" align="center">
				<th colspan="10">D.CERTIFICATION</th>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan="6">I certify that the information provided in this form are true and correct.<br/>
					(If registrant cannot sign, affix fingerprints in the presence of an SSS personnel)</td>
				<td colspan="4">Registrant is required to affix fingerprints.</td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan="2"><br/><input type="text" name="printname" size="3"><br/>PRINTED NAME</td>
				<td colspan="3"><br/><br/>SIGNATURE</td>
				<td><br/><input type="text" name="dates" size="3"><br/>DATE</td>
				<td colspan="2"><br/><br/><br/>RIGHT THUMB</td>
				<td colspan="2"><br/><br/><br/>RIGHT INDEX</td>
			</tr>
		
			<tr>
                <td colspan="10">
                    <input type="submit" name="submit" value="SAVE">
                    <input type="Reset" name="clear" Value="RESET">
                    &emsp;&emsp; <a href="Philhealth Application Form.php" target="blank"><font color="black">Previous</font> </a></th>                      
                        &emsp;&emsp; <a href="Birth Certificate Application Form.php" target="blank"><font color="Black">Next</font> </a></th>
        
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
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $suffixname = $_POST['suffixname'];
      $month = $_POST['month'];
      $day = $_POST['day'];
      $year = $_POST['year'];
      $qyear2 = $_POST['qyear2'];
      $nat = $_POST['nat'];
      $rel = $_POST['rel'];
      $prov = $_POST['prov'];
      $prov1 = $_POST['prov1'];
      $bldg = $_POST['bldg'];
      $blk = $_POST['blk'];
      $street = $_POST['street'];
      $subd = $_POST['subd'];
      $brgy = $_POST['brgy'];
      $muni = $_POST['muni'];
      $province = $_POST['province'];
      $country = $_POST['country'];
      $zipcode = $_POST['zipcode'];
      $mobileno = $_POST['mobileno'];
      $email = $_POST['email'];
      $phoneno = $_POST['phoneno'];
      $flastname = $_POST['flastname'];
      $ffirstname = $_POST['ffirstname'];
      $fmiddlename = $_POST['fmiddlename'];
      $fsuffix = $_POST['fsuffix'];
      $month1 = $_POST['month1'];
      $day1 = $_POST['day1'];
      $year1 = $_POST['year1'];
      $clastname = $_POST['clastname'];
      $cfirstname = $_POST['cfirstname'];
      $cmiddlename = $_POST['cmiddlename'];
      $csuffixname = $_POST['csuffixname'];
      $month2 = $_POST['month2'];
      $day2 = $_POST['day2'];
      $year2 = $_POST['year2'];
	  $lastname1 = $_POST['lastname1'];
      $firstname1 = $_POST['firstname1'];
	  $middlename1 = $_POST['middlename1'];
	  $suffixname1 = $_POST['suffixname1'];
	  $cmonth2 = $_POST['cmonth2'];
	  $cday2 = $_POST['cday2'];
	  $cyear2 = $_POST['cyear2'];
	  $lastname2 = $_POST['lastname2'];
	  $firstname2 = $_POST['firstname2'];
	  $middlename2 = $_POST['middlename2'];
	  $suffixname2 = $_POST['suffixname2'];
	  $month3 = $_POST['month3'];
	  $day3 = $_POST['day3'];
	  $year3 = $_POST['year3'];
	  $lastname3 = $_POST['lastname3'];
	  $firstname3 = $_POST['firstname3'];
	  $middlename3 = $_POST['middlename3'];
	  $suffixname3 = $_POST['suffixname3'];
	  $smonth3 = $_POST['smonth3'];
	  $sday3 = $_POST['sday3'];
	  $syear3 = $_POST['syear3'];
	  $prof = $_POST['prof'];
	  $yearprof = $_POST['yearprof'];
	  $earning = $_POST['earning'];
	  $foradd = $_POST['foradd'];
	  $earning1 = $_POST['earning1'];
	  $earning2 = $_POST['earning2'];
	  $income = $_POST['income'];
	  $printname = $_POST['printname'];
	  $dates = $_POST['dates'];




         $data  = mysqli_query($mysqli, "INSERT INTO sss(lastname,firstname,middlename,suffixname,month,day,year,qyear2,nat,rel,prov,prov1,bldg,blk,street,subd,brgy,muni,province,country,zipcode,mobileno,email,phoneno,flastname,ffirstname,fmiddlename,fsuffix,month1,day1,year1,clastname,cfirstname,cmiddlename,csuffixname,month2,day2,year2,lastname1,firstname1,middlename1,suffixname1,cmonth2,cday2,cyear2,lastname2,firstname2,middlename2,suffixname2,month3,day3,year3,lastname3,firstname3,middlename3,suffixname3,smonth3,sday3,syear3,prof,yearprof,earning,foradd,earning1,earning2,income,printname,dates)
                                          VALUES('$lastname','$firstname','$middlename','$suffixname','$month','$day','$year','$qyear2','$nat','$rel','$prov'
                                          ,'$prov1','$bldg','$blk','$street','$subd','$brgy','$muni','$province','$country','$zipcode','$mobileno','$email','$phoneno','$flastname','$ffirstname','$fmiddlename','$fsuffix','$month1','$day1','$year1','$clastname','$cfirstname','$cmiddlename','$csuffixname','$month2','$day2','$year2','$lastname1','$firstname1','$middlename1','$suffixname1','$cmonth2','$cday2','$cyear2','$lastname2','$firstname2','$middlename2','$suffixname2','$month3','$day3','$year3','$lastname3','$firstname3','$middlename3','$suffixname3','$smonth3','$sday3','$syear3','$prof','$yearprof','$earning','$foradd','$earning1','$earning2','$income','$printname','$dates')");
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