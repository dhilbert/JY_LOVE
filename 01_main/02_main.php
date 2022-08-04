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
			
			$array = array("리뉴얼 관련 문서","완료보고서","메트라이프글러벌가이드리뉴얼완료보고.zip");

			jy_love_table($array);			
			$array = array("월간보고서","재무건강 월간보고서 중 엑셀 문서 sample","메가존_재무건강 5분체크인 유입률 체크_재단수정_220307.xlsx");
			jy_love_table($array);
			$array = array("월간보고서","재무건강 월간보고서 작성법","[메가존] 메트라이프재단_재무건강_인수인계_월간보고서_201117.pptx");
			jy_love_table($array);
			$array = array("인수인계","재무건강 인수 인계 기존 문서","[메가존] 메트라이프재단_재무건강_인수인계_201117.pptx");
			jy_love_table($array);
			
			$array = array("월간보고서","재단 월간보고서 작성법","[메가존] 메트라이프재단_인수인계_월간보고서_201117.pptx");
			jy_love_table($array);
				
			$array = array("인수인계","재단 admin 페이지 사용법","[메가존] 메트라이프재단_인수인계_admin_200130.pptx");
			jy_love_table($array);
			
			$array = array("인수인계","재단 인수인계 기존 문서","[메가존] 메트라이프재단_인수인계_201117.pptx");
			jy_love_table($array);
				
			
			$array = array("월간보고서","재무건강 샘플","[메가존] 메트라이프생명 사회공헌재단_재무건강5분체크인_2022_2월_월간보고서.pptx");
			jy_love_table($array);
			$array = array("월간보고서","재단 샘플","[메가존] 메트라이프생명 사회공헌재단_2022_2월_월간보고서.pptx");
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


