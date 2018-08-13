<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Batch 
{

    /**
     * @ORM\Column(type="text",length=20000)
     */    
    private $text;


    /**
     * Set text
     *
     * @param string $text
     *
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
