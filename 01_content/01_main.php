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
						array('#','content')
					);
					breadcrumb($array);
					?>
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">METLIFE 글로벌 가이드</div>
					<div class="panel-body">

					<h2>사이트 </h2>
					-https://design.metlife.com/resources/responsive-web/components/<p>
					-https://evolution.metlife.com/component-library/content-promo-banner/
					
					<h2>규칙</h2>
					- 고대로 복사해서 사용하면됨. <p>
					- 디자이너는 이미지 제작만, 폰트 사이즈 간격은 규칙에 위배됨. <p>
					- 컨퍼너트빼고 넣는거는 가능하나, 개별 규칙있음.
						
					
					<p>
						컴포넌트별 규칙<p>
						<a href='MetLife_Evolution_Component_Content_Spec_Sheet.xlsx'> 다운 받기</a>
`						<br> 위에 기재되지 않은 내용은 맞추 필요 없음.
					
			


					</div>
				</div>
			</div>

	
	</div>
</div>	<!--/.main-->

	
<!--Modal-->
<?php include_once('../contents_footer.php');


?>


