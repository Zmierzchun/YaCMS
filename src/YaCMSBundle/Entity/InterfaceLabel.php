<?php

namespace YaCMSBundle\Entity;

/**
 * InterfaceLabel
 */
class InterfaceLabel
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
    private $content;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \YaCMSBundle\Entity\InterfaceLabel
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
     * @return InterfaceLabel
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
     * Set content
     *
     * @param string $content
     *
     * @return InterfaceLabel
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Add translation
     *
     * @param \YaCMSBundle\Entity\InterfaceLabel $translation
     *
     * @return InterfaceLabel
     */
    public function addTranslation(\YaCMSBundle\Entity\InterfaceLabel $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \YaCMSBundle\Entity\InterfaceLabel $translation
     */
    public function removeTranslation(\YaCMSBundle\Entity\InterfaceLabel $translation)
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
     * @param \YaCMSBundle\Entity\InterfaceLabel $original
     *
     * @return InterfaceLabel
     */
    public function setOriginal(\YaCMSBundle\Entity\InterfaceLabel $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \YaCMSBundle\Entity\InterfaceLabel
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
     * @return InterfaceLabel
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
