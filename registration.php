<!DOCTYPE html>
<html lang="en">
<head>
<title>
Registration Form
</title>
<body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,<br><br><br> initial-scale=1">
<link rel="stylesheet" href="static/css/bootstrap.min.css">
<form method ="POST" action ="dbconnection.php">
<div style="text-align:center"><h4 style="color:red">
<ins>Registration Form</ins><br>
International Conference<br> on <br>Emerging Trends in Civil Engineering <br>(ICETCE-16) <br>21-22,Oct, 2016 <br>
 K. N. I. T., SULTANPUR - 228 118 (U.P.), INDIA <br></h4>
<br></div>
<b>    <ol type="num"><li> Name
              <input type ="text" name ="name" size="80</li>"><br>(In Block Letter)<br>
<li>  Designation
              <input type ="text" name ="designation" size="74"></li><br>
			  
			  
<li>  Name & Address of Institute/Organization
                            <input type ="text" name ="nameaddressofinstitute/organization" size="150"></li><br>
<li>  Address for Communication
                             							
        <input type ="text" name ="addressforcommunication" size="150"></li><br>
		E-mail Address
		 <input type ="email" name ="email" size="69"></li><br>
		 Phone/Mobile No.
		  <input type ="phone" name ="phone/mobile" size="69"></li><br>
		  <li> Accommodation  Reqiuered
		  	<input type ="radio" name ="accommodationrequired" value="yes" size="50">Yes
		  	<input type ="radio" name ="accommodationrequired" value="no" size="50">No<br>
		  	(Accommodation is available in Guest House & Hotels in the city on payment basis) <br>
		  </li>
		  <li> Payment Option:<br>
		  		<input type ="radio" name ="paymentoption" value ="internet" size="50">Internet Banking<br>
		  			<input type ="radio" name ="paymentoption" value ="draft" size="50">Through Demond Draft<br>

		  			Electronic Transfer/Wire Transfer Details:<br>
		  			 Transaction Confirmation Number:
		  			    <input type ="text" name ="transactionnumber" size="60"><br>
		  			    Date of Payment:
		  			    <input type="date"  name="dateofpayment"  value="date">
		  			    
		  			    Amount Rs:
		  			    <input type="text" name="amount" size="30"><br>

		  			    Bank Name:
		  			    <input type="text" name="bankname" size="80"><br>
		  			    D.D. Details:     <br>          D.D. No.<input type="text"  name="ddno"  size="20">Amount Rs:
		  			    <input type="text" name="amountdd" size="30"><br>
		  			      Date :
		  			    <input type="date"  name="datedd"  value="date"><br>
		  			    Bank Name:
		  			    <input type="text" name="banknamedd" size="80"><br>
		  			    (In favor of “COORDINATOR ICETCE-16 payable at Sultanpur UP, India ) <br>
		  			</li>
		  			<li>
		  				Paper Id:
		  				<input type="text" name="paperid" size="30"><br></li>
		  				<li>Paper Title:
		  				<input type="text" name="papertitle" size="80"><br></li>
		  			    
		  			    Date:
		  			    <input type="date" name="datesub" value="date"><br>
		  			    Place:
		  			    <input type="text"  name="place" size="50"><br>
		  			 
<input type ="submit" name ="submit" size ="43"><br>
<input type ="reset" name ="reset"size="30">
</form>
</html>