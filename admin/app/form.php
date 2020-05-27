<?php
class Form
	{
	private $data;		
	public $surround = 'p';
	
	public function __construct($data=array())
		{
		$this -> data = $data;
		}
		
	private function surround($html)
		{
			return "<{$this->surround}>$html</{$this->surround}>";
		}	
		
	private function getValue($index)
		{
			return isset($this->data[$index]) ? $this->data[$index] : null;
		}
//formulaire simple
	//formulaire type text
	public function inputtext($name,$label)
		{
			return $this->surround('<label for="'.$name.'">'.$label.'</label><br/>
									<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
		}
	//formulaire type date
	public function inputdate($name,$label)
		{
			return $this->surround('<label for="'. $name.'">'.$label.'</label><br/>
									<input type="date" name="'.$name.'" value="'.$this->getValue($name).'">');
		}
	//formulaire type liste prédéfini
	public function inputliste($name,$label)
		{
			return $this->surround('<label for="'. $name.'">'.$label.'</label><br/>
									<select name="'.$name.'"/> 
										<option value="En attente"> En attente </option>
										<option value="Accepté"> Accepté </option>
										<option value="Refusé"> Refusé </option>
									</select>');
		}
//formulaire avec récupération des  valeurs
	//formulaire type Hidden
	public function inputhidden($name,$valeurs)
		{
			return $this->surround('<input type="hidden" name="'.$name.'" value="'.$valeurs.'">');
		}
	//formulaire type text
	public function inputtextmodif($name,$label,$valeurs)
		{
			return $this->surround('<label for="'.$name.'">'.$label.'</label><br/>
									<input type="text" name="'.$name.'" value="'.$valeurs.'">');
		}
	//formulaire type date
	public function inputdatemodif($name,$label,$valeurs)
		{
			return $this->surround('<label for="'. $name.'">'.$label.'</label><br/>
									<input type="date" name="'.$name.'" value="'.$valeurs.'">');
		}
	//formulaire type liste prédéfini
	public function inputlistemodif($name,$label,$valeurs)
		{
			return $this->surround('<label for="'. $name.'">'.$label.'</label><br/>
									<select name="'.$name.'"/> 
										<option value="En attente"> En attente </option>
										<option value="Accepté"> Accepté </option>
										<option value="Refusé"> Refusé </option>
									</select>');
		}
//boutton simple envoyer
	public function submit()
		{
			return $this->surround('<button type="submit">envoyer</button>');
		}
	
	}
	
	


?>