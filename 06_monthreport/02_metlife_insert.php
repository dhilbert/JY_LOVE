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
						array('#','직원 관리')
					);
					breadcrumb($array);
					?>
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						게시판정보111
					</div>

					<div class="panel-body">
          

					<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
						<?php 
								$num=0;
								$name_array = array("int","URL","구분","제목","게시일","삭제");
								for($i = 0 ; $i < count($name_array);$i++){					
									hd_thead_th($i,$name_array[$i]);
								}
								
								
							
						?>

						</tr>
					</thead>

					<tbody>
          <?php 
            
            
            $sql	 = "select * from month_report_met_dataset_7 order by mrmd_idx DESC;";
            $res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
            while($info	 = mysqli_fetch_array($res)){
              
              
              
              echo "<tr>";
              $temp_want = "<a href = 'del_proc.php?mrmd_idx=".$info['mrmd_idx']."'>del</a>";
              $temp_array = array(
                $info['mrmd_idx'],
                $info['data_page0'],
                $info['data_page1'],
                $info['data_page2'],
                $info['data_page3'], 
                $temp_want


              );
              for($j = 0 ; $j < count($temp_array);$j++){					
							  hd_tbody_td($j,$temp_array[$j])	;
              }
              
              
              
              echo "</tr>
              
              ";

            }








							
							

							
							
						
					?>    


          </tbody>

    </table>          

정보 넣기

<?php 
  function hd_jy_formlove($title,$name){
    echo "<div class='form-group'><label>".$title."</label><input class='form-control' placeholder='Placeholder'name='".$name."'>			</div>";

  }


?>



    <form name="frm" role="form" method="get" action="insert_proc.php">
      <?php
      
        $title = "URL";         $name  = 'data_page0';        hd_jy_formlove($title,$name);
        $title = "구분";        $name  = 'data_page1';        hd_jy_formlove($title,$name);
        $title = "제목";        $name  = 'data_page2';        hd_jy_formlove($title,$name);
        $title = "게시일";      $name  = 'data_page3';        hd_jy_formlove($title,$name);
        
      
      ?>
									
						   
					       


						       <input  type='submit' class="btn btn-success login-btn" type="submit" value="데이터 넣기">

							     </form>













		</div>
	</div>
</div>





<!--Modal-->
<?php include_once('../contents_footer.php');


?>




