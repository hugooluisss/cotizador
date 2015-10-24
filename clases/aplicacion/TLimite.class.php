<?php
/**
* TLimite
* Es el que define el limite para la lista de precios en serigrafía
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TLimite{
	private $idLimite;
	private $inferior;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TLimite($id = ''){
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
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from limite where idLimite = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				default:
					$this->$field = $val;
			}
		}
		
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
		return $this->idLimite;
	}
	
	/**
	* Establece el limite inferior
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setInferior($val = ''){
		$this->inferior = $val;
		return true;
	}
	
	/**
	* Retorna el limite inferior
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getInferior(){
		return $this->inferior;
	}
	
	/**
	* Retorna el limite inferior
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSuperior(){
		if ($this->getId() == '' and $this->getInferior() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select inferior - 1 as superior from limite where inferior < ".$this->getInferior());
		
		return $rs->fields['superior'];
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
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO limite() VALUES();");
			if (!$rs) return false;
			
			$this->idLimite = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE limite
			SET
				inferior = '".$this->getInferior()."'
			WHERE idLimite = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from limite where idLimite = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>