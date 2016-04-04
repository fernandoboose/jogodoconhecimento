<?php
// src/Game/AppBundle/Entity/Game.php
namespace Game\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="gamesWon")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $winner;

    /** 
    *@ORM\Column(type="integer") 
    */
    private $winnerScore;

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
     * @param \AppBundle\Entity\Player $winner
     *
     * @return Game
     */
    public function setWinner(\AppBundle\Entity\Player $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \AppBundle\Entity\Player
     */
    public function getWinner()
    {
        return $this->winner;
    }
}
