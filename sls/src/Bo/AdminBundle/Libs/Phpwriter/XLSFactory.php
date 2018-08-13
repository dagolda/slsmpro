<?php
namespace Bo\AdminBundle\Libs\Phpwriter;
use Bo\AdminBundle\Libs\Phpwriter\Spreadsheet\Excel\Writer;

class XLSFactory
{
	public function generateArray($aHeader,$aData){
		$workbook = new Writer();
		# Some common formats
		$fSilver  = $workbook->addFormat(array('align' => 'center','fgColor' =>'silver','bold' => 1,'pattern'  => 1,'border'=>1));
		$fData = $workbook->addFormat(array('align' => 'center', 'border' => 1));		
		$i=1;
		$workbook->setTempDir('./docs');
		$sDayDate=date("d-m-Y");
		$sFileName="extraction_".$sDayDate.".xls";
		$workbook->send($sFileName);
		$worksheet = $workbook->addWorksheet();

		$worksheet->setColumn(0, 70, 26);
		//Impression de l'entête
		$j=0;
		foreach($aHeader as $value){
			$worksheet->write($i, $j, utf8_decode($value),$fSilver);
			$j=$j+1;
		}
		$j=0;
		$i=$i+1;
		foreach($aData as $aSbTab){
			foreach($aSbTab as $j=>$value){
				$worksheet->write($i, $j, utf8_decode($value),$fData);
				$j=$j+1;
			}
			$i=$i+1;
		}		
		$workbook->close();
		return $workbook->sendFile();
	}
}
?>