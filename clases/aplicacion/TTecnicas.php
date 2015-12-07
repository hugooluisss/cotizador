<?php
/**
* TTecnicas
* Ropa que extiende de TItem
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TTecnicas extends TItem{
	private $descripcion;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TTecnicas($id = ''){
		parent::TItem();
		$this->setId($id);
		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		if (! parent::setId($id)) return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from otrastecnicas where idItem = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idItem;
	}	
	/**
	* Establece la descripcion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = 0){
		$this->descripcion = $val;
		return true;
	}
	
	/**
	* Retorna la descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		//if ($this->idItem == '')
		if (! parent::guardar()) return false;
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE otrastecnicas
			SET
				descripcion = '".$this->getDescripcion()."'
			WHERE idItem = ".$this->idItem);
			
		return $rs?true:false;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @param integer $limite id del Limite
	* @param decimal $precio Precio definido
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPrecio($limite, $precio){
		if ($this->getId() == '') return false;
		if (!($precio > 0 and is_numeric(sprintf("%0.2f", $precio)))) return false;
		
		$db = TBase::conectaDB();
		
		$db->Execute("delete from preciootrastecnicas where idItem = ".$this->getId()." and idLimite = ".$limite);
		
		$rs = $db->Execute("insert into preciootrastecnicas (idItem, idLimite, precio) values (".$this->getId().", ".$limite.", ".$precio.")");
		return $rs?true:false;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @param integer $cantidad 
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function getPrecio($cantidad){
		if ($this->getId() == '') return false;
		if (!($cantidad > 0 and is_numeric($cantidad))) return false;
		
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select precio
from item a join otrastecnicas b using(idItem) join preciootrastecnicas c using(idItem) join limite d using(idLimite)
where idItem = ".$this->getId()." and inferior <= ".$cantidad." order by inferior desc;");
		
		if($rs->EOF) return false;
		
		return $rs->fields["precio"];
	}
}
?>