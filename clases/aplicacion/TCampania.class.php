<?php
/**
* TCampania
* Campañas
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TCampania{
	private $idCampania;
	public $nombre;
	public $disponible;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TCampania($id = ''){
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
		$rs = $db->Execute("select * from campania where idCampania = ".$id);
		
		foreach($rs->fields as $field => $val){
			$this->$field = $val;
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
		return $this->idCampania;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece si está disponible o no
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDisponible($val = true){
		$this->disponible = $val;
		return true;
	}
	
	/**
	* Retorna true si está disponible
	*
	* @autor Hugo
	* @access public
	* @return booleand comparación
	*/
	
	public function getDisponible(){
		return $this->disponible;
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
			$rs = $db->Execute("INSERT INTO campania(nombre) VALUES('".$this->getNombre()."');");
			if (!$rs) return false;
				
			$this->idCampania = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE campania
			SET
				nombre = '".$this->getNombre()."',
				disponible = ".$this->getDisponible()."
			WHERE idCampania = ".$this->getId());
			
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
		$rs = $db->Execute("delete from campania where idCampania = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Agrega un voto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function addVoto(){
		$db = TBase::conectaDB();
		if ($this->getId() == '') return false;
		
		$fecha = date("Y-m-d");
		
		$rs = $db->Execute("select * from voto where idCampania = ".$this->getId()." and fecha = '".$fecha."' and ip = '".$_SERVER['REMOTE_ADDR']."'");
		
		if (!$rs->EOF) return false;
		
		$rs = $db->Execute("insert into voto (idCampania, fecha, ip) values (".$this->getId().", '".$fecha."', '".$_SERVER['REMOTE_ADDR']."')");
		
		return $rs?true:false;
	}
	
	/**
	* Reiniciar votos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function reiniciar(){
		$db = TBase::conectaDB();
		if ($this->getId() == '') return false;
		
		$rs = $db->Execute("delete from voto where idCampania = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>