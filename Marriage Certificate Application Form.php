
<!DOCTYPE html>
<html>

    <head>
        <title> Certificate Application Form</title>
        <meta name="authors" content="Leila Chichioco, Larkneil Felipe, Jessa Magayo, Lemeul Jeremy Victoria">
        <meta http-equiv="description" content="Educational Purposes">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <style>
            h5 {
                 font-family: Verdana, Geneva, Tahoma, sans-serif;
                 text-align: center;
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
                <a class = "active" href = "Marriage Certificate Application Form.php">Marriage Certificate Application Form</a>
                <a href = "PhilHealth Application Form.php">PhilHealth Application Form</a>
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
        <form action="Marriage Certificate Application Form.php" method="post">
        <h2 style= "font-family:'Verdana'; text-align: center;">
            Marriage Certificate Application Form
        </h2>
        <h5>
            The Civil Registry <br>
            Bucks Road <br>
            Douglas <br>
            Isle of Man <br>
            IM1 1AR<br/>
            Tel: 01624 687009 <br>
            Website: www.gov.ph
        </h5>
        <h4>
            To apply for a certified copy of marriage certificate, please complete the following:
            <br>
            <br>
            Applicant's Details:
        </h4>
        <table style="color:black" width ="60%" border=".5" align="center" bgcolor="White">
            <tr style="font-size:11px"align="left">
                <td>Title: </td>
                <td> Mr./ Mrs./ Ms./ Others(Specify:) </td>
                <td colspan="2"><input type="text" name="others" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
              <td>
                  Name: 
              </td>
              <td colspan="3">
                <input type="text" name="name" size="10">
              </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    House Name/Number:
                </td>
                <td colspan="3">
                    <input type="text" name="hno" size="10">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    Street Name:
                </td>
                <td colspan="3">
                    <input type="text" name="st" size="10">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    Town/Parish:
                </td>
                <td colspan="3">
                    <input type="text" name="town" size="10">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    Country:
                </td>
                <td>
                    <input type="text" name="country" size="10">
                </td>
                <td>
                    Postal Code:
                </td>
                <td>
                    <input type="text" name="code" size="10">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    DayTime Tel. No:
                </td>
                <td colspan="3">
                    <input type="text" name="tno" size="10">
                </td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    E-mail Address:
                </td>
                <td colspan="3">
                    <input type="text" name="email" size="10">
                </td>
            </tr>

            <tr style="font-size:11px"align="center">
                <th colspan="4">
                    Certificate Type:
                </th>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>
                    Marriage Certificate:
                </td>
                <td colspan="2">
                    Quantity: <input type="text" name="quantity" size="10">
                </td>
                <td>
                    E30.00 each
                </td>
            </tr>
            <tr style="font-size:11px"align="center">
                <th colspan="4">
                    Certificate Details: <br>
                    Groom:
                </th>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Surname:</td>
                <td colspan="3"><input type="text" name="surname" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Forenames:</td>
                <td colspan="3"><input type="text" name="forename" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Father's Full Legal Name:</td>
                <td colspan="3"><input type="text" name="fname" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="center">
                <th colspan="4">
                    Bride:
                </th>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Maiden name:</td>
                <td colspan="3"><input type="text" name="mname" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Forenames:</td>
                <td colspan="3"><input type="text" name="forename2" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Father's Full Legal Name:</td>
                <td colspan="3"><input type="text" name="fname2" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="center">
                <th colspan="4">
                    Ceremony:
                </th>
            </tr>
            <tr style="font-size:11px"align="left">
                <td> Date of Marriage:</td>
                <td>Day: <input type="text" name="day" size="10"></td>
                <td>Month: <input type="text" name="month" size="10"></td>
                <td>Year: <input type="text" name="year" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>If exact date is not known, specify years to be searched:</td>
                <td colspan="3"><input type="text" name="date" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Place of Marriage:</td>
                <td colspan="3"><input type="text" name="place" size="10"></td>
            </tr>
            <tr style="font-size:11px"align="left">
                <td>Town/Parish:</td>
                <td colspan="3"><input type="text" name="mtown" size="10"></td>
            </tr>
            <tr>
            <tr>
                <td colspan="4">
                    <input type="submit" name="submit" value="SAVE">
                    <input type="Reset" name="clear" Value="RESET">
                    &emsp;&emsp; <a href="Goverment Documents Main Page.php" target="blank"><font color="black">Previous</font> </a></th>                      
                        &emsp;&emsp; <a href="Philhealth Application Form.php" target="blank"><font color="Black">Next</font> </a></th>
        
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
      $name = $_POST['name'];
      $hno = $_POST['hno'];
      $st = $_POST['st'];
      $town = $_POST['town'];
      $country = $_POST['country'];
      $code = $_POST['code'];
      $tno = $_POST['tno'];
      $email = $_POST['email'];
      $quantity = $_POST['quantity'];
      $surname = $_POST['surname'];
      $forename = $_POST['forename'];
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $forename2 = $_POST['forename2'];
      $fname2 = $_POST['fname2'];
      $day = $_POST['day'];
      $month = $_POST['month'];
      $year = $_POST['year'];
      $date = $_POST['date'];
      $place = $_POST['place'];
      $mtown = $_POST['mtown'];

         $data  = mysqli_query($mysqli, "INSERT INTO marriage(others,name,hno,st,town,country,code,tno,email,quantity,surname,forename,fname,mname,forename2,fname2,day,month,year,date,place,mtown)
                                          VALUES('$others','$name','$hno','$st','$town','$country','$code','$tno','$email','$quantity','$surname'
                                          ,'$forename','$fname','$mname','$forename2','$fname2','$day','$month','$year','$date','$place','$mtown')");
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