<?php
// src/Game/AppBundle/Entity/GamePlayer.php
namespace Game\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="game_players")
 */
class GamePlayer {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
     * @ORM\ManyToOne(targetEntity="Game")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
	private $game;

	/**
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
	private $player;

    /**
     * @ORM\Column(type="integer")
     */
	private $points;

    /**
     * @ORM\Column(type="boolean")
     */
    private $turnFlg;

    public function __construct() {
        $this->turnFlg = 0;
    }


    /**
     * Set points
     *
     * @param integer $points
     *
     * @return GamePlayer
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
     * @return GamePlayer
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
     * Set player
     *
     * @param \Game\AppBundle\Entity\Player $player
     *
     * @return GamePlayer
     */
    public function setPlayer(\Game\AppBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \Game\AppBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
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
     * Set turnFlg
     *
     * @param boolean $turnFlg
     *
     * @return GamePlayer
     */
    public function setTurnFlg($turnFlg)
    {
        $this->turnFlg = $turnFlg;

        return $this;
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

    public function increaseOnePoint() {
        $this->setPoints($this->getPoints() + 1);
    }
}
