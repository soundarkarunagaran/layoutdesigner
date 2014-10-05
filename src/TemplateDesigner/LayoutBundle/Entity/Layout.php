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
    private $id;

    /**
     * @var array
     */
    private $cssClasses;

    /**
     * @var string
     */
    private $cssId;

    /**
     * @var string
     */
    private $render;

    /**
     * @var string
     */
    private $include;

    /**
     * @var boolean
     */
    private $custom;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \TemplateDesigner\LayoutBundle\Entity\Layout
     */
    private $parent;

    /**
     * @var \TemplateDesigner\LayoutBundle\Entity\Layout
     */
    private $root;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $engine;

        /**
     * @var integer
     */
    private $position;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contents;


    public function __construct(){
        $this->tag = 'div';
        $this->engine = 'boostrap';
        $this->custom = false;
        $this->cssClasses = array();
        $this->subs = new ArrayCollection(); 
        $this->children = new ArrayCollection();
        $this->contents = new ArrayCollection();
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
        return implode(' ',$this->cssClasses);
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

    /**
     * Add contents
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\ContentSubjectInterface $contents
     * @return Layout
     */
    public function addContent(\TemplateDesigner\LayoutBundle\Entity\ContentSubjectInterface $contents)
    {
        $this->contents[] = $contents;

        return $this;
    }

    /**
     * Remove contents
     *
     * @param \TemplateDesigner\LayoutBundle\Entity\ContentSubjectInterface $contents
     */
    public function removeContent(\TemplateDesigner\LayoutBundle\Entity\ContentSubjectInterface $contents)
    {
        $this->contents->removeElement($contents);
    }

    /**
     * Get contents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContents()
    {
        return $this->contents;
    }
}
