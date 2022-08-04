<?php
function hd_active($input){
	$uri=explode('/',$_SERVER['REQUEST_URI']);
		if($uri[2]==$input){
		echo "class='active'";}
}
function hd_drop($num,$grobal,$sub_name,$sub_url){
?>

<li class="parent ">
		<a href="#">
		<span data-toggle="collapse" href="#sub-item-<?php echo $num;?>"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> <?php echo $grobal?> </span>
		</a>
		<ul class="children collapse" id="sub-item-<?php echo $num;?>">
		<?php
		for($i = 0 ; $i <count($sub_name);$i++){
		?>
			<li>
				<a class="" href="<?php echo $sub_url[$i];?>">
					<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> <?php echo $sub_name[$i];?>
				</a>
			</li>
		<?php
		}?>
		</ul>
	</li>
<?php
}
?>


	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
				
			</div>

		</form>

		<ul class="nav menu" >
		<li <?php hd_active("home.php");?>><a href="/JY_LOVE/home.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>Home</a></li>
		<?php

			$num		='hq-00';
			$grobal		= '메트라이프 기존자료';
			$sub_name	= array('연락처 및 사이트 정리','기존문서','PO관련');
			$sub_url	= array("/JY_LOVE/01_main/01_main.php","/JY_LOVE/01_main/02_main.php","/JY_LOVE/01_main/03_main.php");
			hd_drop($num,$grobal,$sub_name,$sub_url);

			

		?>
		<li <?php hd_active("jira_update_main.php");?>><a href="/JY_LOVE/05_jira_update/jira_update_main.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>지라 동기화</a></li>
		<li <?php hd_active("01_metlife.php");?>><a href="/JY_LOVE/06_monthreport/01_metlife.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>메트라이프 월간 보고서</a></li>

		
		<?php
			$num		='hq-01';
			$grobal		= '메트라이프 향후 운영 방안';
			$sub_name	= array('콘텐츠 제작 기본','aaaaaa');
			$sub_url	= array("/JY_LOVE/01_content/01_main.php","#");
			hd_drop($num,$grobal,$sub_name,$sub_url);



		?>




	</ul>
</div>