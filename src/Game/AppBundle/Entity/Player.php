<?php
// src/Game/AppBundle/Entity/Player.php
namespace Game\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\OneToMany(targetEntity="Game", mappedBy="player")
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
}
