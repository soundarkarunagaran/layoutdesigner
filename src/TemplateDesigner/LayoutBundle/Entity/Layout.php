<?php

namespace TemplateDesigner\LayoutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Layout
 */
class Layout
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var array
     */
    protected $cssClasses;

    /**
     * @var string
     */
    protected $cssId;

    /**
     * @var string
     */
    protected $render;

    /**
     * @var string
     */
    protected $include;

    /**
     * @var boolean
     */
    protected $custom;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $subs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $children;

    /**
     * @var \TemplateDesigner\LayoutBundle\Entity\Layout
     */
    protected $parent;

    /**
     * @var \TemplateDesigner\LayoutBundle\Entity\Layout
     */
    protected $root;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $engine;

        /**
     * @var integer
     */
    protected $position;


    public function __construct(){
        $this->tag = 'div';
        $this->engine = 'boostrap';
        $this->custom = false;
        $this->cssClasses = array();
        $this->subs = new ArrayCollection(); 
        $this->children = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cssClasses
     *
     * @param array $cssClasses
     * @return Layout
     */
    public function setCssClasses($cssClasses)
    {
        foreach ($cssClasses as $class) {
            $this->cssClasses[] = $class;
        }
        
        return $this;
    }

    /**
     * Get cssClasses
     *
     * @return array 
     */
    public function getCssClasses()
    {
        return $this->cssClasses;
    }

    /**
     * Get cssClasses
     *
     * @return string
     */
    public function getCssClassesAsString()
    {
        $classes = (is_array($this->cssClasses[0]))?implode(' ',$this->cssClasses[0]):$this->cssClasses[0];
        return $classes;
    }

    /**
     * Set cssId
     *
     * @param string $cssId
     * @return Layout
     */
    public function setCssId($cssId)
    {
        $this->cssId = $cssId;

        return $this;
    }

    /**
     * Get cssId
     *
     * @return string 
     */
    public function getCssId()
    {
        return $this->cssId;
    }

    /**
     * Set render
     *
     * @param string $render
     * @return Layout
     */
    public function setRender($render)
    {
        $this->render = $render;

        return $this;
    }

    /**
     * Get render
     *
     * @return string 
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Set include
     *
     * @param string $include
     * @return Layout
     */
    public function setInclude($include)
    {
        $this->include = $include;

        return $this;
    }

    /**
     * Get include
     *
     * @return string 
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Set custom
     *
     * @param boolean $custom
     * @return Layout
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * Get custom
     *
     * @return boolean 
     */
    public function getCustom()
    {
        return $this->custom;
    }


    /**
     * Set tag
     *
     * @param string $tag
     * @return Layout
     */
    public function setTag($tag)
    {
        $this->tag = strtolower($tag);

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }


    /**
     * Add subs
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\Layout $subs
     * @return Layout
     */
    public function addSub(\TemplateDesigner\LayoutBundle\Entity\Layout $subs)
    {
        $this->subs[] = $subs;

        return $this;
    }

    /**
     * Remove subs
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\Layout $subs
     */
    public function removeSub(\TemplateDesigner\LayoutBundle\Entity\Layout $subs)
    {
        $this->subs->removeElement($subs);
    }

    /**
     * Get subs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubs()
    {
        return $this->subs;
    }

    /**
     * Add children
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\Layout $children
     * @return Layout
     */
    public function addChild(\TemplateDesigner\LayoutBundle\Entity\Layout $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\Layout $children
     */
    public function removeChild(\TemplateDesigner\LayoutBundle\Entity\Layout $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\Layout $parent
     * @return Layout
     */
    public function setParent(\TemplateDesigner\LayoutBundle\Entity\Layout $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \TemplateDesigner\LayoutBundle\Entity\Layout 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set root
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\Layout $root
     * @return Layout
     */
    public function setRoot(\TemplateDesigner\LayoutBundle\Entity\Layout $root = null)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return \TemplateDesigner\LayoutBundle\Entity\Layout 
     */
    public function getRoot()
    {
        return $this->root;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Layout
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * Set engine
     *
     * @param string $engine
     * @return Layout
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get engine
     *
     * @return string 
     */
    public function getEngine()
    {
        return $this->engine;
    }


    /**
     * Set position
     *
     * @param integer $position
     * @return Layout
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

}
