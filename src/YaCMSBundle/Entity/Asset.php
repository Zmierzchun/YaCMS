<?php

namespace YaCMSBundle\Entity;

/**
 * Asset
 */
class Asset
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var \DateTime
     */
    private $published;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \YaCMSBundle\Entity\Asset
     */
    private $parent;

    /**
     * @var \YaCMSBundle\Entity\ContentType
     */
    private $contentType;

    /**
     * @var \YaCMSBundle\Entity\Asset
     */
    private $original;

    /**
     * @var \YaCMSBundle\Entity\Locale
     */
    private $locale;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return Asset
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Asset
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Asset
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Asset
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Asset
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Asset
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Asset
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set published
     *
     * @param \DateTime $published
     *
     * @return Asset
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return \DateTime
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Add child
     *
     * @param \YaCMSBundle\Entity\Asset $child
     *
     * @return Asset
     */
    public function addChild(\YaCMSBundle\Entity\Asset $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \YaCMSBundle\Entity\Asset $child
     */
    public function removeChild(\YaCMSBundle\Entity\Asset $child)
    {
        $this->children->removeElement($child);
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
     * Add translation
     *
     * @param \YaCMSBundle\Entity\Asset $translation
     *
     * @return Asset
     */
    public function addTranslation(\YaCMSBundle\Entity\Asset $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \YaCMSBundle\Entity\Asset $translation
     */
    public function removeTranslation(\YaCMSBundle\Entity\Asset $translation)
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
     * Set parent
     *
     * @param \YaCMSBundle\Entity\Asset $parent
     *
     * @return Asset
     */
    public function setParent(\YaCMSBundle\Entity\Asset $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \YaCMSBundle\Entity\Asset
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set contentType
     *
     * @param \YaCMSBundle\Entity\ContentType $contentType
     *
     * @return Asset
     */
    public function setContentType(\YaCMSBundle\Entity\ContentType $contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return \YaCMSBundle\Entity\ContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set original
     *
     * @param \YaCMSBundle\Entity\Asset $original
     *
     * @return Asset
     */
    public function setOriginal(\YaCMSBundle\Entity\Asset $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \YaCMSBundle\Entity\Asset
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
     * @return Asset
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

    /**
     * Add tag
     *
     * @param \YaCMSBundle\Entity\Tag $tag
     *
     * @return Asset
     */
    public function addTag(\YaCMSBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \YaCMSBundle\Entity\Tag $tag
     */
    public function removeTag(\YaCMSBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}
