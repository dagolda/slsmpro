<?php
namespace Bo\AdminBundle\Libs\PHPExcel;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Factory
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
	public function getData($oPHPExcel,$aHeader,$aData){
		$aA=$this->getAlphabet();
		$oPHPExcel->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);		 
	    $oPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
		// Set default font
		$oPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
		$oPHPExcel->getDefaultStyle()->getFont()->setSize(12);
		$i=1;
		$j=1;
		//Header
		foreach($aHeader as $value){
			$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i, $value);	
			$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
			$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($this->getStyle());
			$j++;
		}
		//Data
		foreach($aData as $aTab){
			$j=1;
			$i++;
			foreach($aTab as $value){
				$oPHPExcel->getActiveSheet()->setCellValue($aA[$j].$i, $value);	
				$oPHPExcel->getActiveSheet()->getColumnDimension($aA[$j])->setAutoSize(true);
				$oPHPExcel->getActiveSheet()->getStyle($aA[$j].$i)->applyFromArray($this->getStyle(1));
				$j++;
			}
		}	
       $oPHPExcel->getActiveSheet()->setTitle('Simple');
       // Set active sheet index to the first sheet, so Excel opens this as the first sheet
       $oPHPExcel->setActiveSheetIndex(0);	
	   
	   // Rename sheet
		$oPHPExcel->getActiveSheet()->setTitle($this->sModule);
		
		return $oPHPExcel;
	}
	private function getAlphabet(){
		return 	array('1'=>'A','2'=>'B','3'=>'C','4'=>'D','5'=>'E','6'=>'F','7'=>'G','8'=>'H','9'=>'I','10'=>'J','11'=>'K','12'=>'L','13'=>'M','14'=>'N','15'=>'O','16'=>'P','17'=>'Q','18'=>'R','19'=>'S','20'=>'T','21'=>'U','22'=>'V','23'=>'W','24'=>'X','25'=>'Y','26'=>'Z','27'=>'AA','28'=>'AB','29'=>'AC','30'=>'AD','31'=>'AE','32'=>'AF','33'=>'AG','34'=>'AH','35'=>'AI','36'=>'AJ','37'=>'AK','38'=>'AL','39'=>'AM','40'=>'AN','41'=>'AO','42'=>'AP','43'=>'AQ','44'=>'AR','45'=>'AS','46'=>'AT','47'=>'AU','48'=>'AV','49'=>'AW','50'=>'AX','51'=>'AY','52'=>'AZ');	
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
	public function newXLS($aHeader,$aData){
		
        // Appel de l'objet PHPExcel
        $oPHPExcel = $this->initXLS();
		
		//Définition de la proprieté du document
		$oPHPExcel = $this->getProperty($oPHPExcel,"JMN","JMN");
		
		$oPHPExcel = $this->getData($oPHPExcel,$aHeader,$aData);

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
	private function getFileName(){
		$day=date("dmY_His");
		return $this->sModule."_".$day;
	}
}
