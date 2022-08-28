<?php
	require_once('connection.php');
	//Connect to mysql server
    //$link = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD,DB_DATABASE);
    /*if(!$link) {
        die('Failed to connect to server: ' . mysqli_error($link));
    }*/
	//date_default_timezone_set('Asia/Kolkata');
	
	function fetch_data()
	{
		//global $link;
		$output='';
		
		//$date=Date('Y-m-d');
		$sql="select * from exercise";
		//$sql="select orders.*,customer.* from orders,customer where orders.Status='0' and orders.Customer_Customer_id=customer.Customer_id and Date(orders.Date)='$date'";
		$result=$conn->query($sql);
		//$count=mysqli_num_rows($result);
		//if($count>0)
		//{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr>
						<td>'.$row['type'].'</td>';
			$output.='
						<td>'.$row['name'].'</td>';
			$output.='
						<td>'.$row['detail'].'</td>';
			$output.='
						<td>'.$row['Day'].'</td>';
			/*if($row['Type']==0)
			{
				$output.='
						<td>'."Self Pickup".'</td></tr>';
			}
			else
			{
				$output.='
						<td>'."Delivery".'</td>
			</tr>';
			}*/
		}
		//}
		/*else{
			$output.="<tr align='center'><td colspan='5'><b>".
			"No Sales on ".$date."
			</b></td></tr>";
		}*/
		return $output;
	}
	
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Exercise Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	<script>
	function createPDF()
	{
		var date=document.getElementById("selecteddate").value;
		window.location.href="createPDFforDailySale.php?date="+date;
	}
	/*function getDateWiseSale()
	{
		var date=document.getElementById("selecteddate").value;
	if (date=="") 
	{
		alert('Please select a date');
		return;
	}	
	if (window.XMLHttpRequest) 
	{
		xmlhttp=new XMLHttpRequest();
	} 
	else 
	{ 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() 
	{
		if (this.readyState==4 && this.status==200) 
		{
			document.getElementById("debitorsTable").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","getDateWiseSaleReport.php?q="+date,true);
	xmlhttp.send();
	}*/
	</script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<h2><font color="white"><b>Fitness Hub</b></font></h2>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#">Exercise Report</a>
	          </li>
	          <li>
	              <a href="#">Activity Report</a>
	          </li>
	          <li>
              <a href="#">Attendance Report</a>
	          </li>
	          <li>
              <a href="#">User Report</a>
	          </li>
			  <li>
              <a href="#">Measurement Report</a>
	          </li>
			  <li>
              <a href="#">Trainer Schedule Report</a>
	          </li>
	        </ul>
			</div>
			</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
			
			<form method="POST" align="right">
			<input type="button" name="create_pdf" class="btn btn-primary waves-effect" value="Create PDF" onclick="createPDF()" />
			</form>                            
		
		</div>
		<div id="content" class="p-4 p-md-5 pt-5">
        <h3 align="center"><u>Exercise Report</u></h3><br/>
		<!--<form method="POST">
					
					<b>Select Date</b>
					<input type="date" name="selectedDate" id="selecteddate" value="<?php echo date('Y-m-d');?>" /> 
					&nbsp &nbsp
						<button type="button" value="Fetchdetails" class='btn btn-primary waves-effect' name="fetch" id="fetch" onclick="getDateWiseSale()">Fetch details</button>
								
					
		</form>-->
		
		<div class="table-responsive">  
                     <table class="table table-bordered" id="debitorsTable">  
                          <tr bgcolor="grey"> 
								<th>Customer Name</th>
								<th>Exercise Type</th>  
								<th>Exercise Name</th>  
								<th>Details</th>	
								<th>Day</th>
                          </tr>
						  <?php
							echo fetch_data();  
							?> 
                     </table>  
                     <br />   
                </div> 
      </div>
            
          </div>
        </nav>

        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>