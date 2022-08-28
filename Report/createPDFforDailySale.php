<?php
	require_once('config.php');
	//Connect to mysql server
    $link = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD,DB_DATABASE);
    if(!$link) {
        die('Failed to connect to server: ' . mysqli_error($link));
    }
	$date=$_GET['date'];
      require_once('tcpdf/tcpdf.php');  
      ob_start();
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("DailySale Report");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 10);  
      $obj_pdf->AddPage();  
      $content = '<table>';
	  $content .= '<tr><td><img src="../image/logo1.png" alt="Logo not available" width="150" height="100"></td>';
      $content .= '  
	  <td><h4 style="text-align:right;"> Date : '.$date.'</h4></td>
	  </tr></table>
	  <table>
		<tr>
			 <td><h3 align="center"><u>Daily Sale Report</u></h3></td>
		</tr>
	  </table>
	  <br/><br/>	
      <table border="1" cellspacing="0" cellpadding="5" align="center">  
           <tr bgcolor="grey">  
                <th>Customer Name</th>
				<th>Mobile number</th>  
				<th>Date</th>  
				<th>Billing Amount</th>	
				<th>Type</th>
           </tr>
      ';
      $content .= fetch_data($date);  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content); 
	ob_end_clean();
      $obj_pdf-> Output('dailySale Report'.date('d-m-Y').'.pdf', 'I');

	function fetch_data($date)
	{
		global $link;
		$output='';
		
		$sql="select orders.*,customer.* from orders,customer where orders.Status='0' and orders.Customer_Customer_id=customer.Customer_id and Date(orders.Date)='$date'";
		$result=mysqli_query($link,$sql);
		$count=mysqli_num_rows($result);
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
			$output.="</table>";
			$output.='<h2 style="text-align: center;"><b>'.
			"No Sales on ".$date."
			</b></h2>";
		}
		return $output;
	}
?>