<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>慕光之城</title>
	<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
	<link rel="stylesheet" type="text/css" href="css/reset.css">	
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/animewall.css">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/01index.css">
	<!-- <script src="https://use.fontawesome.com/7a621b77bc.js"></script> -->
	<script src="js/jquery-3.1.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php include 'login.php';?>
	<?php include 'lightbox.php';?>


	<div class="wrapper">
		<header class="head1">

			<?php include 'nav.php';?>

			<div class="head1_1">
				<div class="head1_1box">
					<h4>用鏡頭捕捉美</h4>
					<h4>參與全民台灣飛蛾研究</h4>
					<ul>
						<li>4,600 人參與</li>
						<li>55,000 張照片</li>
						<li>歷時 5 年持續中</li>
					</ul>
				</div>
			</div>

			<div class="head1_2_moblie">
				<div class="head1_2box">
					<i class="fa fa-book fa-4x"></i>
					<h3>簡易飛蛾圖鑑</h3>
					<a href='zukan.php' class="blue_btn">查詢</a>
				</div>
				<div class="head1_2box">
					<i class="fa fa-picture-o fa-4x"></i>
					<h3>上傳飛蛾照片</h3>
					<a href="#" class="blue_btn">上傳</a>
				</div>
				<div class="head1_2box">
					<i class="fa fa-database fa-4x"></i>
					<h3>飛蛾資料庫</h3>
					<a href='data.php' class="blue_btn">查詢</a>
				</div>
			</div>

			<div class="head1_2">
				<div class="head1_2box head1_2box_1">
					<i class="fa fa-book fa-4x"></i>
					<h3>簡易飛蛾圖鑑</h3>
					<a href='zukan.php' class="blue_btn">查詢</a>
				</div>
				<div class="head1_2box head1_2box_2">
					<i class="fa fa-picture-o fa-4x"></i>
					<h3>上傳您的飛蛾照片</h3>
					<a href="#" class="blue_btn">分享照片</a>
				</div>
				<div class="head1_2box head1_2box_3">
					<i class="fa fa-database fa-4x"></i>
					<h3>台灣飛蛾資料庫</h3>
					<a href='data.php' class="blue_btn">查詢</a>
				</div>
			</div>
		</header>
		
		
		
		
		
<?php


    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    date_default_timezone_set('Europe/London');
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    require_once dirname(__FILE__) . '/excel/PHPExcel-1.8/Classes/PHPExcel.php';
    $inputFileType1 = 'Excel5';
    $inputFileName1 ='excel/user.xls';
    $objPHPExcelReader1 = PHPExcel_IOFactory::createReader($inputFileType1);
    $objPHPExcel1 = $objPHPExcelReader1->load($inputFileName1);
    $objPHPExcel1->setActiveSheetIndex(0);
    $objWorksheet1 = $objPHPExcel1->getActiveSheet();

    $inputFileType2 = 'Excel5';
    $inputFileName2 ='excel/album.xls';
    $objPHPExcelReader2 = PHPExcel_IOFactory::createReader($inputFileType2);
    $objPHPExcel2 = $objPHPExcelReader2->load($inputFileName2);
    $objPHPExcel2->setActiveSheetIndex(0);
    $objWorksheet2 = $objPHPExcel2->getActiveSheet();

    $inputFileType3 = 'Excel5';
    $inputFileName3 ='excel/photo.xls';
    $objPHPExcelReader3 = PHPExcel_IOFactory::createReader($inputFileType3);
    $objPHPExcel3 = $objPHPExcelReader3->load($inputFileName3);
    $objPHPExcel3->setActiveSheetIndex(0);
    $objWorksheet3 = $objPHPExcel3->getActiveSheet();

    $inputFileType4 = 'Excel5';
    $inputFileName4 ='excel/photo_reply.xls';
    $objPHPExcelReader4 = PHPExcel_IOFactory::createReader($inputFileType4);
    $objPHPExcel4 = $objPHPExcelReader4->load($inputFileName4);
    $objPHPExcel4->setActiveSheetIndex(0);
    $objWorksheet4 = $objPHPExcel4->getActiveSheet();

echo "        
        <section class='s11'>
            <h2>動態牆</h2>
            <div class='wall'>
";

	//wall index max length of excel
	$wall_i_mxl_e3=-1;
	$wall_i_mxl_e4=-1;
        for ($row = 3, $cell = $objWorksheet3->getCellByColumnAndRow(13, 3); $cell != ""; $row++){
            $cell = $objWorksheet3->getCellByColumnAndRow(13, $row);
			$wall_i_mxl_e3++;
        }
        for ($row = 3, $cell = $objWorksheet4->getCellByColumnAndRow(2, 3); $cell != ""; $row++){
            $cell = $objWorksheet4->getCellByColumnAndRow(2, $row);
			$wall_i_mxl_e4++;
        }

    for($i=0; $i<4; $i++){

        // use wall index to determine photo_key / user_key / album_key
        for ($row = $wall_i_mxl_e3+2, $cell = $objWorksheet3->getCellByColumnAndRow(13, $row); $row>2; $row--){
            $cell = $objWorksheet3->getCellByColumnAndRow(13, $row);
            if ($cell->getValue() == $i+1){ //found wall index(==$i+1)
        		$user_key = $objWorksheet3->getCellByColumnAndRow(0, $row)->getValue();
        		$album_key = $objWorksheet3->getCellByColumnAndRow(1, $row)->getValue();
        		$photo_key = $objWorksheet3->getCellByColumnAndRow(2, $row)->getValue();
                break;
            }elseif($row==3){
	            //if didnt find the wall index in excel3, then go to excel4 
            	// dont know why, but cant use $row again underline
			        for ($ro = $wall_i_mxl_e4 +2, $cell = $objWorksheet4->getCellByColumnAndRow(2, $ro); $ro>2; $ro--){
			            $cell = $objWorksheet4->getCellByColumnAndRow(2, $ro);
			            if ($cell->getValue() == $i+1){ //found wall index(==$i+1)
			        		$photo_key = $objWorksheet4->getCellByColumnAndRow(0, $ro)->getValue();
			        		// back to excel 3 to find other two keys
					        for ($r = $wall_i_mxl_e3 +2, $cell = $objWorksheet3->getCellByColumnAndRow(2, $r); $r>2; $r--){
					            $cell = $objWorksheet3->getCellByColumnAndRow(2, $r);
					            if ($cell->getValue() == $photo_key){				        		
			        				$user_key = $objWorksheet3->getCellByColumnAndRow(0, $r)->getValue();
			        				$album_key = $objWorksheet3->getCellByColumnAndRow(1, $r)->getValue();
					                break;
					            }
					        }
			                break;
			            }
			        }            	
	            
            }
        }
        echo"
                <div class='wall_box'>
                    <div class='wall_box_user'>
                        <div>
            ";

        //user : find user key // col5=照片 col3=名字 col4=城市                 
        for ($row = 2, $cell = $objWorksheet1->getCellByColumnAndRow(0, 2); $cell != ""; $row++){
             $cell = $objWorksheet1->getCellByColumnAndRow(0, $row);
            if ($cell->getValue() == $user_key){
                echo "
                            <div class='imgbox'><img src='",$objWorksheet1->getCellByColumnAndRow(5, $row)->getValue(),"'></div>
                            <a href='#' class='person_title'>",$objWorksheet1->getCellByColumnAndRow(3, $row)->getValue(),"</a>
                            <p>",$objWorksheet1->getCellByColumnAndRow(4, $row)->getValue(),"
                ";
                break;
            }
        }
        //photo : find photo key // col5=日期 col4=敘述 col10=url
        for ($row = 2, $cell = $objWorksheet3->getCellByColumnAndRow(2, 2); $cell != ""; $row++){
             $cell = $objWorksheet3->getCellByColumnAndRow(2, $row);
            if ($cell->getValue() == $photo_key){
                echo "
                            ",$objWorksheet3->getCellByColumnAndRow(5, $row)->getValue(),"</p> 
                        </div>
                        <p>",$objWorksheet3->getCellByColumnAndRow(4, $row)->getValue(),"</p>
                    </div>                  
                    <a class='imgbox'><img src='",$objWorksheet3->getCellByColumnAndRow(10, $row)->getValue(),"'></a>                            
                ";
                break;
            }
        }
        echo "
                    <div class='wall_box_like'>
                        <a href='#' class='like'></a>
                        <span></span>
                    </div>
                                <div class='wall_box_reply'> <!-- reply strat -->
            ";
        //photo_reply : use photo key to find row
        for ($row = 3, $cell = $objWorksheet4->getCellByColumnAndRow(0, 3); $cell != ""; $row++){
             $cell = $objWorksheet4->getCellByColumnAndRow(0, $row);
            if ($cell->getValue() == $photo_key){ //found row
                $reply_user_key = $objWorksheet4->getCellByColumnAndRow(3, $row);
                $col=3;
                while($reply_user_key !=""){
                    // go to user excel to find info by user key : col=0 , row=??($r)
                    for ($r = 3, $box = $objWorksheet1->getCellByColumnAndRow(0, 3); $box != ""; $r++){
                        $box = $objWorksheet1->getCellByColumnAndRow(0, $r);
                        if ($reply_user_key->getValue() == $box->getValue()){
                            // $r=row col5=照片 col3=名字
                            echo "

                                    <div>
                                        <div class='imgbox'><img src='",$objWorksheet1->getCellByColumnAndRow(5, $r)->getValue(),"'>
                                        </div>
                                        <p class='person_reply'>",$objWorksheet1->getCellByColumnAndRow(3, $r)->getValue(),"<span>",$objWorksheet4->getCellByColumnAndRow($col +1, $row)->getValue(),"</span>
                                        </p>
                                    </div>
                                    <p>",$objWorksheet4->getCellByColumnAndRow($col +2, $row)->getValue(),"
                                    </p>

                            ";
                            break;
                        }
                    }
                    $col+=3;
                    $reply_user_key = $objWorksheet4->getCellByColumnAndRow($col, $row);
                }                
                break;
            }
        }
echo"
								</div> <!-- reply end -->
            	</div>
    
";       
    }
echo"
            </div>
            <div class='more'>
            	<a href='wall.php' class='more_r_btn'>更多<i class='fa fa-caret-right fa-x'></i>
            	</a>
            </div>
        </section>
    
";



// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel1->setActiveSheetIndex(0);
$objPHPExcel2->setActiveSheetIndex(0);
$objPHPExcel3->setActiveSheetIndex(0);
$objPHPExcel4->setActiveSheetIndex(0);

// Save Excel 95 file   存成 .xls 檔案


$objWriter1 = PHPExcel_IOFactory::createWriter($objPHPExcel1, 'Excel5');
$objWriter1->save(str_replace('.php', '.xls', __FILE__));
$objWriter2 = PHPExcel_IOFactory::createWriter($objPHPExcel2, 'Excel5');
$objWriter2->save(str_replace('.php', '.xls', __FILE__));
$objWriter3 = PHPExcel_IOFactory::createWriter($objPHPExcel1, 'Excel5');
$objWriter3->save(str_replace('.php', '.xls', __FILE__));
$objWriter4 = PHPExcel_IOFactory::createWriter($objPHPExcel2, 'Excel5');
$objWriter4->save(str_replace('.php', '.xls', __FILE__));

?>
		
		
		
		
		
		<section class="s12">
			<h2>最新相簿</h2>
			<div class="s12_1">
				<a class="switch switch01">
					<i class="fa fa-chevron-left fa-3x"></i>
				</a>

				<div class="s12_1content_mobile">
						<div class="s12_i03_m">
							<h4>愛隨緣</h4>
							<p>2016.8.1<br>石門水庫收費站</p>
						</div>
						<div class="s12_i05_m">
							<h4>愛隨緣的石門水庫遊玩紀錄</h4>
							<p>吃飽喝足當然是要進入石門水庫，這裡種植許多的樹，春天可賞杜鵑花、桐花，夏天可賞綠楓，秋天賞楓葉，冬天賞湖景，一年四季有不同的變化，在夏日時節到訪不時吹起微涼的風，不會太悶熱。</p>
							<p class="view_all">閱讀全文<i class="fa fa-caret-right fa-x"></i></p>
						</div>
						<div>
							<a class="imgbox s12_i01_m"><img src="img/s12_01.png"></a>
							<a class="imgbox s12_i02_m"><img src="https://c1.staticflickr.com/9/8796/28904432186_2c609865e8_b.jpg"></a>
							<a class="imgbox s12_i04_m"><img src="https://c1.staticflickr.com/9/8418/28570172592_6429557b6e_b.jpg"></a>
							<a class="imgbox s12_i06_m"><img src="img/s12_04.png"></a>
						</div>
				</div>

				<div class="s12_1content">
						<a class="imgbox s12_i01"><img src="img/s12_01.png"></a>
						<a class="imgbox s12_i02"><img src="img/s12_02.png"></a>
						<div class="s12_i03">
							<h4>愛隨緣</h4>
							<p>2016.8.1<br>石門水庫收費站</p>
						</div>
						<a class="imgbox s12_i04"><img src="img/s12_03.png"></a>
						<div class="s12_i05">
							<h4>愛隨緣的石門水庫遊玩紀錄</h4>
							<p>吃飽喝足當然是要進入石門水庫，這裡種植許多的樹，春天可賞杜鵑花、桐花，夏天可賞綠楓，秋天賞楓葉，冬天賞湖景，一年四季有不同的變化，在夏日時節到訪不時吹起微涼的風，不會太悶熱。</p>
							<p class="view_all">閱讀全文<i class="fa fa-caret-right fa-x"></i></p>
						</div>
						<a class="imgbox s12_i06"><img src="img/s12_04.png"></a>
				</div>
				<a class="switch switch02">
					<i class="fa fa-chevron-right fa-3x"></i>
				</a>
			</div>
            <div class='more'>
            	<a href='album.php' class='more_r_btn'>更多<i class='fa fa-caret-right fa-x'></i>
            	</a>
            </div>
		</section>
		
		
		
		
		
		<section class="s13">
			<h2>最新照片</h2>

			<div class="s13_1_mobile">
				<a class="imgbox"><img src="img/s13_01.png"></a>
				<a class="imgbox"><img src="img/s13_02.png"></a>
				<a class="imgbox"><img src="img/s13_03.png"></a>
				<a class="imgbox"><img src="img/s13_04.png"></a>
				<a class="imgbox"><img src="img/s13_05.png"></a>
				<a class="imgbox"><img src="img/s13_06.png"></a>
				<a class="imgbox"><img src="img/s13_07.png"></a>
				<a class="imgbox"><img src="img/s13_08.png"></a>
			</div>

			<div class="s13_1">
				<div class="s13_1box_1">
					<a class="imgbox"><img src="img/s13_01.png"></a>
					<a class="imgbox"><img src="img/s13_02.png"></a>
					<a class="imgbox"><img src="img/s13_03.png"></a>
				</div>
				<div class="s13_1box_2">
					<a class="imgbox"><img src="img/s13_04.png"></a>
					<a class="imgbox"><img src="img/s13_05.png"></a>
				</div>
				<div class="s13_1box_3">
					<a class="imgbox"><img src="img/s13_06.png"></a>
					<a class="imgbox"><img src="img/s13_07.png"></a>
					<a class="imgbox"><img src="img/s13_08.png"></a>
				</div>
			</div>

            <div class='more'>
            	<a href='wall.php' class='more_r_btn'>更多<i class='fa fa-caret-right fa-x'></i>
            	</a>
            </div>
		</section>
		
		
		
		
		
		<section class="s14">
			<h2>最新活動</h2>
			<div class="s14_1">
				<a class="imgbox"><img src="img/s14_01.png"></a>
				<div>
					<h3>2016 蛾類調查志工特殊訓練</h3>
					<h4>日期 : 10/21~10/22</h4>
					<h4>地點 : 南投縣集集鎮特生中心</h4>
					<a href="#" class="blue_btn">簡章</a>
					<p>我們希望能有4~6隊的蛾類調查志工隊，如果報名特別踴躍的話，
					我們也只好進行篩選，並且將在農曆春節過後通知各位組隊或個別
					報名的蛾友。</p>
				</div>
			</div>
            <div class='more'>
            	<a href='event.php' class='more_r_btn'>更多<i class='fa fa-caret-right fa-x'></i>
            	</a>
            </div>
		</section>
		
		
		
		
		
	<?php include 'footer.php';?>





	</div>
	<script>
		$(function(){

			$('.switch01').click(function(){
				$('.s12_i01').animate({width:"315px",height: "245px",top:"0",left:"0"},1200);
				$('.s12_i02').animate({width:"213px",height: "150px",top:"95px",left:"315px"},1200);
				$('.s12_i03').animate({width:"138px",height: "150px",top:"95px",left:"528px"},1200);
				$('.s12_i04').animate({width:"132px",height: "99px",top:"95px",left:"666px"},1200);
				$('.s12_i05').animate({width:"468px",height: "153px",top:"245px",left:"0",padding: "20px 30px"},1200);
				$('.s12_i06').animate({width:"270px",height: "205px",top:"245px",left:"528px"},1200);

				$('.s12_i01 img').attr("src", 'img/s12_01.png');
				$('.s12_i02 img').attr("src", 'img/s12_02.png');
				$('.s12_i04 img').attr("src", 'img/s12_03.png');
				$('.s12_i06 img').attr("src", 'img/s12_04.png');
			});
			$('.switch02').click(function(){
				$('.s12_i01').animate({width:"213px",height: "150px",top:"95px",left:"0"},1200);
				$('.s12_i02').animate({width:"315px",height: "245px",top:"0",left:"351px"},1200);
				$('.s12_i03').animate({top:"95px",left:"213px"},1200);
				$('.s12_i04').animate({width:"270px",height: "205px",top:"245px",left:"81px"},1200);
				$('.s12_i05').animate({width:"387px",height: "153px",top:"245px",left:"351px",padding: "5px 30px"},1200);
				$('.s12_i06').animate({width:"132px",height: "99px",top:"146px",left:"666px"},1200);

				$('.s12_i01 img').attr("src", 'img/s12_06.jpg');
				$('.s12_i02 img').attr("src", 'img/s12_05.jpg');
				$('.s12_i04 img').attr("src", 'img/s12_07.jpg');
				$('.s12_i06 img').attr("src", 'img/s12_08.jpg');

			});
		});
	</script>
</body>
</html>