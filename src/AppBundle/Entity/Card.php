<?php

namespace AppBundle\Entity;

class Card {
    /**
     * @var integer
     */
    private $id;
    /**
     * @var integer
     */
    private $position;
    /**
     * @var string
     */
    private $code;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $traits;
    /**
     * @var string
     */
    private $text;
    /**
     * @var string
     */
    private $flavor;
    /**
     * @var boolean
     */
    private $isUnique;
    /**
     * @var integer
     */
    private $cost;
    /**
     * @var integer
     */
    private $victory;
    /**
     * @var integer
     */
    private $quantity;
    /**
     * @var integer
     */
    private $willpower;
    /**
     * @var integer
     */    
    private $threat;
    /**
     * @var integer
     */
    private $attack;
    /**
     * @var integer
     */
    private $health;
    /**
     * @var integer
     */
    private $deckLimit;
    /**
     * @var integer
     */
    private $rarity;
    /**
     * @var integer
     */
    private $level;  
    /**
     * @var string
     */
    private $illustrator;
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var \DateTime
     */
    private $dateCreation;
    /**
     * @var \DateTime
     */
    private $dateUpdate;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviews;
    /**
     * @var \AppBundle\Entity\Pack
     */
    private $pack;
    /**
     * @var \AppBundle\Entity\Type
     */
    private $type;
    /**
     * @var \AppBundle\Entity\Sphere
     */
    private $sphere;

    /**
     * Constructor
     */
    public function __construct() {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Card
     */
    public function setPosition($position) {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Card
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Card
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set traits
     *
     * @param string $traits
     *
     * @return Card
     */
    public function setTraits($traits) {
        $this->traits = $traits;

        return $this;
    }

    /**
     * Get traits
     *
     * @return string
     */
    public function getTraits() {
        return $this->traits;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Card
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Set flavor
     *
     * @param string $flavor
     *
     * @return Card
     */
    public function setFlavor($flavor) {
        $this->flavor = $flavor;

        return $this;
    }

    /**
     * Get flavor
     *
     * @return string
     */
    public function getFlavor() {
        return $this->flavor;
    }

    /**
     * Set isUnique
     *
     * @param boolean $isUnique
     *
     * @return Card
     */
    public function setIsUnique($isUnique) {
        $this->isUnique = $isUnique;

        return $this;
    }

    /**
     * Get isUnique
     *
     * @return boolean
     */
    public function getIsUnique() {
        return $this->isUnique;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Card
     */
    public function setCost($cost) {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * Set victory
     *
     * @param integer $victory
     *
     * @return Card
     */
    public function setVictory($victory) {
        $this->victory = $victory;

        return $this;
    }

    /**
     * Get victory
     *
     * @return integer
     */
    public function getVictory() {
        return $this->victory;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Card
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getWuantity() {
        return $this->quantity;
    }

    /**
     * Set willpower
     *
     * @param integer $willpower
     *
     * @return Card
     */
    public function setWillpower($willpower) {
        $this->willpower = $willpower;

        return $this;
    }

    /**
     * Get willpower
     *
     * @return integer
     */
    public function getWillpower() {
        return $this->willpower;
    }

    /**
     * Set threat
     *
     * @param integer $threat
     *
     * @return Card
     */
    public function setThreat($threat) {
        $this->threat = $threat;

        return $this;
    }

    /**
     * Get threat
     *
     * @return integer
     */
    public function getThreat() {
        return $this->threat;
    }

    /**
     * Set attack
     *
     * @param integer $attack
     *
     * @return Card
     */
    public function setAttack($attack) {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get attack
     *
     * @return integer
     */
    public function getAttack() {
        return $this->attack;
    }

    /**
     * Set health
     *
     * @param integer $health
     *
     * @return Card
     */
    public function setHealth($health) {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer
     */
    public function getHealth() {
        return $this->health;
    }

    /**
     * Set deckLimit
     *
     * @param integer $deckLimit
     *
     * @return Card
     */
    public function setDeckLimit($deckLimit) {
        $this->deckLimit = $deckLimit;

        return $this;
    }

    /**
     * Get deckLimit
     *
     * @return integer
     */
    public function getDeckLimit() {
        return $this->deckLimit;
    }

    /**
     * Set rarity
     *
     * @param integer $rarity
     *
     * @return Card
     */
    public function setRarity($rarity) {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * Get rarity
     *
     * @return integer
     */
    public function getRarity() {
        return $this->rarity;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Card
     */
    public function setLevel($level) {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * Set illustrator
     *
     * @param string $illustrator
     *
     * @return Card
     */
    public function setIllustrator($illustrator) {
        $this->illustrator = $illustrator;

        return $this;
    }

    /**
     * Get illustrator
     *
     * @return string
     */
    public function getIllustrator() {
        return $this->illustrator;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     *
     * @return Card
     */
    public function setUuid($uuid) {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid() {
        return $this->uuid;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Card
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return Card
     */
    public function setDateUpdate($dateUpdate) {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate() {
        return $this->dateUpdate;
    }

    /**
     * Add review
     *
     * @param \AppBundle\Entity\Review $review
     *
     * @return Card
     */
    public function addReview(\AppBundle\Entity\Review $review) {
        $this->reviews[] = $review;

        return $this;
    }

    /**
     * Remove review
     *
     * @param \AppBundle\Entity\Review $review
     */
    public function removeReview(\AppBundle\Entity\Review $review) {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews() {
        return $this->reviews;
    }

    /**
     * Set pack
     *
     * @param \AppBundle\Entity\Pack $pack
     *
     * @return Card
     */
    public function setPack(\AppBundle\Entity\Pack $pack = null) {
        $this->pack = $pack;

        return $this;
    }

    /**
     * Get pack
     *
     * @return \AppBundle\Entity\Pack
     */
    public function getPack() {
        return $this->pack;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Type $type
     *
     * @return Card
     */
    public function setType(\AppBundle\Entity\Type $type = null) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set sphere
     *
     * @param \AppBundle\Entity\Sphere $sphere
     *
     * @return Card
     */
    public function setSphere(\AppBundle\Entity\Sphere $sphere = null) {
        $this->sphere = $sphere;

        return $this;
    }

    /**
     * Get sphere
     *
     * @return \AppBundle\Entity\Sphere
     */
    public function getSphere() {
        return $this->sphere;
    }

    /**
     * @var integer
     */
    private $quest;

    /**
     * Set quest
     *
     * @param integer $quest
     *
     * @return Card
     */
    public function setQuest($quest) {
        $this->quest = $quest;

        return $this;
    }

    /**
     * Get quest
     *
     * @return integer
     */
    public function getQuest() {
        return $this->quest;
    }
    /**
     * @var boolean
     */
    private $hasErrata;

    /**
     * Set hasErrata
     *
     * @param boolean $hasErrata
     *
     * @return Card
     */
    public function setHasErrata($hasErrata) {
        $this->hasErrata = $hasErrata;

        return $this;
    }

    /**
     * Get hasErrata
     *
     * @return boolean
     */
    public function getHasErrata() {
        return $this->hasErrata;
    }
}
