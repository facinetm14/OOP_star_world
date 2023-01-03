<?php namespace Entity;

require_once "Star.php";
require_once "Club.php";

class Footballer extends Star 
{
    private string $post;
    private Club $club;

    public function __construct($fname, $lname, $birth, $country, $emailAdr, $phone, $salaire, $post)
    {
        parent::__construct($fname, $lname, $birth, $country, $emailAdr, $phone, $salaire);
        $this->post = $post;
        $this->category = "Footballer";
        $this->club = new Club("", "", "");
    }

    public function getPost() 
    {
        return $this->post;
    } 

    public function getClub() : Club
    {
        return $this->club;
    }

    public function prepareMatch()
    {
        if (empty($this->club->getName())) {
            echo "Sorry, you can't prepare a match, because you don't have club\n";
            echo "Continue your daily plan training\n";
            return ;
        }
        echo "---------------------------------------------------------\n";
        echo $this->fname . $this->lname . "prpare match like this : \n";
        echo "- Fitness session 15 min before training\n";
        echo "- Training with ball 1h\n";
        echo "- Recovering 30 min\n";
        echo "- Watch highlight of adversary last 5 games\n";
        echo "- Review last game videos\n";
        echo"-----------------------------------------------------------\n";
    }

    public function displayInfo()
    {
        $club = (!empty($this->club->getName())) ? $this->club->getName() : "No club";
        parent::displayInfo();
		echo "| Post : $this->post\n";
		echo "| Club :" . $club."\n";
    }

    public function doCharity() 
    {
        echo "---------------------------------------------------------\n";
        echo "$this->fname $this->lname will give 100% of his next game prime:\n";
        echo "----------------------------------------------------------\n";
    }
}