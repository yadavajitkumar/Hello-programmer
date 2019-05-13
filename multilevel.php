<?php 
//example of multilevel inheritance   
class Car
{
	public $Doors;
	public $FuelType;
	public $Model;
	public $Average;
	public $wheel;
	
	function Oldcar()
	{
		echo "<h1> Checking the Car details for Bmw </h1><br>";
		
		$this->Doors="<b> In this car havae four doors </b>";
		$this->FuelType=" The fuel type is The Dieseal or gas type both are supported";
		$this->Model=" The car has been belong to the model of 2008 ";
		$this->Average=" The average of this car is 14 km/pl..";
		$this->Wheel=" It has four wheel";
		
		
		echo " 1. The Door in this car $this->Doors  <br> <br> 2. $this->FuelType  <br>3. $this->Model  <br>4. $this->Average <br>5. $this->Wheel <br>";
	}
}

class Bmw extends Car
{
	public $maxpower;
		public $Turbocharger;
		public $Brake;
	
	function features()
	{
		
		
		$this->maxpower=" it max power is 188 bhp @ 4000 rpm";
		$this->Turbocharger="Its a Turbocharger also supported";
		$this->Brake=" In this car has all whell are disk brake ";
		
		echo "<br> 6. Power Type: $this->maxpower  <br> <br> 7. Charger Supported : $this->Turbocharger   <br> <br>8. Brake type : $this->Brake " ;
		
		
	}
	
}
class Audi extends Bmw
{
	public $Gps;
	public $Bullteproof;
	function extendfeature()
	{
		$this->Gps=" <br>  <br>In this car supported by the gps at very high speed <br>";
		$this->Bullteproof="The Audi car has Bullteproof car ";
		
		echo "9. $this->Gps  <br> 10. $this->Bullteproof";
	}
}
$cardetails =new Audi;
$cardetails->Oldcar();
$cardetails->features();
$cardetails->extendfeature();





?>