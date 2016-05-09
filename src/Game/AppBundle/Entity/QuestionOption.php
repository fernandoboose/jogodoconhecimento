<?php
// src/Game/AppBundle/Entity/QuestionOption.php
namespace Game\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="question_option")
 */
class QuestionOption {
	
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
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="questions", cascade="persist")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;

    /**
     * @ORM\Column(type="boolean")
     */
    private $correctAnswer;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set desc
     *
     * @param string $desc
     *
     * @return QuestionOption
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
     * Add question
     *
     * @param \Game\AppBundle\Entity\Question $question
     *
     * @return QuestionOption
     */
    public function addQuestion(\Game\AppBundle\Entity\Question $question)
    {
        $this->question[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Game\AppBundle\Entity\Question $question
     */
    public function removeQuestion(\Game\AppBundle\Entity\Question $question)
    {
        $this->question->removeElement($question);
    }

    /**
     * Get question
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set correctAnswer
     *
     * @param $correctAnswer
     *
     * @return QuestionOption
     */
    public function setCorrectAnswer($correctAnswer)
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }

    /**
     * Is this the correct answer?
     *
     * @return \bool
     */
    public function isCorrectAnswer() {
        return $this->correctAnswer;
    }

    /**
     * Set question
     *
     * @param \Game\AppBundle\Entity\Question $question
     *
     * @return QuestionOption
     */
    public function setQuestion(\Game\AppBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get correctAnswer
     *
     * @return boolean
     */
    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }
}
