<?php
/**
* TAviso
* Avisos para los usuarios relacionados con los clientes
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TAviso{
	private $idAviso;
	public $cliente;
	public $usuario;
	private $registro;
	private $alert;
	private $mensaje;
	private $estado;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TAviso($id = ''){
		$this->cliente = new TCliente;
		$this->usuario = new TUsuario;
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
		$rs = $db->Execute("select * from aviso where idAviso = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				case 'idCliente':
					$this->cliente = new TCliente($val);
				break;
				case 'idUsuario': 
					$this->usuario = new TUsuario($val);
				break;
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
		return $this->idAviso;
	}
	
	/**
	* Retorna la fecha del registro
	*
	* @autor Hugo
	* @access public
	* @return string date
	*/
	
	public function getRegistro(){
		return $this->registro == ''?date("Y-m-d H:i:s"):$this->registro;
	}
	
	/**
	* Establece la fecha y hora en la que se activará
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAlerta($val = ''){
		$this->alerta = $val == ''?date("Y-m-d H:i:s"):$val;
		
		return true;
	}
	
	/**
	* Retorna el descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAlerta(){
		return $this->alerta;
	}
	
	/**
	* Establece el mensaje
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMensaje($val = ''){
		$this->mensaje = $val;
		return true;
	}
	
	/**
	* Retorna el mensaje
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMensaje(){
		return $this->mensaje;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEstado($val = 1){
		$this->estado = $val;
		return true;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEstado(){
		return $this->estado == ''?1:$this->estado;
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
		if ($this->usuario->getId() == '') return false;
		if ($this->cliente->getId() == '') return false;
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO aviso(idUsuario, idCliente, registro) VALUES(".$this->usuario->getId().", ".$this->cliente->getId().", '".$this->getRegistro()."');");
			if (!$rs) return false;
				
			$this->idAviso = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE aviso
			SET
				alerta = '".$this->getAlerta()."',
				mensaje = '".$this->getMensaje()."',
				estado = '".$this->getEstado()."'
			WHERE idAviso = ".$this->getId());
			
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
		$rs = $db->Execute("delete from aviso where idAviso = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>