<?php namespace entity;

require_once "Star.php";

class Singer extends Star
{
    private $musicalStyle;

    public function __construct($fname, $lname, $birth, $country, $emailAdr, $phone,
             $salaire, $musicalStyle)
    {
        parent::__construct($fname, $lname, $birth, $country, $emailAdr, $phone, $salaire);
        $this->musicalStyle = $musicalStyle;
        $this->category = "Singer";
    }

    public function getMusicalStyle() : string
    {
        return $this->musicalStyle;
    }

    public function setMusicaleStyle($musicalStyle)
    {
        $this->musicalStyle = $musicalStyle;
    }


    public function displayInfo()
    {
        parent::displayInfo();
		echo "| MusicalStyle : $this->musicalStyle\n";
    }

    public function doCharity()
    {
        echo "--------------------------------------------------------------------------------------\n";
        echo $this->fname . $this->lname . " organize a concert, collect the incomes and give 60 % to a fundation for charity\n";
        echo "-------------------------------------------------------------------------------------\n";
    }

    public function prepareConcert()
    {
        echo "---------------------------------------------------------\n";
        echo $this->fname . $this->lname . " prpare concert like so : \n";
        echo "- Creat a playlist by selecting 15 songs in his last albums\n";
        echo "- Practice them with his musician\n";
        echo"-----------------------------------------------------------\n";
    }
} 