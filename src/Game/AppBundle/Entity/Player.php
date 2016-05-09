<?php
// src/Game/AppBundle/Entity/Player.php
namespace Game\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player {
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;
    
	/**
     * @ORM\Column(type="string", length=120)
     */
    private $nickname;

    /**
     * @ORM\OneToMany(targetEntity="Game", mappedBy="players")
     */
    private $games;

    /**
     * @ORM\OneToMany(targetEntity="Game", mappedBy="winner")
     * @ORM\JoinColumn(name="gamesWon", referencedColumnName="id")
     */
    private $gamesWon;
    

    public function __construct() {
        $this->gamesWon = new ArrayCollection();
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
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Player
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Add gamesWon
     *
     * @param \AppBundle\Entity\Game $gamesWon
     *
     * @return Player
     */
    public function addGamesWon(\Game\AppBundle\Entity\Game $gamesWon)
    {
        $this->gamesWon[] = $gamesWon;

        return $this;
    }

    /**
     * Remove gamesWon
     *
     * @param \AppBundle\Entity\Game $gamesWon
     */
    public function removeGamesWon(\Game\AppBundle\Entity\Game $gamesWon)
    {
        $this->gamesWon->removeElement($gamesWon);
    }

    /**
     * Get gamesWon
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGamesWon()
    {
        return $this->gamesWon;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return Player
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set game
     *
     * @param \Game\AppBundle\Entity\Game $game
     *
     * @return Player
     */
    public function setGame(\Game\AppBundle\Entity\Game $game = null)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Game\AppBundle\Entity\Game
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Add game
     *
     * @param \Game\AppBundle\Entity\Game $game
     *
     * @return Player
     */
    public function addGame(\Game\AppBundle\Entity\Game $game)
    {
        $this->games[] = $game;

        return $this;
    }

    /**
     * Remove game
     *
     * @param \Game\AppBundle\Entity\Game $game
     */
    public function removeGame(\Game\AppBundle\Entity\Game $game)
    {
        $this->games->removeElement($game);
    }

    /**
     * Get games
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Set turnFlg
     *
     * @param boolean $turnFlg
     *
     * @return Player
     */
    public function setTurnFlg($turnFlg)
    {
        $this->turnFlg = $turnFlg;

        return $this;
    }

    public function yourTurn() {
        $this->turnFlg = 1;
    }

    /**
     * Get turnFlg
     *
     * @return boolean
     */
    public function getTurnFlg()
    {
        return $this->turnFlg;
    }

    public function __toString() {
        return $this->getNickname();
    }
}
