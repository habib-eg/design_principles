<?php


namespace App\OOP\Relationship\Aggregation;


class Project
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var \DateTime
     */
    private \DateTime $deadLine;
    /**
     * @var Developer[]
     */
    private array $developers;

    /**
     * Project constructor.
     * @param string $name
     * @param \DateTime $deadLine
     * @param Developer[] $developers
     */
    public function __construct(string $name, \DateTime $deadLine, array $developers)
    {
        $this->name = $name;
        $this->deadLine = $deadLine;
        $this->developers = $developers;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeadLine(): \DateTime
    {
        return $this->deadLine;
    }

    /**
     * @param \DateTime $deadLine
     * @return Project
     */
    public function setDeadLine(\DateTime $deadLine): Project
    {
        $this->deadLine = $deadLine;
        return $this;
    }

    /**
     * @return Developer[]
     */
    public function getDevelopers(): array
    {
        return $this->developers;
    }

    /**
     * @param Developer[] $developers
     * @return Project
     */
    public function setDevelopers(array $developers): Project
    {
        $this->developers = $developers;
        return $this;
    }

    /**
     * @param \DateInterval $interval
     * @return Project
     */
    public function setDeadLineTo(\DateInterval $interval): Project
    {
        $this->deadLine->add($interval);
        return $this;
    }

    /**
     * @return string
     */
    public function showProjectInfo():string
    {
        $developers = implode(', ',
            array_map(function (Developer $developer) {
                return $developer->getName();
            },$this->getDevelopers())
        ) ;

        return "Project Name : {$this->getName()}\n
                deadLine : {$this->getDeadLine()->format('Y-m-d')}\n
                Developers : {$developers}
        ";
    }
}