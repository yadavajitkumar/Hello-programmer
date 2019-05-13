<?php
class employee
{
	public $name;
	public $sallary;
	public $company;
	
	function showdata()
	{
	$this->name="Mr. Yadav Ajitkumar Ashokkumar";
	$this->sallary=25000;
	$this->company="WIPRO TECHNOLOGY ";
	echo "<b>The name is </b>  $this->name  <br> The Sallary is $this->sallary <br> The employee work in compamy the name is <h3>$this->company </h3>";
	}
}
$emp =new employee;

$emp->showdata();

?>