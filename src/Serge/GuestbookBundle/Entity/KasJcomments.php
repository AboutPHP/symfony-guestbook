<?php

namespace Serge\GuestbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serge\GuestbookBundle\Entity\KasJcomments
 *
 * @ORM\Table(name="kas_jcomments")
 * @ORM\Entity
 */
class KasJcomments
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $parent
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent;

    /**
     * @var integer $objectId
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false)
     */
    private $objectId;

    /**
     * @var string $objectGroup
     *
     * @ORM\Column(name="object_group", type="string", length=255, nullable=false)
     */
    private $objectGroup;

    /**
     * @var string $objectParams
     *
     * @ORM\Column(name="object_params", type="text", nullable=false)
     */
    private $objectParams;

    /**
     * @var string $lang
     *
     * @ORM\Column(name="lang", type="string", length=255, nullable=false)
     */
    private $lang;

    /**
     * @var integer $userid
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $homepage
     *
     * @ORM\Column(name="homepage", type="string", length=255, nullable=false)
     */
    private $homepage;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer $isgood
     *
     * @ORM\Column(name="isgood", type="smallint", nullable=false)
     */
    private $isgood;

    /**
     * @var integer $ispoor
     *
     * @ORM\Column(name="ispoor", type="smallint", nullable=false)
     */
    private $ispoor;

    /**
     * @var boolean $published
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published;

    /**
     * @var boolean $subscribe
     *
     * @ORM\Column(name="subscribe", type="boolean", nullable=false)
     */
    private $subscribe;

    /**
     * @var string $source
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=false)
     */
    private $source;

    /**
     * @var integer $checkedOut
     *
     * @ORM\Column(name="checked_out", type="integer", nullable=false)
     */
    private $checkedOut;

    /**
     * @var \DateTime $checkedOutTime
     *
     * @ORM\Column(name="checked_out_time", type="datetime", nullable=false)
     */
    private $checkedOutTime;

    /**
     * @var string $editor
     *
     * @ORM\Column(name="editor", type="string", length=50, nullable=false)
     */
    private $editor;



    /**
     * Set parent
     *
     * @param integer $parent
     * @return KasJcomments
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set objectId
     *
     * @param integer $objectId
     * @return KasJcomments
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    
        return $this;
    }

    /**
     * Get objectId
     *
     * @return integer 
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set objectGroup
     *
     * @param string $objectGroup
     * @return KasJcomments
     */
    public function setObjectGroup($objectGroup)
    {
        $this->objectGroup = $objectGroup;
    
        return $this;
    }

    /**
     * Get objectGroup
     *
     * @return string 
     */
    public function getObjectGroup()
    {
        return $this->objectGroup;
    }

    /**
     * Set objectParams
     *
     * @param string $objectParams
     * @return KasJcomments
     */
    public function setObjectParams($objectParams)
    {
        $this->objectParams = $objectParams;
    
        return $this;
    }

    /**
     * Get objectParams
     *
     * @return string 
     */
    public function getObjectParams()
    {
        return $this->objectParams;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return KasJcomments
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
     * Set userid
     *
     * @param integer $userid
     * @return KasJcomments
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return KasJcomments
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
     * Set username
     *
     * @param string $username
     * @return KasJcomments
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return KasJcomments
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set homepage
     *
     * @param string $homepage
     * @return KasJcomments
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    
        return $this;
    }

    /**
     * Get homepage
     *
     * @return string 
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return KasJcomments
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
     * Set comment
     *
     * @param string $comment
     * @return KasJcomments
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return KasJcomments
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return KasJcomments
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set isgood
     *
     * @param integer $isgood
     * @return KasJcomments
     */
    public function setIsgood($isgood)
    {
        $this->isgood = $isgood;
    
        return $this;
    }

    /**
     * Get isgood
     *
     * @return integer 
     */
    public function getIsgood()
    {
        return $this->isgood;
    }

    /**
     * Set ispoor
     *
     * @param integer $ispoor
     * @return KasJcomments
     */
    public function setIspoor($ispoor)
    {
        $this->ispoor = $ispoor;
    
        return $this;
    }

    /**
     * Get ispoor
     *
     * @return integer 
     */
    public function getIspoor()
    {
        return $this->ispoor;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return KasJcomments
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set subscribe
     *
     * @param boolean $subscribe
     * @return KasJcomments
     */
    public function setSubscribe($subscribe)
    {
        $this->subscribe = $subscribe;
    
        return $this;
    }

    /**
     * Get subscribe
     *
     * @return boolean 
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return KasJcomments
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return KasJcomments
     */
    public function setCheckedOut($checkedOut)
    {
        $this->checkedOut = $checkedOut;
    
        return $this;
    }

    /**
     * Get checkedOut
     *
     * @return integer 
     */
    public function getCheckedOut()
    {
        return $this->checkedOut;
    }

    /**
     * Set checkedOutTime
     *
     * @param \DateTime $checkedOutTime
     * @return KasJcomments
     */
    public function setCheckedOutTime($checkedOutTime)
    {
        $this->checkedOutTime = $checkedOutTime;
    
        return $this;
    }

    /**
     * Get checkedOutTime
     *
     * @return \DateTime 
     */
    public function getCheckedOutTime()
    {
        return $this->checkedOutTime;
    }

    /**
     * Set editor
     *
     * @param string $editor
     * @return KasJcomments
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    
        return $this;
    }

    /**
     * Get editor
     *
     * @return string 
     */
    public function getEditor()
    {
        return $this->editor;
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
}