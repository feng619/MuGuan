
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/01index.css">
    <link rel="stylesheet" type="text/css" href="../css/animewall.css">
    <script src="https://use.fontawesome.com/7a621b77bc.js"></script>
</head>
<body>
<?php


    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    date_default_timezone_set('Europe/London');
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    require_once dirname(__FILE__) . '/PHPExcel-1.8/Classes/PHPExcel.php';
    $inputFileType1 = 'Excel5';
    $inputFileName1 ='user.xls';
    $objPHPExcelReader1 = PHPExcel_IOFactory::createReader($inputFileType1);
    $objPHPExcel1 = $objPHPExcelReader1->load($inputFileName1);
    $objPHPExcel1->setActiveSheetIndex(0);
    $objWorksheet1 = $objPHPExcel1->getActiveSheet();

    $inputFileType2 = 'Excel5';
    $inputFileName2 ='album.xls';
    $objPHPExcelReader2 = PHPExcel_IOFactory::createReader($inputFileType2);
    $objPHPExcel2 = $objPHPExcelReader2->load($inputFileName2);
    $objPHPExcel2->setActiveSheetIndex(0);
    $objWorksheet2 = $objPHPExcel2->getActiveSheet();

    $inputFileType3 = 'Excel5';
    $inputFileName3 ='photo.xls';
    $objPHPExcelReader3 = PHPExcel_IOFactory::createReader($inputFileType3);
    $objPHPExcel3 = $objPHPExcelReader3->load($inputFileName3);
    $objPHPExcel3->setActiveSheetIndex(0);
    $objWorksheet3 = $objPHPExcel3->getActiveSheet();

    $inputFileType4 = 'Excel5';
    $inputFileName4 ='photo_reply.xls';
    $objPHPExcelReader4 = PHPExcel_IOFactory::createReader($inputFileType4);
    $objPHPExcel4 = $objPHPExcelReader4->load($inputFileName4);
    $objPHPExcel4->setActiveSheetIndex(0);
    $objWorksheet4 = $objPHPExcel4->getActiveSheet();


echo $objWorksheet1->getCellByColumnAndRow(3, 3)->getValue();
echo $objWorksheet2->getCellByColumnAndRow(2, 4)->getValue();
echo $objWorksheet3->getCellByColumnAndRow(3, 3)->getValue();
echo $objWorksheet4->getCellByColumnAndRow(2, 4)->getValue();





echo "        
        <section class='s11'>
            <h2>動態牆</h2>
            <div class='wall'>
";
    for($i=0; $i<4; $i++){
        $user_key = $objWorksheet3->getCellByColumnAndRow(0, $i+3)->getValue();
        $album_key = $objWorksheet3->getCellByColumnAndRow(1, $i+3)->getValue();
        $photo_key = $objWorksheet3->getCellByColumnAndRow(2, $i+3)->getValue();
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
                    <a href='#' class='imgbox'><img src='",$objWorksheet3->getCellByColumnAndRow(10, $row)->getValue(),"'></a>                            
                ";
                break;
            }
        }
        echo "
                    <div class='wall_box_like'>
                        <a href='#' class='like'></a>
                        <span></span>
                    </div>
            ";
        //photo_reply : use photo key to find row
        for ($row = 3, $cell = $objWorksheet4->getCellByColumnAndRow(0, 3); $cell != ""; $row++){
             $cell = $objWorksheet4->getCellByColumnAndRow(0, $row);
            if ($cell->getValue() == $photo_key){ //found row
                $col = 1;
                $reply_user_key = $objWorksheet4->getCellByColumnAndRow($col, $row);
                while($reply_user_key !=""){
                    // go to user excel to find info by user key : col=0 , row=??($r)
                    for ($r = 3, $box = $objWorksheet1->getCellByColumnAndRow(0, 3); $box != ""; $r++){
                        $box = $objWorksheet1->getCellByColumnAndRow(0, $r);
                        if ($reply_user_key->getValue() == $box->getValue()){
                            // $r=row col5=照片 col3=名字
                            echo "
                                <div class='wall_box_reply'>
                                    <div>
                                        <div class='imgbox'><img src='",$objWorksheet1->getCellByColumnAndRow(5, $r)->getValue(),"'></div>
                                        <p class='person_reply'>",$objWorksheet1->getCellByColumnAndRow(3, $r)->getValue(),"</p>
                                    </div>
                                    <p>",$objWorksheet4->getCellByColumnAndRow($col +1, $row)->getValue(),$objWorksheet4->getCellByColumnAndRow($col +2, $row)->getValue(),"</p>
                                </div>
                            </div> 

                            ";
                        }
                    }
                    $col+=3;
                    $reply_user_key = $objWorksheet4->getCellByColumnAndRow($col, $row);
                }                
                break;
            }
        }
    }
echo"
            </div>
            <p class='more'>更多<i class='fa fa-caret-right fa-x'></i></p>
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

</body>
</html>