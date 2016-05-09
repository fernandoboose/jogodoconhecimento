<?php
// src/Game/AppBundle/Entity/Question.php
namespace Game\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question {
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $desc;

    /**
     * @ORM\OneToMany(targetEntity="QuestionOption", mappedBy="players")
     */
    private $options;

    /**
     * @ORM\OneToMany(targetEntity="Game", mappedBy="questions")
     */
    private $games;

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
     * Set desc
     *
     * @param string $desc
     *
     * @return Question
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->options = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set usedFlg
     *
     * @param boolean $usedFlg
     *
     * @return Question
     */
    public function setUsedFlg($usedFlg)
    {
        $this->usedFlg = $usedFlg;

        return $this;
    }

    /**
     * Get usedFlg
     *
     * @return boolean
     */
    public function getUsedFlg()
    {
        return $this->usedFlg;
    }

    /**
     * Add option
     *
     * @param \Game\AppBundle\Entity\QuestionOption $option
     *
     * @return Question
     */
    public function addOption(\Game\AppBundle\Entity\QuestionOption $option)
    {
        $this->options[] = $option;

        return $this;
    }

    /**
     * Remove option
     *
     * @param \Game\AppBundle\Entity\QuestionOption $option
     */
    public function removeOption(\Game\AppBundle\Entity\QuestionOption $option)
    {
        $this->options->removeElement($option);
    }

    /**
     * Get options
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Add game
     *
     * @param \Game\AppBundle\Entity\Game $game
     *
     * @return Question
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

    public function __toString() {
        return $this->getDesc;
    }
}
