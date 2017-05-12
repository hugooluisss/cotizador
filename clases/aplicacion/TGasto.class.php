<?php
/**
* TGasto
* Gastos
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TGasto{
	private $idGasto;
	private $concepto;
	private $fecha;
	private $monto;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TGasto($id = ''){
		$this->monto = 0;
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
		$rs = $db->Execute("select * from gasto where idGasto = ".$id);
		
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
		return $this->idGasto;
	}
	
	/**
	* Establece el concepto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setConcepto($val = ''){
		$this->concepto = $val;
		return true;
	}
	
	/**
	* Retorna el concepto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getConcepto(){
		return $this->concepto;
	}
	
	/**
	* Establece el monto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMonto($val = 0){
		$this->monto = $val;
		return true;
	}
	
	/**
	* Retorna el monto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMonto(){
		return $this->monto;
	}
	
	/**
	* Establece la Fecha
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		$this->fecha = $val;
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
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
		global $tempUsuario;
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO gasto(idUsuario) VALUES(".$tempUsuario->getId().");");
			if (!$rs) return false;
			
			$this->idGasto = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE gasto
			SET
				concepto = '".$this->getConcepto()."',
				fecha = '".$this->getFecha()."',
				monto = ".$this->getMonto()."
			WHERE idGasto = ".$this->getId());
			
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
		$rs = $db->Execute("delete from gasto where idGasto = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>