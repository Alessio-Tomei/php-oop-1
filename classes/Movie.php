<?php
class Movie {
    private $title;
    private $genre;
    private $year;
    private $rating;
    private $language;


    public function __construct($_title, $_genre, $_year, $_language) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->language = $_language;
    }


    public function setRating($_rating) {
        if (is_numeric($_rating) && $_rating >= 0 && $_rating <= 10) {
            $this->rating = round($_rating);
        }
    }

    public function getInfo() {
        return [$this->title, $this->genre, $this->year, $this->rating, $this->language];
    }
}


