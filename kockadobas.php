<?php
    class kockadobas {
    var $hanyas;
	// ez hozza létre a sorsolást
	function __construct($hanyas)
	{
		if($hanyas==5)
		{
			$this->hanyas=5;
		}
	}
	function dobas()
	{
		$dobottszam=0;
		$dobottszam=rand(1,$this->hanyas);
		return $dobottszam;
	} 
 

