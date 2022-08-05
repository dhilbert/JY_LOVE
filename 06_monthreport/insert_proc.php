<?php

include_once('../lib/dbcon_JY_LOVE.php');



$data_page0 = isset($_GET['data_page0']) ? $_GET['data_page0'] : null;
$data_page1 = isset($_GET['data_page1']) ? $_GET['data_page1'] : null;
$data_page2 = isset($_GET['data_page2']) ? $_GET['data_page2'] : null;
$data_page3 = isset($_GET['data_page3']) ? $_GET['data_page3'] : null;




$sql	 = "
insert month_report_met_dataset_7 set 
		data_page0 = '".$data_page0."',
		data_page1 = '".$data_page1."',
		data_page2 = '".$data_page2."',
		data_page3 = '".$data_page3."'


;";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));

echo "<script>
alert('넣었군... 넣었어...');
parent.location.replace('/JY_LOVE/06_monthreport/02_metlife_insert.php');
</script> ";


?>	