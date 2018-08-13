<?php
namespace Bo\AdminBundle\Entity;

class Logmanager
{

	protected $file;
	
	protected $filepath;
	
	protected $path;

	protected $datetime;
	
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->filepath=sprintf("%s%s%s",$this->getFileDir()."\\",date("d-m-Y"),".log");
		$this->setDatetime(date("d-m-Y H:i:s"));
		$oFile = fopen($this->filepath,"a+");
		$this->setFile($oFile);
    }
	
	public function getFileDir()
	{
		return realpath(dirname(__FILE__)."/../../../../log");
	}
	
	public function setLog($log){
		$append = sprintf("%s%s%s%s","[",$this->getDatetime(),"] ",$log);
		if(fwrite($this->getFile(),$append)){
			fputs($this->getFile(),"\n");
		}
		else return false;
		fclose($this->getFile());
		return true;		
	}
	
    /**
     * Set datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;    
        return $this;
    }

    /**
     * Get datetime
     * @return string 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
	
    /**
     * Set datetime
     */
    public function setFile($file)
    {
        $this->file = $file;    
        return $this;
    }

    /**
     * Get file
     * @return object
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * Set filepath
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;    
        return $this;
    }

    /**
     * Get filepath
     * @return object
     */
    public function getFilepath()
    {
        return $this->filepath;
    }	
}