<?php
namespace Bo\AdminBundle\Libs\PHPExcel;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ScheduleFactory
{
	private $sType;
	private $sModule;

    public function __construct($module,$type="Excel5")
    {
        $this->sType = $type;
		$this->sModule = $module;
    }
	/**
	* Initialisation de la classe PHPExcel 
	*/
	public function initXLS(){
		return new \PHPExcel();
	}
	/**
	* Appel de la méthode createwriter de la classe IOFactory avec les paramètres $oPHPExcel et $type
	* 
	*/
    public function createWriter($oPHPExcel,$type)
    {
        return call_user_func(array("\PHPExcel_IOFactory", 'createWriter'), $oPHPExcel, $type);
    }
    public function createStreamedResponse(\PHPExcel_Writer_IWriter $writer, $status = 200, $headers = array())
    {
        return new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            },
            $status,
            $headers
        );
    }	
	private function getAlphabet(){
		return 	array('1'=>'A','2'=>'B','3'=>'C','4'=>'D','5'=>'E','6'=>'F','7'=>'G','8'=>'H','9'=>'I','10'=>'J','11'=>'K','12'=>'L','13'=>'M','14'=>'N','15'=>'O','16'=>'P','17'=>'Q','18'=>'R','19'=>'S','20'=>'T','21'=>'U','22'=>'V','23'=>'W','24'=>'X','25'=>'Y','26'=>'Z','27'=>'AA','28'=>'AB','29'=>'AC','30'=>'AD','31'=>'AE','32'=>'AF','33'=>'AG','34'=>'AH','35'=>'AI','36'=>'AJ','37'=>'AK','38'=>'AL','39'=>'AM','40'=>'AN','41'=>'AO','42'=>'AP','43'=>'AQ','44'=>'AR','45'=>'AS','46'=>'AT','47'=>'AU','48'=>'AV','49'=>'AW','50'=>'AX','51'=>'AY','52'=>'AZ','53'=>'BA','54'=>'BB','55'=>'BC','56'=>'BD','57'=>'BE','58'=>'BF','59'=>'BG','60'=>'BH','61'=>'BI','62'=>'BJ','63'=>'BK','64'=>'BL','65'=>'BM','66'=>'BN','67'=>'BO','68'=>'BP','69'=>'BQ','70'=>'BR','71'=>'BS','72'=>'BT','73'=>'BU','74'=>'BV','75'=>'BW','76'=>'BX','77'=>'BY','78'=>'BZ');	
	}
	//generate PHPexcel with the schedule data
	public function getData($oPHPExcel,$aHeader,$aData,$aEmployee){
		$aStyle0 = array('font' => array('bold' => true,'size'=> 16,),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));
		$aStyle1 = array('font' => array('bold' => false,'size'=> 10,),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));
		$aStyle2 = array('font' => array('bold' => false,'size' => 14,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'fill' 	=> array('type'	=> \PHPExcel_Style_Fill::FILL_SOLID,'color'=> array('rgb' => 'B9D3EE')),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));
		$aStyle3 = array('font' => array('bold' => false,'size' => 10,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'fill' => array('type'=> \PHPExcel_Style_Fill::FILL_SOLID,'color'=> array('rgb' => 'B9D3EE')),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));
		$aStyle4 = array('font' => array('bold' => false,'size'=> 10,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));
		$aStyle5 = array('borders' => array('bottom' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),));	
		$aStyle6 = array('borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),);	
		$aStyle7 = array('borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),);
		$aStyle8 = array('font' => array('bold' => false,'size'=> 10,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));	
		$aStyle9 = array('font' => array('bold' => true,'size'=> 13,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'bottom' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'fill' => array('type'	=> \PHPExcel_Style_Fill::FILL_SOLID,'color'=> array('rgb' => '0033FF')),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));		
		$aStyle10 = array('font' => array('bold' => false,'size' => 10,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'fill' 	=> array('type'	=> \PHPExcel_Style_Fill::FILL_SOLID,'color'=> array('rgb' => 'DDD8EE')));
		$aStyle11 = array('font' => array('bold' => true,'size'=> 10,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));
		$aStyle12 = array('font' => array('size'=> 10,),'borders' => array('top' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'left' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),'right' => array('style' => \PHPExcel_Style_Border::BORDER_THIN,),),'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,));

		$length = count($aHeader)*2;
		$aA=$this->getAlphabet();
		$oPHPExcel->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);		 
	    	$oPHPExcel->getActiveSheet()->getProtection()->setSheet(false);
		// Set default font
		$oPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
		$oPHPExcel->getDefaultStyle()->getFont()->setSize(12);
		// Set title of the document
		$oPHPExcel->getActiveSheet()->mergeCells('A1:'.$aA[$length].'1');
		$oPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($aStyle0);
		$oPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_BLUE);	
		$oPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(20);	
		$oPHPExcel->getActiveSheet()->setCellValue('A1', 'Employees Schedules : Horaires des Employés');
		$i=3;
		$j=1;
		$k=$i+1;
		$oPHPExcel->getActiveSheet()->mergeCells($aA[$j].$i.":".$aA[$j].$k);
		$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,"Employé");
		$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
		$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle2);
		$j=2;
		//Header
		foreach($aHeader as $value){
			$k=$j+1;
			$l=$k+1;
			$oPHPExcel->getActiveSheet()->mergeCells($aA[$j].$i.":".$aA[$l].$i);
			$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i, $value->format("d-m-Y"));	
			$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
			$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle3);
			$j=$l+1;
		}
		$k=$i+1;
		$oPHPExcel->getActiveSheet()->mergeCells($aA[$j].$i.":".$aA[$j].$k);
		$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,"Total");
		$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
		$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle3);
		$i=$i+1;
		$j=1;
		$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,"");
		$j=2;
		foreach($aHeader as $value){
			$k=$j+1;
			$l=$k+1;
			$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i, "AM");	
			$oPHPExcel->getActiveSheet()->setCellValue($aA[$k].$i, "PM");	
			$oPHPExcel->getActiveSheet()->setCellValue($aA[$l].$i, "EV");	
			$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
			$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$k])->setAutoSize(true);
			$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$l])->setAutoSize(true);
			$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle3);
			$oPHPExcel->getActiveSheet()->getStyle($aA[$k].$i)->applyFromArray($aStyle3);
			$oPHPExcel->getActiveSheet()->getStyle($aA[$l].$i)->applyFromArray($aStyle3);
			$j=$l+1;
		}
		$k=$i+1;
		$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,"");

		foreach($aEmployee as $oEmployee){
			if(isset($aData[$oEmployee->getId()])){
				$total = 0;
				$aEmpSch = $aData[$oEmployee->getId()];	
				$i=$i+1;
				$j=1;
				$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
				//$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle2);	
				$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,$oEmployee->getFirstname()." ".$oEmployee->getName());
				$j=2;
				foreach($aHeader as $value){
					if(isset($aEmpSch[$value->format("Y-m-d")])){
						$aTab = $aEmpSch[$value->format("Y-m-d")];
						$am = $aTab['am'];
						$pm = $aTab['pm'];
						$ev = $aTab['ev'];
						$total = $total+$am+$pm+$ev;
					}else{
						$am = 0;
						$pm = 0;
						$ev = 0;
					}
					//if($am!="Hol" and $pm!="Hol") $total = $total+$am+$pm;
					$k=$j+1;
					$l=$k+1;
					$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,$am);	
					$oPHPExcel->getActiveSheet()->setCellValue($aA[$k].$i,$pm);
					$oPHPExcel->getActiveSheet()->setCellValue($aA[$l].$i,$ev);	
					$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
					$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$k])->setAutoSize(true);
					$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$l])->setAutoSize(true);
					$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle1);
					$oPHPExcel->getActiveSheet()->getStyle($aA[$k].$i)->applyFromArray($aStyle1);
					$oPHPExcel->getActiveSheet()->getStyle($aA[$l].$i)->applyFromArray($aStyle1);
					$j=$l+1;
					
				}
				$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
				$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i,$total);
				$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($aStyle1);				
			}
		}	
       		$oPHPExcel->getActiveSheet()->setTitle('Simple');
       		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
       		$oPHPExcel->setActiveSheetIndex(0);	
	   
	   	// Rename sheet
		$oPHPExcel->getActiveSheet()->setTitle($this->sModule);
		
		return $oPHPExcel;
	}
	public function getProperty($oPHPExcel,$sCName,$sMName,$sCategory="CDM result file"){
		$oPHPExcel->getProperties()->setCreator($sCName)
           ->setLastModifiedBy($sMName)
           ->setTitle("Office ".$this->sType." XLSX Test Document")
           ->setSubject("Office ".$this->sType." XLSX Test Document")
           ->setDescription("Test document for Office ".$this->sType." XLSX, generated using PHP classes.")
           ->setKeywords("office ".$this->sType." openxml php")
           ->setCategory($sCategory);	
		return $oPHPExcel;
	}
	protected function getWeekDay($month,$year){
		$aResult = array();
		for($i=1;$i<32;$i=$i+1){
			$day = date("N",mktime(0, 0, 0, $month, $i, $year));
			$oDate = new \DateTime($year."-".$month."-".$i);
			if($oDate->format("m")==$month){
				$aResult[$i]=($day==6 or $day==7)?0:1;
			}else{
				$aResult[$i]=0;
			}
		}
		return $aResult;		
	}
	public function createXLS($aHeader,$aData,$aEmployee){
		
        	// Appel de l'objet PHPExcel
        	$oPHPExcel = $this->initXLS();
		
		//Définition de la proprieté du document
		$oPHPExcel = $this->getProperty($oPHPExcel,"JMN","JMN");
		
		$oPHPExcel = $this->getData($oPHPExcel,$aHeader,$aData,$aEmployee);

        	// create the writer
        	$writer = $this->createWriter($oPHPExcel, 'Excel5');
		
        	// create the response
       	 	$response = $this->createStreamedResponse($writer);
		
        	// adding headers
        	$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        	$response->headers->set('Content-Disposition', 'attachment;filename='.$this->getFileName().'.xls');
        	$response->headers->set('Pragma', 'public');
        	$response->headers->set('Cache-Control', 'maxage=1');

        	return $response;  		
	}
	public function newXLS($contract,$aTsInfo,$aTsStudent,$month,$year){
		
		$styleArray = array(
			'font' => array(
				'bold' => true,
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'fill' => array(
				'type' => \PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation' => 90,
				'startcolor' => array(
					'argb' => 'FFA0A0A0',
				),
				'endcolor' => array(
					'argb' => 'FFFFFFFF',
				),
			),
		);
		$aStyle0 = array(
			'font' => array(
				'bold' => true,
				'size'=> 34,
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);
		$aStyle1 = array(
			'font' => array(
				'bold' => true,
				'size'=> 22,
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);
		$aStyle2 = array(
			'font' => array(
				'bold' => false,
				'size' => 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'fill' 	=> array(
				'type'		=> \PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('rgb' => '00B2EE') //9AC0CD
			)
		);	
		$aStyle22 = array(
			'font' => array(
				'bold' => false,
				'size' => 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'fill' 	=> array(
				'type'		=> \PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('rgb' => 'B9D3EE') //00B2EE
			)
		);	
		$aStyle3 = array(
			'font' => array(
				'bold' => false,
				'size'=> 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);
		$aStyle4 = array(
			'borders' => array(
				'bottom' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			)
		);	
		$aStyle5 = array(
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
		);	
		$aStyle5 = array(
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
		);
		$aStyle6 = array(
			'font' => array(
				'bold' => false,
				'size'=> 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);	
		$aStyle7 = array(
			'font' => array(
				'bold' => true,
				'size'=> 13,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'bottom' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'fill' 	=> array(
				'type'		=> \PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('rgb' => '0033FF')
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);		
		$aStyleWeek = array(
			'font' => array(
				'bold' => false,
				'size' => 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'fill' 	=> array(
				'type'		=> \PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('rgb' => 'DDD8EE')
			)
		);
		$aStyleName = array(
			'font' => array(
				'bold' => true,
				'size'=> 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);
		$aStyleNumber = array(
			'font' => array(
				'size'=> 10,
			),
			'borders' => array(
				'top' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
				'right' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN,
				),
			),
			'alignment' => array(
				'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
			)
		);
		
        	// Appel de l'objet PHPExcel
        	$oPHPExcel = $this->initXLS();
		
		//Définition de la proprieté du document
		$oPHPExcel = $this->getProperty($oPHPExcel,"JMN","JMN");

		$oPHPExcel->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);	
		$oPHPExcel->getActiveSheet()->getPageSetup()->setVerticalCentered(true);		
	    	$oPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
		
		// Set default font
		$oPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
		$oPHPExcel->getDefaultStyle()->getFont()->setSize(12);	
		//$oPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);

		$oPHPExcel->setActiveSheetIndex(0);		
		
		// Set title of the document
		$oPHPExcel->getActiveSheet()->mergeCells('A1:AK1');
		$oPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($aStyle0);
		$oPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_BLUE);		
		$oPHPExcel->getActiveSheet()->setCellValue('A1', 'Centre de langues internationales  Charpentier');
		
		// Set default font
		$oPHPExcel->getActiveSheet()->mergeCells('A2:AK2');
		$oPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($aStyle1);
		$oPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_BLUE);	
		$oPHPExcel->getActiveSheet()->setCellValue('A2', 'CLIC-Ottawa-Gatineau');
			
		$oPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
		$oPHPExcel=$this->formatCellWidth($oPHPExcel,4);
		
		//print line Four
		$oPHPExcel->getActiveSheet()->getStyle('A4')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->setCellValue('A4', 'MINISTERE');	
		$oPHPExcel->getActiveSheet()->mergeCells('B4:E4');
		$oPHPExcel->getActiveSheet()->getStyle('B4:E4')->applyFromArray($aStyle3);		
		$oPHPExcel->getActiveSheet()->setCellValue('B4', $this->getClient($contract));
		$oPHPExcel->getActiveSheet()->getStyle('F4:I4')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->mergeCells('F4:I4');	
		$oPHPExcel->getActiveSheet()->setCellValue('F4', 'DEBUT DU CONTRAT');
		$oPHPExcel->getActiveSheet()->getStyle('J4:M4')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('J4:M4');	
		$oPHPExcel->getActiveSheet()->setCellValue('J4', $contract->getStartdate()->format("Y-m-d"));
		$oPHPExcel->getActiveSheet()->getStyle('N4:AK4')->applyFromArray($aStyle22);
		$oPHPExcel->getActiveSheet()->mergeCells('N4:AK4');	
		$oPHPExcel->getActiveSheet()->setCellValue('N4','Commentaire:');
		
		//print line five
		$oPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->setCellValue('A5', 'MOIS');	
		$oPHPExcel->getActiveSheet()->mergeCells('B5:E5');
		$oPHPExcel->getActiveSheet()->getStyle('B5:E5')->applyFromArray($aStyle3);		
		$oPHPExcel->getActiveSheet()->setCellValue('B5', '');
		$oPHPExcel->getActiveSheet()->getStyle('F5:I5')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->mergeCells('F5:I5');	
		$oPHPExcel->getActiveSheet()->setCellValue('F5', 'FIN DU CONTRAT');
		$oPHPExcel->getActiveSheet()->getStyle('J5:M5')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('J5:M5');	
		$oPHPExcel->getActiveSheet()->setCellValue('J5', $contract->getEnddate()->format("Y-m-d"));
		$oPHPExcel->getActiveSheet()->getStyle('N5:AK5')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('N5:AK5');	
		$oPHPExcel->getActiveSheet()->setCellValue('N5', '');
		
		//print line six
		$oPHPExcel->getActiveSheet()->getStyle('A6')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->setCellValue('A6', 'NUMERO DE GROUPE');	
		$oPHPExcel->getActiveSheet()->mergeCells('B6:E6');
		$oPHPExcel->getActiveSheet()->getStyle('B6:E6')->applyFromArray($aStyle3);		
		$oPHPExcel->getActiveSheet()->setCellValue('B6', $this->getGroup($contract));
		$oPHPExcel->getActiveSheet()->getStyle('F6:I6')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->mergeCells('F6:I6');	
		$oPHPExcel->getActiveSheet()->setCellValue('F6', 'LANGUE VISEE');
		$oPHPExcel->getActiveSheet()->getStyle('J6:M6')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('J6:M6');	
		$oPHPExcel->getActiveSheet()->setCellValue('J6', $contract->getLanguage());
		$oPHPExcel->getActiveSheet()->getStyle('N6:AK6')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('N6:AK6');	
		$oPHPExcel->getActiveSheet()->setCellValue('N6', '');
		
		//print line seven
		$oPHPExcel->getActiveSheet()->getStyle('A7')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->setCellValue('A7', 'NIVEAU RECHERCHE');	
		$oPHPExcel->getActiveSheet()->mergeCells('B7:E7');
		$oPHPExcel->getActiveSheet()->getStyle('B7:E7')->applyFromArray($aStyle3);		
		$oPHPExcel->getActiveSheet()->setCellValue('B7', $contract->getTargetlevel());
		$oPHPExcel->getActiveSheet()->getStyle('F7:I7')->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->mergeCells('F7:I7');	
		$oPHPExcel->getActiveSheet()->setCellValue('F7', 'LOCAL');
		$oPHPExcel->getActiveSheet()->getStyle('J7:M7')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('J7:M7');	
		$oPHPExcel->getActiveSheet()->setCellValue('J7', $this->getLocal($contract));
		$oPHPExcel->getActiveSheet()->getStyle('N7:AK7')->applyFromArray($aStyle3);
		$oPHPExcel->getActiveSheet()->mergeCells('N7:AK7');	
		$oPHPExcel->getActiveSheet()->setCellValue('N7', '');
		$oPHPExcel->getActiveSheet()->getStyle('A7:AK7')->applyFromArray($aStyle4);		

		//print line nine
		$oPHPExcel->getActiveSheet()->getStyle('A10:AK10')->applyFromArray($aStyle22);
		$oPHPExcel->getActiveSheet()->setCellValue('A10', 'PROFESSEUR');
		$oPHPExcel->getActiveSheet()->mergeCells('AG10:AK10');			
		$aAlpha = $this->getAlphabet();
		
		//Writing the numbers 1 to 31 for the month
		$j=2;
		for($i=1;$i<32;$i=$i+1){
			$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j]."10")->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j]."10")->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j]."10", $i);
			$j=$j+1;
		}
		$oPHPExcel->getActiveSheet()->getStyle('AG10')->getBorders()->getTop()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
		$oPHPExcel->getActiveSheet()->getStyle('AG10')->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
		$oPHPExcel->getActiveSheet()->getStyle('AG10')->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);		
		$oPHPExcel->getActiveSheet()->getStyle('AG10')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		
		$oPHPExcel->getActiveSheet()->setCellValue('AG10', 'Total');
		
		//Teacher Hours writing 
		$aHour = $aTsInfo[0];
		$aEmployee = $aTsInfo[1];
		$aWeekDay = $this->getWeekDay($month,$year);
		$i=0;
		$line=10;
		$totalmonth=0;
		foreach($aEmployee as $oEmployee){
			$total=0;
			$i++;
			$sFullname = $i."- ".$oEmployee->getFirstname()." ".$oEmployee->getName();
			$line++;
			$oPHPExcel->getActiveSheet()->getStyle("A".$line)->applyFromArray($aStyleName);
			$oPHPExcel->getActiveSheet()->setCellValue("A".$line, $sFullname);
			$j=2;
			for($k=1;$k<32;$k=$k+1){
				if(isset($aWeekDay[$k]) and $aWeekDay[$k]==0){
					$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->applyFromArray($aStyleWeek);
					$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, "");
				}else{
					$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->applyFromArray($aStyleNumber);
					if(isset($aHour[$oEmployee->getId()]) and isset($aHour[$oEmployee->getId()][$k])){
						$total = $total+intval($aHour[$oEmployee->getId()][$k]);
						$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, $aHour[$oEmployee->getId()][$k]);
					}else{
						$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, "");
					}					
				}
				$j=$j+1;
			}
			$totalmonth=$totalmonth+$total;
			$oPHPExcel->getActiveSheet()->mergeCells("AG$line:AK$line");
			$oPHPExcel->getActiveSheet()->getStyle("AG$line")->applyFromArray($aStyle6);				
			$oPHPExcel->getActiveSheet()->setCellValue("AG$line", $total);	
			$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);			
		}		
		$oPHPExcel->getActiveSheet()->getStyle("A$line:AK$line")->applyFromArray($aStyle4);
		
		$line=$line+2;
		$oPHPExcel->getActiveSheet()->mergeCells("AC$line:AG$line");
		$oPHPExcel->getActiveSheet()->getStyle("AC$line:AG$line")->applyFromArray($aStyle7);
		$oPHPExcel->getActiveSheet()->setCellValue("AC$line", "TOTAL DU MOIS");
		$oPHPExcel->getActiveSheet()->getStyle("AC$line")->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_WHITE);
		$oPHPExcel->getActiveSheet()->mergeCells("AH$line:AI$line");
		$oPHPExcel->getActiveSheet()->getStyle("AH$line:AI$line")->applyFromArray($aStyle7);
		$oPHPExcel->getActiveSheet()->setCellValue("AH$line", $totalmonth);
		$oPHPExcel->getActiveSheet()->getStyle("AH$line")->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_WHITE);


		//print first line of student label
		$line=$line+2;
		$oPHPExcel->getActiveSheet()->getStyle("A$line:AK$line")->applyFromArray($aStyle2);
		$oPHPExcel->getActiveSheet()->setCellValue("A$line", 'NOM DES');			
		//Writing the numbers 1 to 18 for the month (student's presence AM and PM)
		$j=2;
		$k=3;
		for($i=1;$i<19;$i=$i+1){
			$oPHPExcel->getActiveSheet()->mergeCells($aAlpha[$j].$line.":".$aAlpha[$k].$line);
			$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, $i);
			$j=$j+2;
			$k=$k+2;
		}
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getTop()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);		
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);	

		//print second line of student label
		$line=$line+1;
		$oPHPExcel->getActiveSheet()->getStyle("A$line:AK$line")->applyFromArray($aStyle22);
		$oPHPExcel->getActiveSheet()->setCellValue("A$line", 'APPRENANTS');			
		//Writing the numbers 1 to 18 for the month (student's presence AM and PM)
		$j=2;
		$k=0;
		for($i=1;$i<37;$i=$i+1){
			$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			if($k==0) $oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, "AM");
			else $oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, "PM");
			$j=$j+1;
			$k=($k==0)?1:0;
		}
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getTop()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);		
		$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		

		
		//print the student line
		$students = $contract->getStudents();
		foreach($students as $student){
			$line=$line+1;
			$oPHPExcel->getActiveSheet()->getStyle("A".$line)->applyFromArray($aStyleName);
			$oPHPExcel->getActiveSheet()->setCellValue("A$line", $student->getFirstname()." ".$student->getName());		
			//Writing the hours consumed by the student
			if(isset($aTsStudent[$student->getId()])){
				$aHstudent = $aTsStudent[$student->getId()];
				$j=1;
				$k=2;
				for($i=1;$i<19;$i=$i+1){
					if(isset($aHstudent[$i]['am'])){
						$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->applyFromArray($aStyleNumber);
						$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$j].$line, $aHstudent[$i]['am']);
					}else{
						$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$j].$line)->applyFromArray($aStyleWeek);
					}  
					if(isset($aHstudent[$i]['pm'])){
						$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$k].$line)->applyFromArray($aStyleNumber);
						$oPHPExcel->getActiveSheet()->setCellValue($aAlpha[$k].$line, $aHstudent[$i]['pm']);
					}else{
						$oPHPExcel->getActiveSheet()->getStyle($aAlpha[$k].$line)->applyFromArray($aStyleWeek);
					} 
					$j=$j+2;
					$k=$k+2;
				}				
			}
			$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getTop()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
			$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);		
			$oPHPExcel->getActiveSheet()->getStyle("AK$line")->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);						
		}		
		$oPHPExcel->getActiveSheet()->getStyle("A$line:AK$line")->applyFromArray($aStyle4);
        // create the writer
        $writer = $this->createWriter($oPHPExcel, 'Excel5');
		
        // create the response
        $response = $this->createStreamedResponse($writer);
		
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename='.$this->getFileName().'.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');

        return $response;  		
	}
	private function getEmployeeFullName($aEmployee){
		$aResult = array();
		$i=0;
		foreach($aEmployee as $oEmployee){
			$i++;
			$sFullname = $i."- ".$oEmployee->getFirstname()." ".$oEmployee->getName();
			$aResult[] = $sFullname;
		}
		return	$aResult;	
	} 
	private function getFileName(){
		$day=date("dmY_His");
		return $this->sModule."_".$day;
	}
	private function formatCellWidth($oPHPExcel,$width){
		$aAlpha = $this->getAlphabet();
		for($i=2;$i<38;$i=$i+1){
			$oPHPExcel->getActiveSheet()->getColumnDimension($aAlpha[$i])->setWidth($width);
		}
		return $oPHPExcel;
	}
	private function getClient($contract){
		$na = "N/A";
		if($contract->getClient() and $contract->getClient()->getReference()) return $contract->getClient()->getReference();
		return $na;
	}
	private function getGroup($contract){
		$na = "N/A";
		if($contract->getGroup() and $contract->getGroup()->getName()) return $contract->getGroup()->getName();
		return $na;
	}
	private function getLocal($contract){
		$na = "N/A";
		$aLocal = $contract->getLocal();
		if(count($aLocal)==0) return $na;
		foreach($aLocal as $oLocal){
			if($oLocal->getStatus()==1) return $oLocal->getReference();
		}
		return $na;
	}
	public function getStyle($option=null){
		if($option==null){
			$aStyle = array(
				'font' => array(
					'bold' => true,
				),
				'borders' => array(
					'bottom'	=> array('style' => \PHPExcel_Style_Border::BORDER_THIN),
					'right'		=> array('style' => \PHPExcel_Style_Border::BORDER_THIN)
				),
				'fill' 	=> array(
					'type'		=> \PHPExcel_Style_Fill::FILL_SOLID,
					'color'		=> array('argb' => 'FAFAF9F9')
				)
			);	
		}else{
			$aStyle = array(
				'borders' => array(
					'bottom'	=> array('style' => \PHPExcel_Style_Border::BORDER_THIN),
					'right'		=> array('style' => \PHPExcel_Style_Border::BORDER_THIN)
				)
			);					
		}
		return $aStyle;
	}
}
