<?php
//example of single inheritance
class Father
{
	public $a;
	public $b;
	
	function getval($x,$y)
	{
		$this->a=$x;
		$this->b=$y;
		
	}
}

class Son extends Father
{
		function display()
		{
			echo "The value of A is: $this->a <br>";
			echo "The value of B is: $this->b  <br>";
		}
}

$obj =new Son();
$obj->getval(10,20);
$obj->display();




?>