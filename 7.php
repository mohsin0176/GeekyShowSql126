
<?php
class mobile
{

public $model;

function __construct($number)
{
	$this->model=$number;

	echo"Construction Model Number:$this->model";
	echo "</br>";
}

function __destruct()
{
	echo "Destruction Model is Called";
	echo "</br>";
}

}

$object=new mobile(123);

$obj=new mobile('A28');

?>