<?php
namespace App\OOP\PHP\Relationship;

/**
 * Class Student
 * @package App\OOP\PHP\Relationship
 */
class Student
{
    /**
     * @var string 
     */
    private string $name;
    /**
     * @var string 
     */
    private string $homeWork;
    /**
     * @var int
     */
    private int $homeWorkScore;
    /**
     * Student constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function assignTempTeacher(Teacher $teacher)
    {
        $this->homeWork = $teacher->assignHomeWork();
    }

    public function getHomeWorkScore():int
    {
        return $this->homeWork;
    }

    public function doHomeWork():int
    {
        return $this->homeWorkScore = rand(20,100);
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
     * @return Student
     */
    public function setName(string $name): Student
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeWork(): string
    {
        return $this->homeWork;
    }

    /**
     * @param string $homeWork
     * @return Student
     */
    public function setHomeWork(string $homeWork): Student
    {
        $this->homeWork = $homeWork;
        return $this;
    }

    /**
     * @param Teacher $teacher
     * @return $this
     */
    public function assignATempTeacher(Teacher  $teacher)
    {
        $this->setHomeWork($teacher->assignHomeWork());
        return $this;
    }
}