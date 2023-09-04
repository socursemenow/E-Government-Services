<!DOCTYPE html>
<html>

	<head>
		<title>Philhealth Application Form</title>
        <link rel="stylesheet" type="text/css" href="css/style5.css">
		<meta name="authors" content="Leila Chichioco, Larkneil Felipe, Jessa Magayo, Lemuel Jeremy Victoria">
		<meta http-equiv="description" content="Educational Purposes">
        <style>
            h1{
                height: auto;
                font-family: 'Courier New', Courier, monospace;
                background-color: #6e6260;
                text-align: center;
            }
            body {
                  background-image: url(three.jpg);
	               background-size: cover;
	             background-attachment: fixed;
	             background-repeat: no-repeat;
                 color: white;
            }
        </style>
	</head>

	<body style= "font-family:Verdana"; bgcolor = "403234"; text ="F7F3F5">
        <header style="height:auto; text-align: center; background-color: #6e6260; font-family: 'Courier New', Courier, monospace; ">
            <h1>AVENGERS GROUP</h1>
        </header>
        <ul>
            <li><a href = "Goverment Documents Main Page.php">Home</a></li>
            <li class = "dropdown">
                <a href = "#" class = "dropbtn">Government Forms</a>
                <div class = "dropdown-content">
                <a href = "Marriage Certificate Application Form.php">Marriage Certificate Application Form</a>
                <a class = "active" href = "PhilHealth Application Form.php">PhilHealth Application Form</a>
                <a href = "SSS form.php">SSS Form</a>
                <a href = "Birth Certificate Application Form.php">Birth Certificate Application Form</a>
                <a href = "Death Certificate Application Form.php">Death Certificate Application Form</a>
                </div>
            </li>
            <li><a href = "about.php">About Us</a></li>
            <li><a href = "AVENGERS.php">Contact Us</a></li>
            <li><a href = "index (2).php">Manage Users</a></li>    
            <li><a href = "logout.php">Logout</a></li>
        </ul>
		<form action="Philhealth Application Form.php" method="post">
		
                <h4 style= "font-family:Verdana; text-align: center;">
                    Republic of the Philippines
                </h4>
        
                <h3 style= "font-family:Verdana; text-align: center;">
                    PHILHEALTH <BR>
                    PERSONAL RECORD<br>
                    FOR ISSUANCE OF PHILHEALTH</h3>
        
		<table style="color:black"width="60%" border=".5" align="center" bgcolor="White">
            <tr style="font-size:9px" align="left">
                <td colspan = "7" >
                    <p style ="font-size:20px"><strong>PhilHealth</strong></p>
                    <p><i>Your Partner in Health</i></p>
                    <p style ="font-size:12px"><strong><u>REMINDERS:</strong></u></p>
                    <p>1. Your PhilHealth Identification Number (PIN) is your unique and permanent</p>
                    <p>&nbsp;&nbsp;&nbsp; number.</p>
                    <p>2. Always use your PIN in all transactions with PhilHealth.</p>
                    <p>3. For Updating/Amendment check the appropriate box and provide details to</p>
                    <p>&nbsp;&nbsp;&nbsp; be accomplished and submit corresponding supporting documents.</p>
                    <p>4. Please read instructions at the back before filling-out this form.</p>
                </td>
                <td colspan = "5" align= "center" style="vertical-align: top;">
                    <p style ="font-size:20px"><strong>PMRF</strong></p>
                    <p style ="font-size:12px" text-indent: -10px;><strong>PHILHEALTH MEMBER REGISTRATION FORM</strong></p>
                    <p><strong>UHC v.1 January 2020</strong><br/><input type="text" name="identification" size="30"><br/>
                    <strong>PHILHEALTH IDENTIFICATION NUMBER (PIN)</strong></p>
                    <p style = "font-size:12px" align = "left"><strong>PURPOSE:</strong></p>
                    
                    <p style = "font-size:10px"><strong>Preferred KonSulTa Provider</strong><br/><input type="text" name="konsulta" size="40"></p>
                </td>
	
			</tr>
			<tr style="font-size:11px"align="center">
				<th colspan="10">I: PERSONAL DETAILS</th>
            </tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td ></td>
				<td colspan = "2" ><strong>LAST NAME</strong><br/></td>
				<td colspan = "2" ><strong>FIRST NAME</strong><br/></td>
				<td ><strong>NAME</strong><br/><strong>EXTENSION</strong><br/><Strong>(Jr./Sr./III)</Strong></td>
				<td colspan = "2" ><strong>MIDDLE NAME</strong><br/></td>
                <td ><strong>NO</strong><br/><strong>MIDDLE</strong><br/><strong>NAME</strong></td>
                <td ><strong>MONONYM</strong></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td ><strong>MEMBER</strong></td>
				<td colspan = "2" ><br/><input type="text" name="lastname" ></td>
				<td colspan = "2" ><br/><input type="text" name="firstname" ></td>
				<td ><br/><input type="text" name="extension" ></td>
				<td colspan = "2" ><br/><input type="text" name="middlename" ></td>
                <td ><br/><input type="text" name="nomiddlename" ></td>
                <td ><br/><input type="text" name="mononym" ></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td ><strong>MOTHER's</strong><br/><strong>MAIDEN NAME</strong></td>
				<td colspan = "2" ><br/><input type="text" name="lastname1" ></td>
				<td colspan = "2" ><br/><input type="text" name="firstname1" ></td>
				<td ><br/><input type="text" name="extension1" ></td>
                <td colspan = "2" ><br/><input type="text" name="middlename1" ></td>
                <td ><br/><input type="text" name="nomiddlename1" ></td>
                <td ><br/><input type="text" name="mononym1" ></td>
			</tr>			
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td ><strong>SPOUSE</strong><br/>(If Married)</td>
				<td colspan = "2" ><br/><input type="text" name="lastname2" ></td>
				<td colspan = "2" ><br/><input type="text" name="firstname2" ></td>
				<td ><br/><input type="text" name="extension2" ></td>
                <td colspan = "2" ><br/><input type="text" name="middlename2" ></td>
                <td ><br/><input type="text" name="nomiddlename2" ></td>
                <td ><br/><input type="text" name="mononym2" ></td>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="center">
				<td colspan = "3" ><strong>DATE OF BIRTH</strong><br/><input type="text" name="month" size="3"><input type="text" name="day" size="3">
                    <input type="text" name="year" size="3"><br/>mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy</td>
				<td colspan = "3" align = "left"><strong>PLACE OF BIRTH</strong>(City/Municipality/Province/Country)<br/>(Please indicate country if born
                    outside the Philippines)<br/><input type="text" name="pob" ></td>
                <td rowspan = "2" colspan = "5" align = "center "><strong> PHILSYS ID NUMBER (Optional)</strong><br/><input type="text" name="philsys" ><br/>
                    <strong>TAX PAYER IDENTIFICATION NUMBER (TIN) (Optional)</strong><br/><input type="text" name="tax" ></td>
			</tr>
			
			<tr bgcolor = "" align="center">
				<th colspan="10">II. ADDRESS and CONTACT DETAILS</th>
			</tr>
			<tr style="font-size:11px"bgcolor = "" align="left">
                <td colspan = "6"><strong>PERMANENT HOME ADDRESS</strong><br/>Unit/Room No.Floor &nbsp;Building Name &nbsp; 
                    Lot/Block/Phase/House &nbsp;Number Street Name<br/><input type="text" name="address" size="70"></td>
                <td rowspan= "5" colspan= "3">Home Phone Number<br/><input type="text" name="phonenum" ><br/>(COUNTRY CODE + AREA CODE + TELEPHONE NUM BER)
                <br/>Mobile Number (Required)<input type="text" name="mobnum" ><br/>Business (Direct Line)<input type="text" name="business" >
            <br/>E-mail Address (Required for OFW)<input type="text" name="email" ></td>
            </tr>
            
			<tr style="font-size:11px"bgcolor = "" align="left">
                <td colspan="6" rowspan = "2">Subdivision &nbsp;Barangay &nbsp;Municipality/City &nbsp;Province/State/Country (If abroad)&nbsp; ZIP Code
                    <input type="text" name="address2" size="70"></td>
            </tr>

			<tr style="font-size:11px"bgcolor = "" align="center">
                <td colspan= "3">MAILING ADDRESS</td>
                   
			</tr>

			<tr style="font-size:11px"bgcolor = "" align="left">
                <td colspan="6" rowspan = "2">Subdivision &nbsp;Barangay &nbsp;Municipality/City &nbsp;Province/State/Country (If abroad)&nbsp; ZIP Code
                    <input type="text" name="address3" size="70"></td>

			</tr>   

			<tr style="font-size:11px"bgcolor = "" align="center">
                <td>5</td>

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
			<tr bgcolor = "" align="center">
				
                <td colspan= "10" style="font-size:15px" align= "center" ><u><strong>INSTRUCTIONS</strong></u><br/><br/>
                    1. All information should be written in UPPER CASE/CAPITAL LETTERS. If the information is not applicable, write “N/A.”<br/>
                    2. All fields are mandatory unless indicated as optional. By affixing your signature, you certify the truthfulness and accuracy of all <br/>information provided.<br/>
                    3. A properly accomplished PMRF shall be accompanied by a valid proof of identity for first time registrants, and supporting<br/>
                    documents to establish relationship between member and dependent/s for updating or request for amendment.<br/>
                    4. On the PURPOSE, check the appropriate box if for <u><strong>Registration</strong></u> or for <u><strong>Updating/Amendment</strong></u> of information.<br/>
                    5. Indicate preferred KonSulTa provider near the place of work or residence.<br/>
                    6. For PERSONAL DETAILS, all name entries should follow the format given below. Check the appropriate box if registrant has no<br/>
                    middle name and/or with single name (mononym).<br/><br/>
                    <strong>LAST NAME</strong> &nbsp; <strong>FIRST NAME</strong>  &nbsp;<strong>NAME EXTENSION (Jr./Sr./III)</strong>&nbsp;<strong>MIDDLE NAME</strong><br/> Santos &nbsp;&nbsp;&nbsp; Juan Andres 
                    &nbsp;&nbsp;&nbsp; III &nbsp;&nbsp;&nbsp; DELA CRUZ <br/><br/>
                    7. Indicate registrant’s/member’s name as it appears in the birth certificate<br/>
                    8. The full mother’s maiden name of registrant/member must be indicated as it appears in the birth certificate.<br/>
                    9. Indicate the full name of spouse if registrant/member is married.<br/>
                    10. Indicate the complete permanent and mailing addresses and contact numbers.<br/>
                    11. For updating/amendment, check the appropriate box to be updated/amended and indicate the correct data.<br/>
                    12. For MEMBER TYPE, check the appropriate box which best describes your current membership status.<br/>
                    13. For Direct Contributors, except employed, sea-based migrant workers and lifetime members, indicate the profession, monthly<br/>
                    income and proof of income to be submitted.<br/>
                    14. For Self-earning individuals, Kasambahays and Family Drivers, indicate the actual monthly income in the space provided.<br/>
                    15. In declaring dependents, provide the full name of the living spouse, children below 21 years old, and parents who are 60 years old <br/>
                    and above totally dependent to the member.<br/>
                    16. Dependents with disability shall be registered as principal members in accordance with Republic Act 11228 on mandatory<br/>
                    PhilHealth coverage for all persons with disability (PWD).<br/>
                    17. The registrant must affix his/her signature over printed name (or right thumbmark if unable to write) and indicate the date when the<br/>
                    PMRF was signed.<br/><br/>
                </td>
            </tr>

            
            
                 
            <tr>
                <td colspan=10>
                    <input type="submit" name="submit" value="SAVE">
                    <input type="Reset" name="clear" Value="RESET">
                    &emsp;&emsp; <a href="Marriage Certificate Application Form.php" target="blank"><font color="black">Previous</font> </a></th>                      
                        &emsp;&emsp; <a href="SSS form.php" target="blank"><font color="Black">Next</font> </a></th>
        
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
      $identification = $_POST['identification'];
      $konsulta	 = $_POST['konsulta	'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $extension = $_POST['extension'];
      $middlename = $_POST['middlename'];
      $nomiddlename = $_POST['nomiddlename'];
      $mononym = $_POST['mononym'];
      $lastname1 = $_POST['lastname1'];
      $firstname1 = $_POST['firstname1'];
      $extension1 = $_POST['extension1'];
      $middlename1 = $_POST['middlename1'];
      $nomiddlename1 = $_POST['nomiddlename1'];
      $mononym1 = $_POST['mononym1'];
      $lastname2 = $_POST['lastname2'];
      $firstname2 = $_POST['firstname2'];
      $extension2 = $_POST['extension2'];
      $middlename2 = $_POST['middlename2'];
      $nomiddlename2 = $_POST['nomiddlename2'];
      $mononym2 = $_POST['mononym2'];
      $month = $_POST['month'];
      $day = $_POST['day'];
      $year = $_POST['year'];
      $pob = $_POST['pob'];
      $philsys = $_POST['philsys'];
      $tax = $_POST['tax'];
      $address = $_POST['address'];
      $phonenum = $_POST['phonenum'];
      $mobnum = $_POST['mobnum'];
      $business = $_POST['business'];
      $email = $_POST['email'];
      $address2 = $_POST['address2'];
      $address3 = $_POST['address3'];
      $prof = $_POST['prof'];
      $yearprof = $_POST['yearprof'];
      $earning = $_POST['earning'];
      $earning2 = $_POST['earning2'];
      $income = $_POST['income'];
      $printname = $_POST['printname'];
      $dates = $_POST['dates'];


         $data  = mysqli_query($mysqli, "INSERT INTO phil(identification,konsulta,lastname,firstname,extension,middlename,nomiddlename,mononym,lastname1,firstname1,extension1,middlename1,nomiddlename1,mononym1,lastname2,firstname2,extension2,middlename2,nomiddlename2,mononym2,month,address,year,pob,philsys,tax,day,phonenum,mobnum,business,email,address2,address3,prof,yearprof,earning,earning2,income,printname,dates)
                                          VALUES('$identification','$konsulta','$lastname','$firstname','$extension','$middlename','$nomiddlename','$mononym','$lastname1','$firstname1','$extension1'
                                          ,'$middlename1','$nomiddlename1','$mononym1','$lastname2','$firstname2','$extension2','$middlename2','$nomiddlename2','$mononym2','$month','$day','$year','$pob','$philsys','$tax','$address','$phonenum','$mobnum','$business','$email','$address2','$address3','$prof','$yearprof','$earning','$earning2','$income','$printname','$dates')");
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