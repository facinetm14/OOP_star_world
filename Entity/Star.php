<?php namespace Entity;

abstract class Star
{
	protected string $id;
	protected string $fname;
    protected string $lname;
    protected string $birth;
    protected string $country;
    protected string $emailAdr;
    protected string $phone;
    protected int    $salaire;
    protected bool   $isContract;
    protected string $category;


    public function __construct($fname, $lname, $birth, $country, $emailAdr, $phone, $salaire)
    {
		$this->fname = (string)$fname;
		$this->lname = (string)$lname;
		$this->birth = (string)$birth;
		$this->country = (string)$country;
		$this->emailAdr = (string)$emailAdr;
		$this->phone = (string)$phone;
		$this->salaire = (int)$salaire;
		$this->isContract = false;
    }

	public function getFname() : string
	{
		return $this->fname;
	}

	public function getLname() : string
	{
		return $this->lname;
	}

	public function getBirth() : string
	{
		return $this->birth;
	}

	public function getCountry() : string 
	{
		return $this->country;
	}

	public function getEmailAdr() : string 
	{
		return $this->emailAdr;
	}

	public function getPhone() : string
	{
		return $this->phone;
	}

	public function getSalaire() : int
	{
		return $this->salaire;
	}

	public function getCategory() : string
	{
		return $this->category;
	}
	
	public function getIsContract() : bool
	{
		return $this->isContract;
	}

	public function getId() : string
	{
		return $this->id;
	}

	public function setFname(string $fname)
	{
		$this->fname = $fname;
	}

	public function setLname(string $lname)
	{
		$this->lname = $lname;
	}

	public function setBirth(string $birth)
	{
		$this->birth = $birth;
	}

	public function setCountry(string $country)
	{
		$this->country = $country;
	}

	public function setEmailAdr(string $emailAdr)
	{
		$this->emailAdr = $emailAdr;
	}

	public function setPhone(string $phone)
	{
		$this->phone = $phone;
	}

	public function setSalaire(int $salaire)
	{
		$this->salaire = $salaire;
	}

	abstract protected function doCharity();

	public function signNewContract() 
	{
		if ($this->isContract) {
			echo "OUPS !, you have a valide contract, you can't sign new one\n";
			return ;
		}
		echo "CONGRATS $this->fname $this->lname! YOU SUCCESSFULLY SIGNED A NEW CONTRACT\n";
		echo "A NEW JOURNEY FOR YOUR CARREER STARTED !\n";
		$this->isContract = true;
	}

	public function displayInfo()
	{
		$statContract = ($this->isContract) ?  "Yes" : "No";
		echo "--------------------------------------------------\n";
		echo "| FirstName  : $this->fname\n";
		echo "| LastName   : $this->lname\n";
		echo "| Birth Day  : $this->birth \n";
		echo "| Country    : $this->country\n";
		echo "| Email      : $this->emailAdr\n";
		echo "| Category    : $this->category\n";
		echo "| Salaire    : $this->salaire\n";
		echo "| IsContract : $statContract\n";
	}
}