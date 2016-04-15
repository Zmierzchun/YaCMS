<?php

namespace YaCMSBundle\Entity;

/**
 * Menu
 */
class Menu
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \YaCMSBundle\Entity\Menu
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
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Menu
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
     * Add item
     *
     * @param \YaCMSBundle\Entity\MenuItem $item
     *
     * @return Menu
     */
    public function addItem(\YaCMSBundle\Entity\MenuItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \YaCMSBundle\Entity\MenuItem $item
     */
    public function removeItem(\YaCMSBundle\Entity\MenuItem $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Add translation
     *
     * @param \YaCMSBundle\Entity\Menu $translation
     *
     * @return Menu
     */
    public function addTranslation(\YaCMSBundle\Entity\Menu $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \YaCMSBundle\Entity\Menu $translation
     */
    public function removeTranslation(\YaCMSBundle\Entity\Menu $translation)
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
     * Set original
     *
     * @param \YaCMSBundle\Entity\Menu $original
     *
     * @return Menu
     */
    public function setOriginal(\YaCMSBundle\Entity\Menu $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \YaCMSBundle\Entity\Menu
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
     * @return Menu
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
