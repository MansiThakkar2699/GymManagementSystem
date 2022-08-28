<?php
	require_once('config.php');
	//Connect to mysql server
    $link = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD,DB_DATABASE);
    if(!$link) {
        die('Failed to connect to server: ' . mysqli_error($link));
    }
	$date=$_GET['q'];
	$sql="select orders.*,customer.* from orders,customer where orders.Status='0' and orders.Customer_Customer_id=customer.Customer_id and Date(orders.Date)='$date'";
	$result=mysqli_query($link,$sql);
	$count=mysqli_num_rows($result);
	$output='';
	echo "<table class='table table-bordered'>  
                          <tr bgcolor='grey'>  
                               <th>Customer Name</th>
								<th>Mobile number</th>  
								<th>Date</th>  
								<th>Billing Amount</th>	
								<th>Type</th>
                          </tr> ";
						  
	if($count>0)
	{
	while($row=mysqli_fetch_array($result))
	{
		$output.='<tr>
						<td>'.$row['Cust_Name'].'</td>';
			$output.='
						<td>'.$row['Mob_No'].'</td>';
			$output.='
						<td>'.$row['Date'].'</td>';
			$output.='
						<td>'.$row['Billing_amt'].'</td>';
			if($row['Type']==0)
			{
				$output.='
						<td>'."Self Pickup".'</td></tr>';
			}
			else
			{
				$output.='
						<td>'."Delivery".'</td>
			</tr>';
			}
	}
	}
		else{
			echo "<tr align='center'><td colspan='5'><b>".
			"No Sales on ".$date."
			</b></td></tr>";
		}
	echo $output;
	mysqli_close($link);
?>