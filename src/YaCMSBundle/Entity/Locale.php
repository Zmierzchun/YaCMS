<?php

namespace YaCMSBundle\Entity;

/**
 * Locale
 */
class Locale
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
    private $country;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $menus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $menuItems;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $assets;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interfaceLabels;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menuItems = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interfaceLabels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * ToString - returns class as a string - here locale in format ll_CC
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
     * @return Locale
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
     * Set country
     *
     * @param string $country
     *
     * @return Locale
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Locale
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Add menu
     *
     * @param \YaCMSBundle\Entity\Menu $menu
     *
     * @return Locale
     */
    public function addMenu(\YaCMSBundle\Entity\Menu $menu)
    {
        $this->menus[] = $menu;

        return $this;
    }

    /**
     * Remove menu
     *
     * @param \YaCMSBundle\Entity\Menu $menu
     */
    public function removeMenu(\YaCMSBundle\Entity\Menu $menu)
    {
        $this->menus->removeElement($menu);
    }

    /**
     * Get menus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Add menuItem
     *
     * @param \YaCMSBundle\Entity\MenuItem $menuItem
     *
     * @return Locale
     */
    public function addMenuItem(\YaCMSBundle\Entity\MenuItem $menuItem)
    {
        $this->menuItems[] = $menuItem;

        return $this;
    }

    /**
     * Remove menuItem
     *
     * @param \YaCMSBundle\Entity\MenuItem $menuItem
     */
    public function removeMenuItem(\YaCMSBundle\Entity\MenuItem $menuItem)
    {
        $this->menuItems->removeElement($menuItem);
    }

    /**
     * Get menuItems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenuItems()
    {
        return $this->menuItems;
    }

    /**
     * Add asset
     *
     * @param \YaCMSBundle\Entity\Asset $asset
     *
     * @return Locale
     */
    public function addAsset(\YaCMSBundle\Entity\Asset $asset)
    {
        $this->assets[] = $asset;

        return $this;
    }

    /**
     * Remove asset
     *
     * @param \YaCMSBundle\Entity\Asset $asset
     */
    public function removeAsset(\YaCMSBundle\Entity\Asset $asset)
    {
        $this->assets->removeElement($asset);
    }

    /**
     * Get assets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Add article
     *
     * @param \YaCMSBundle\Entity\Article $article
     *
     * @return Locale
     */
    public function addArticle(\YaCMSBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \YaCMSBundle\Entity\Article $article
     */
    public function removeArticle(\YaCMSBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add tag
     *
     * @param \YaCMSBundle\Entity\Tag $tag
     *
     * @return Locale
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
