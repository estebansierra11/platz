<!DOCTYPE html>
<html>
<head>
  
</head>


<body>
<?php

abstract class Persona{

	public $edad;
	public $primaria;
	public $bachillerato;
	public $universidad;

	public function __construct($edad){
		$this->edad = $edad;
	}

	public abstract function getDescripcion();

	public abstract function imprimirFormulario();
}

class Bebe extends Persona{

	public function __construct($edad){
		parent::__construct($edad);
	}

	public function getDescripcion(){
		return "Es un Bebe";
	}

	public function imprimirFormulario(){
		echo "/_\'";
	}
}

class Ninio extends Persona{

	public function __construct($edad){
		parent::__construct($edad);

	}

	public function getDescripcion(){
		return "Es un Ninio";
	}

	public function imprimirFormulario(){
		echo "<form>
    Escuela primaria
    <input type='text' name='primaria'>
    <input type='submit' name='Submit' value='Enviar'>
  </form>";
	}
}

class Adolescente extends Persona {

	public function __construct($edad){
		parent::__construct($edad);
	}

	public function getDescripcion(){
		return "Es un adolescente";
	}

	public function imprimirFormulario(){
		echo "<form>
    <h2>Adolescentes</h2>
    Escuela primaria
    <input type='text' name='primaria'>
    <br>
    Bachillerato</h3>
    <input type='text' name='bachillerato'>
    <br>
    <input type='submit' name='Submit' value='Enviar'>
   </form>";

	}
}

class Adulto extends Persona{

	public function __construct($edad){
		parent::__construct($edad);
	}

	public function getDescripcion(){
		return "Es un adulto";
	}

	public function imprimirFormulario(){

		echo "<form>
    <h2>Adultos</h2>
    Escuela primaria
    <input type='text' name='primaria'>
    <br>
    Bachillerato
    <input type='text' name='bachillerato'>
    <br>
    Universidad
    <input type='text' name='universidad'>
    <br>
    <input type='submit' name='Submit' value='Enviar'>
   </form>";
	}

}

interface PersonaFactoryMethod{

	public function createPersona($edad);
}

class PersonaFactory implements PersonaFactoryMethod{

	public function createPersona($edad){
		if ($edad<6){
			return new Bebe($edad);
		}
		else{
			if($edad>=6 && $edad<=11){
				return new Ninio($edad);
			}
			else{
				if($edad>11 && $edad<=17){
				return new Adolescente($edad);
			    }
			    else{
			    	return new Adulto($edad);
			    }
			}
		}

	}
}

?>

</body>
</html>
