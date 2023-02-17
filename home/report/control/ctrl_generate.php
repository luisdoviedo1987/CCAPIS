<?php
session_start();

$container = include_once('../../global/settings.php');

require '../acceso/index.php';

require '../../_connect/database/PDOConnection.php';

$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require 'model/mdl_report.php';
$accion = new mdl_report($db);


$idRoutine = $_POST["id_routine"];
$startDate = $_POST["start_date"];
$finalDate = $_POST["final_date"];


$response = $accion->getRoutineInfo($idRoutine);

$routineEnc = $response["rowSets"][1];
$routineColumns = $response["rowSets"][2];
$routineOthers = $response["rowSets"][2];


if ($response["result"]["error"] == 0) {
    // print_r($routineEnc);
    // print_r($routineColumns);
    // print_r($routineOthers);


    $data = $accion->getDataTable($routineEnc["generated_table_name"] , $startDate , $finalDate );


   require_once '../../vendor/PHPExcel/Classes/PHPExcel.php';

    // Create new PHPExcel object
    $objPHPExcel = new PHPExcel();

    $objPHPExcel->getProperties()->setCreator("Medismart ")
            ->setLastModifiedBy("Medismart ".$container['appName'])
            ->setTitle("Medismart ".$container['appName'])
            ->setSubject("Medismart ".$container['appName'])
            ->setDescription("Medismart ".$container['appName'])
            ->setKeywords("Medismart ".$container['appName'])
            ->setCategory("Medismart ".$container['appName']);

     $objPHPExcel->setActiveSheetIndex(0);

     $letter = "A";

     $objPHPExcel->getActiveSheet()->getColumnDimension($letter)->setWidth(10);
     $objPHPExcel->getActiveSheet()->getStyle($letter.'1')->getFont()->setBold(true);
     $objPHPExcel->getActiveSheet()->setCellValue($letter.'1', "ID");
     $letter++;

    foreach($routineColumns as $rowColumn){
        $objPHPExcel->getActiveSheet()->getColumnDimension($letter)->setWidth(10);
        $objPHPExcel->getActiveSheet()->getStyle($letter.'1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->setCellValue($letter.'1', $rowColumn["key"]);
        $letter++;
    }

    $objPHPExcel->getActiveSheet()->getColumnDimension($letter)->setWidth(10);
    $objPHPExcel->getActiveSheet()->getStyle($letter.'1')->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValue($letter.'1', "Usuario");
    $letter++;

    $objPHPExcel->getActiveSheet()->getColumnDimension($letter)->setWidth(10);
    $objPHPExcel->getActiveSheet()->getStyle($letter.'1')->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValue($letter.'1', "Fecha Creacion");
    $letter++;

    $objPHPExcel->getActiveSheet()->getColumnDimension($letter)->setWidth(10);
    $objPHPExcel->getActiveSheet()->getStyle($letter.'1')->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValue($letter.'1', "Fecha Modificacion");
   
    $rowID = 2;
    foreach ($data as $rowArray) {
        $objPHPExcel->getActiveSheet()->fromArray($rowArray, null, 'A'. $rowID++);
     }

     $objPHPExcel->getActiveSheet()->setTitle("data");


     $objPHPExcel->setActiveSheetIndex(0);
 
     $styleType1 = array(
        'font' => array(
            'bold' => true,
            'color' => array('rgb' => '000000'),
            'size' => 11,
            'name' => 'Calibri'),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '008080')),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN)
            ));
    
    
    $objPHPExcel->getActiveSheet(0)->getStyle('A1:'.$letter.'1')->applyFromArray($styleType1);
    $objPHPExcel->getActiveSheet(0)->getRowDimension('1')->setRowHeight(40);

    $letter++;
    for ($col = 'A'; $col !== $letter; $col++) {
        $objPHPExcel->getActiveSheet(0)
                ->getColumnDimension($col)
                ->setAutoSize(true);
    }


    $objPHPExcel->setActiveSheetIndex(0);


    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="data.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;

}else{

    echo "No se encontro informacion de la rutina";
}

