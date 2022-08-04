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
						array('#','연락처 및 사이트 정리')
					);
					breadcrumb($array);
					?>
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">연락처</div>
					<div class="panel-body">


					<h2> TF팀 정보</h2>
<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
	<thead>
		<tr>
		<?php 
				$num=0;
				$name_array = array("역활","이름","소속","직급","전화번호","이메일");
				for($i = 0 ; $i < count($name_array);$i++){					
					hd_thead_th($i,$name_array[$i]);
				}
				
				
			
			?>

		</tr>
	</thead>
	<tbody>
		<?php 
			$name_array=array(
				array('영업','김준호','DSG 세일즈','부장','010-6345-2300','juno@mz.co.kr '),
				array('PM','송상영','DSG 프론티어부문','이사','010-3855-0560 ','ongsy@mz.co.kr '),
				array('기획','김진성','DSG 프론티어부문','추장','니 전번','니 이메일'),
				array('디자인','안승희','DSG 프론티어부문','차장','010-2716-3006','olive1@mz.co.kr'),
				array('디자인','우정민','DSG 프론티어부문','과장','010-2760-0812','jmwoo@mz.co.kr'),				
				array('개발','이상윤','DSG 프론티어부문','부장','010-6287-7720','sangyoon@mz.co.kr ')
			);
			for($i = 0 ; $i < count($name_array);$i++){
				$temp_array  = $name_array[$i];
				echo "<tr>";
				for($j = 0 ; $j < count($name_array);$j++){					
					hd_tbody_td($j,$temp_array[$j])	;
				}
				echo "</tr>";
			}
				
				
			
		?>
	</tbody>
</table>	

<h2> 고객사 정보</h2>
<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
	<thead>
		<tr>
		<?php 
				$num=0;
				$name_array = array("역활","이름","소속","직급","전화번호","이메일","비고");
				for($i = 0 ; $i < count($name_array);$i++){					
					hd_thead_th($i,$name_array[$i]);
				}
				
				
			
			?>

		</tr>
	</thead>
	<tbody>
		<?php 
			$name_array=array(
				array('1','황애경','메트라이프재단','국장','02-3469-9550 <br>010-3272-4217','ae-kyung.hwang@metlife.com ','일반적인 실무 업무 관련 메일은 참조 제외'),
				array('2','현단비','메트라이프재단','과장','02-3469-9472 <br>010-8630-7289','danbi.hyun@metlife.com','메트라이프 재단 관련 공지사항 / 후기 게재 및 제작 진행'),
				array('4','박초롱','메트라이프재단','과장','02-3469-9435 <br> 010-4780-5932','cho-rong.park@metlife.com ','-메트라이프 재무건강 담당자')


			);
			for($i = 0 ; $i < count($name_array);$i++){
				$temp_array  = $name_array[$i];
				echo "<tr>";
				for($j = 0 ; $j < count($temp_array);$j++){					
					hd_tbody_td($j,$temp_array[$j])	;
				}
				echo "</tr>";
			}
				
				
			
		?>
	</tbody>
</table>	

					</div>
				</div>
				</div>			</div>



		 
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">사이트 정리</div>
					<div class="panel-body">

					<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
						<?php 
								$num=0;
								$name_array = array("구분","사이트","주소","아이디","패스워드","비고");
								for($i = 0 ; $i < count($name_array);$i++){					
									hd_thead_th($i,$name_array[$i]);
								}
								
								
							
							?>

						</tr>
					</thead>

					<tbody>
					<?php 
						$name_array=array(
							array('재단','front','https://metlifewelfare.org/','-','-','-'),
							array('재단','backoffice','https://metlifewelfare.org/ntapp/auth/login#','mtlf_admin','aprkwhs12#$',''),
							array('재무건강','front','https://www.finhealthindex.org/','-','-','-'),
							array('재무건강','backoffice','http://finhealthindex.org/indexfh/admin/index','finh_admin','aprkwhs12#$','가끔 로그인하면 프론트로 이동하는 경우 있음. <br>이럴때는 구글 계정을 변경하여 로그인해야 함'),
							array('GA','GA','https://analytics.google.com/analytics/web/provision/?authuser=0#/provision','metlifewelfare@gmail.com','metlife1!','google 계정 추가 필요, 추가시 담당자 에게 연락은 기본 매너!!!<br>답변 금지')

							


						);
						for($i = 0 ; $i < count($name_array);$i++){
							$temp_array  = $name_array[$i];
							echo "<tr>";
							for($j = 0 ; $j < count($temp_array);$j++){					
								hd_tbody_td($j,$temp_array[$j])	;
							}
							echo "</tr>";
						}
							
							
						
					?>
				</tbody>
			</table>	

			


					</div>
				</div>
			</div>

	
	</div>
</div>	<!--/.main-->

	
<!--Modal-->
<?php include_once('../contents_footer.php');


?>


