<?php
include ("dbconnection.php");
$output ='';
$output1 ='';
//$output1 ='';
if(isset($_POST["item_id"]))
{
	if($_POST["item_id"] != '')
	{
		$sql = "SELECT * FROM diesel_petrol_rate WHERE id='".$_POST["item_id"]."'";

	}
	else
	{
		//$sql = "SELECT * FROM diesel_petrol_rate";
		echo "<script>alert('you must select quantity')</script>";
		exit();

	}
	$result =mysqli_query($con, $sql);

	while($row =mysqli_fetch_array($result))
	{
		 //$output .='<input name="fule_price" class="form-control input-lg" type="text" value="'.$row["price"].'"><br><br>
		 //Set Fual quantity: <input name="fule_price" class="form-control input-lg" type="text" value="'.$row["quantity"].'">';
		//output .='<input name="fule_price" class="form-control input-lg" type="text" value="'.$row["quantity"].'">';
		
		echo json_encode($row);
		//$output .=$row["price"];
		//$output1 .=$row["quantity"];
	}
	// echo $output;
	// echo $output1;
	
}

?>


