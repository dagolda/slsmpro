<?php
namespace Bo\AdminBundle\Entity;
use Symfony\Component\Yaml\Yaml;

class Slsconfig
{
	private $path;				

    public function __construct()
    {
        $this->path = __DIR__.'/../../../../app/config/';
    }
    /**
     * Set path
     *
     * @param string $path
     * @return Document
     */
    public function setPath($path)
    {
        $this->path = $path;    
        return $this;
    }
    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }	

	public function getContentFile()
	{
		if (null === $this->path) {
			return;
		}
		$array = Yaml::parse($this->getFile());
		return $array;
	}
	
    public function getFile()
    {
        return $this->path."config_sls.yml";
    }
}
