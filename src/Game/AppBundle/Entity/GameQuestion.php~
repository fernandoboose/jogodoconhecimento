<?php
// src/Game/AppBundle/Entity/GameQuestion.php
namespace Game\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="game_questions")
 */
class GameQuestion {

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
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usedFlg;

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
     * Set usedFlg
     *
     * @param boolean $usedFlg
     *
     * @return GameQuestion
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
     * Set game
     *
     * @param \Game\AppBundle\Entity\Game $game
     *
     * @return GameQuestion
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
     * Set question
     *
     * @param \Game\AppBundle\Entity\Question $question
     *
     * @return GameQuestion
     */
    public function setQuestion(\Game\AppBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Game\AppBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
