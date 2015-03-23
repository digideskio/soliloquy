<?php

namespace Soliloquy\MovieBundle\Document;

class Movie
{
    /**
     * @var string
     */
    protected $originalTitle;

    /**
     * @var string
     */
    protected $yearOfProduction;

    /**
     * @var string
     */
    protected $englishTitle;

    /**
     * @var string
     */
    protected $polishTitle;

    protected $rating;

    protected $ratedAt;

    protected $isFavourite;

    protected $id;

    /**
     * @return string
     */
    public function getPolishTitle()
    {
        return $this->polishTitle;
    }

    /**
     * @param string $polishTitle
     */
    public function setPolishTitle($polishTitle)
    {
        $this->polishTitle = $polishTitle;
    }

    /**
     * @return string
     */
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     */
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;
    }

    /**
     * @return string
     */
    public function getYearOfProduction()
    {
        return $this->yearOfProduction;
    }

    /**
     * @param string $yearOfProduction
     */
    public function setYearOfProduction($yearOfProduction)
    {
        $this->yearOfProduction = $yearOfProduction;
    }

    /**
     * @return string
     */
    public function getEnglishTitle()
    {
        return $this->englishTitle;
    }

    /**
     * @param string $englishTitle
     */
    public function setEnglishTitle($englishTitle)
    {
        $this->englishTitle = $englishTitle;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getRatedAt()
    {
        return $this->ratedAt;
    }

    /**
     * @param mixed $ratedAt
     */
    public function setRatedAt($ratedAt)
    {
        $this->ratedAt = $ratedAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIsFavourite()
    {
        return $this->isFavourite;
    }

    /**
     * @param mixed $isFavourite
     */
    public function setIsFavourite($isFavourite)
    {
        $this->isFavourite = $isFavourite;
    }
}