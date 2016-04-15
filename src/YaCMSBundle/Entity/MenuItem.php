<?php

namespace YaCMSBundle\Entity;

/**
 * MenuItem
 */
class MenuItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var integer
     */
    private $orderNo;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \YaCMSBundle\Entity\Menu
     */
    private $parentMenu;

    /**
     * @var \YaCMSBundle\Entity\MenuItem
     */
    private $original;

    /**
     * @var \YaCMSBundle\Entity\Locale
     */
    private $locale;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * ToString - returns a string on calling the entity class
     */
    public function __toString()
    {
        return $this->getName();
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
     * Set name
     *
     * @param string $name
     *
     * @return MenuItem
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
     * Set link
     *
     * @param string $link
     *
     * @return MenuItem
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return MenuItem
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set orderNo
     *
     * @param integer $orderNo
     *
     * @return MenuItem
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return integer
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return MenuItem
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Add translation
     *
     * @param \YaCMSBundle\Entity\MenuItem $translation
     *
     * @return MenuItem
     */
    public function addTranslation(\YaCMSBundle\Entity\MenuItem $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \YaCMSBundle\Entity\MenuItem $translation
     */
    public function removeTranslation(\YaCMSBundle\Entity\MenuItem $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Set parentMenu
     *
     * @param \YaCMSBundle\Entity\Menu $parentMenu
     *
     * @return MenuItem
     */
    public function setParentMenu(\YaCMSBundle\Entity\Menu $parentMenu)
    {
        $this->parentMenu = $parentMenu;

        return $this;
    }

    /**
     * Get parentMenu
     *
     * @return \YaCMSBundle\Entity\Menu
     */
    public function getParentMenu()
    {
        return $this->parentMenu;
    }

    /**
     * Set original
     *
     * @param \YaCMSBundle\Entity\MenuItem $original
     *
     * @return MenuItem
     */
    public function setOriginal(\YaCMSBundle\Entity\MenuItem $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \YaCMSBundle\Entity\MenuItem
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set locale
     *
     * @param \YaCMSBundle\Entity\Locale $locale
     *
     * @return MenuItem
     */
    public function setLocale(\YaCMSBundle\Entity\Locale $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return \YaCMSBundle\Entity\Locale
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
