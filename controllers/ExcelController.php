<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;
use app\models\Problem;
use app\models\HomeworkItem;
use yii\helpers\Json;

require dirname(dirname(__FILE__)).'\phpExcel\PHPExcel.php';

class ExcelController extends Controller
{
    public function makeDownloadHead($filename)
    {
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header("Expires: 0");
    }
    
    public function actionProblemModel()
    {       
        $this->makeDownloadHead("problem-model");

        $excel_head_content=['Title','Description','MemoryLimit','TimeLimit','Input','Output','InputSample','OutputSample','Tip'];
        $excel_head_position=['A','B','C','D','E','F','G','H','I','J'];
        $excel_head_width=[20,40,15,15,30,30,30,30,30];
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $sheet=$objPHPExcel->getActiveSheet();
        $sheet->getDefaultRowDimension()->setRowHeight(100);
        $sheet->getRowDimension('1')->setRowHeight(30);
        $sheet->freezePane('A1');
        $col=count($excel_head_content);
        for($i=0;$i<$col;$i++)
        {
            $position=$excel_head_position[$i];
            $sheet->getColumnDimension($position)->setWidth($excel_head_width[$i]);
            $sheet->getStyle($position.'1')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle($position.'1')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
            $sheet->setCellValue($position.'1',$excel_head_content[$i]);
            $sheet->getStyle($position.'1')->getFont()->setBold(true);
        }
        $objWriter= \PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
        $objWriter->save('php://output');
        exit;
    }
    public function actionStudentListModel(){
        $filename=dirname(dirname(__FILE__)).'\execl\student-list-model.xls';
        $this->makeDownloadHead("student-list-model");
        echo file_get_contents($filename);
        return;
    }
    public static function readfile($filename)
    {
        $objReader = \PHPExcel_IOFactory::createReader('Excel2007'); //建立reader对象
        if(!$objReader->canRead($filename)){
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        }
        

        $objPHPExcel = $objReader->load($filename);
        $sheet = $objPHPExcel->getSheet();
        $row = $sheet->getHighestDataRow(); // 取得总行数
        $col = \PHPExcel_Cell::columnIndexFromString($sheet->getHighestDataColumn());	//列数

       
        $columns = array('A','B','C','D','E','F','G','H','I','J','K','L','M');

        $head=array();

        for($c=0;$c<$col;$c++)
        {
            $head[]=$sheet->getCell($columns[$c].'1')->getValue();
            if(trim($head[$c])==""){
                $col=$c;
                unset($head[$c]);
                continue;
            }
        }
        
        $reader=[]; 
        $out=false;       
        for($r=2;$r<=$row;$r++)
        {
            $one=array();
            for($c=0;$c<$col;$c++)
            {
                $value=$sheet->getCell($columns[$c].$r)->getValue();
                $value=trim($value);
                if($value==""){
                    $out=true;
                    break;
                }
 //               echo $columns[$c]."$r:$value\n";        //输出单元格内容        
                $attribute=$head[$c];
                $one[$attribute]=$value;
            }
            if($out) break;
            $reader[]=$one;
        }
        $data=new \stdClass();
        $data->head=$head;
        $data->reader=$reader;
        return $data;
    }
    public function actionTest()
    {
        $Problem=new HomeworkItem();
        $Problem->problem_id=1;
        echo Json::encode(['json'=>$Problem]);
    }
}