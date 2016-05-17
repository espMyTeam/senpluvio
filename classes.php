<?php
class Pluvio {
	private $base;
	function __construct($base){
		$this->base=$base;
	}
	function enregistrement($donnees, $nom, $date){
		$check=$this->base->prepare("insert into donnees (value, nom, date) values (:n1, :n2, :n3)");
		$check->execute(array(
			':n1' => $donnees,
			':n2' => $nom,
			':n3' => $date
		));
	}
}

