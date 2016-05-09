<?php
// src/Game/AppBundle/Entity/Game.php
namespace Game\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game {
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="games", cascade={"all"})
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="games", cascade={"all"})
     */
    private $questions;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="gamesWon", cascade="persist")
     * @ORM\JoinColumn(name="winner", referencedColumnName="id")
     */
    private $winner;

    /** 
    *@ORM\Column(type="integer", nullable=TRUE) 
    */
    private $winnerScore;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set winnerScore
     *
     * @param integer $winnerScore
     *
     * @return Game
     */
    public function setWinnerScore($winnerScore)
    {
        $this->winnerScore = $winnerScore;

        return $this;
    }

    /**
     * Get winnerScore
     *
     * @return integer
     */
    public function getWinnerScore()
    {
        return $this->winnerScore;
    }

    /**
     * Set winner
     *
     * @param \Game\AppBundle\Entity\Player $winner
     *
     * @return Game
     */
    public function setWinner(\Game\AppBundle\Entity\Player $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \Game\AppBundle\Entity\Player
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Add player
     *
     * @param \Game\AppBundle\Entity\Player $player
     *
     * @return Game
     */
    public function addPlayer(\Game\AppBundle\Entity\Player $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param \Game\AppBundle\Entity\Player $player
     */
    public function removePlayer(\Game\AppBundle\Entity\Player $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Add question
     *
     * @param \Game\AppBundle\Entity\Question $question
     *
     * @return Game
     */
    public function addQuestion(\Game\AppBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Game\AppBundle\Entity\Question $question
     */
    public function removeQuestion(\Game\AppBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    public function __toString() {
        return (string) $this->getId();
    }
}
