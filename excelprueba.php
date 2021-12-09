<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\SpreadSheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
 
$spreadsheet = new SpreadSheet();

$inputFileName = 'Mi excel.xlsx';
$spreadsheet = IOFactory::load($inputFileName);

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva=$spreadsheet->getActiveSheet();

include("conexion.php");
        $alumno=$_REQUEST['alumno'];
        $query="SELECT idPrestamo, alumno, DATE_FORMAT(fecha ,'%d/%m/%Y %h:%i %p') as fecha , herramientas from tbprestamos WHERE alumno='$alumno'";
        $query2="select * from tbalumnos WHERE alumno='$alumno'";
        $resultado=$conexion->query($query);
        $resultado2=$conexion->query($query2);
        $fila=14;
while($row2=$resultado2->fetch_assoc()){
$hojaActiva->setCellValue('C9',$alumno);

$hojaActiva->setCellValue('D10',$row2['grado']);
$hojaActiva->setCellValue('G10',$row2['ncontrol']);
}
while($row=$resultado->fetch_assoc()){
$hojaActiva->setCellValue('G9',$row['fecha']);
$hojaActiva->setCellValue('B'.$fila,'1');
$hojaActiva->setCellValue('B'.$fila,'1');
$hojaActiva->setCellValue('B'.$fila,'1');
$hojaActiva->setCellValue('B'.$fila,'1');
$hojaActiva->setCellValue('C'.$fila,$row['herramientas']);
$fila++;
            }
        
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Mi excel.xlsx"');
header('Cache-Control: max-age=0');

$writer=IOFactory::createWriter($spreadsheet,'Xlsx');
$writer->save('php://output');
/*
$writer = new Xlsx($spreadsheet);
$writer->save('Mi excel.xlsx');
*/