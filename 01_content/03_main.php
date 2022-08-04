<?php
include_once('../lib/session.php');
include_once('../lib/dbcon_JY_LOVE.php');

include_once('../contents_header.php');
include_once('../contents_profile.php');
include_once('../contents_sidebar.php');
?>
			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
					<?php
					$array = array(
						array('#','기존 문서')
					);
					breadcrumb($array);
					?>
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">기존 문서</div>
					<div class="panel-body">

<?php 

	function jy_love_table($array){
		echo "<tr>";
			echo '<td data-field="data_0" data-sortable="true" >'.$array[0].'</td>';
			echo '<td data-field="data_1" data-sortable="true" >'.$array[1].'</td>';
			echo '<td data-field="data_2" data-sortable="true" ><a href="/JY_LOVE/01_main/data/'.$array[2].'">다운로드받기</a></td>';

		echo "</tr>";

	}

?>

					


<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
	<thead>
		<tr>
		<?php 
				$num=0;
				$name_array = array("구분","파일명","다운로드");
				for($i = 0 ; $i < count($name_array);$i++){					
					hd_thead_th($i,$name_array[$i]);
				}
				
				
			
			?>

		</tr>
	</thead>
	<tbody>
		<?php 
			
			$array = array("재단","계약서","메가존_메트라이프_재무건강_22년도운영견적서_20211214_v1.0_최종.pdf");
			jy_love_table($array);
			$array = array("재무건강","계약서","메가존_메트라이프_재단사이트_22년도운영견적서_20211213_v1.1_최종.pdf");
			jy_love_table($array);
			$array = array("인수인계","인수이계문서","PO발행.pptx");
			jy_love_table($array);
			



		?>
	</tbody>
</table>	


					</div>
				</div>
				</div>			</div>



		 
	
	</div>
</div>	<!--/.main-->

	
<!--Modal-->
<?php include_once('../contents_footer.php');


?>


