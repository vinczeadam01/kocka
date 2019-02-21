<?php
    class kockadobas {
    var $hanyas;
	// ez hozza létre a sorsolást
	function __construct($hanyas)
	{
            $this->hanyas=$hanyas;
		
	}
	function dobas()
	{
		$dobottszam=0;
		$dobottszam=rand(1,$this->hanyas);
		return $dobottszam;
	} 
        function kiiras()
        {
            echo $this->dobas();
        }
    }