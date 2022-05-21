<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
Class BD{

    private $servidor='localhost';
    private $usuario='root';
    private $password='';
    private $base_datos='bd_ventas';

    private $conexion;
    
    function __construct() {
       
    }

    //Realiza la conexión a la base de datos
    public function conectar(){
        $this->conexion = new PDO('mysql:host='.$this->servidor.';dbname='.$this->base_datos, $this->usuario, $this->password);
    }

    //Método para realizar un SELECT sin parámetros
    public function recuperar_sucursales(){
        return $this->conexion->query('SELECT s.id_sucursal, s.sucursal, s.direccion, c.comuna FROM sucursal s, comuna c WHERE c.id_comuna=s.id_comuna ORDER BY 2');        
    }
    
    public function recuperar_vendedores(){
        return $this->conexion->query('SELECT v.id, v.nombre, s.sucursal FROM vendedor v, sucursal s WHERE s.id_sucursal=v.id_sucursal ORDER BY 1');        
    }
    public function recuperar_Factura(){
        return $this->conexion->query('SELECT nombre , folio, emisor, receptor, estadofactura, situacionpago, direccion, telefono, ciudad, codigopostal, rutempresa, cuotas, precio, email FROM faactura  WHERE folio=folio ORDER BY 1');        
    }
    public function recuperar_Producto(){
        return $this->conexion->query('SELECT id_producto , id_vendedor , precio , observaciones, nombre FROM producto , vendedor  WHERE id_vendedor=id_vendedor ORDER BY 1');        
    }
    
    public function recuperar_por_id($sql, $id){
        $stmt = $this->conexion->prepare($sql." WHERE id_comuna = :id");
        $stmt->execute([':id' => $id]);  
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insertar_vendedor($id, $nombre, $sucursal){
        $stmt = $this->conexion->prepare("INSERT INTO vendedor (id, nombre, Id_sucursal) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->bindParam(2, $nombre, PDO::PARAM_STR);
        $stmt->bindParam(3, $sucursal, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function insertar_factura($nombre, $folio, $emisor, $receptor, $estadofactura, $situacionpago, $direccion, $telefono, $ciudad, $codigopostal, $rutempresa, $cuotas, $precio, $email){
        $stmt = $this->conexion->prepare("INSERT INTO faactura (nombre , folio, emisor, receptor, estadofactura, situacionpago, direccion, telefono, ciudad, codigopostal, rutempresa, cuotas, precio, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
        $stmt->bindParam(2, $folio, PDO::PARAM_INT);
        $stmt->bindParam(3, $emisor, PDO::PARAM_STR);
        $stmt->bindParam(4, $receptor, PDO::PARAM_STR);
        $stmt->bindParam(5, $estadofactura, PDO::PARAM_STR);
        $stmt->bindParam(6, $situacionpago, PDO::PARAM_STR);
        $stmt->bindParam(7, $direccion, PDO::PARAM_STR);
        $stmt->bindParam(8, $telefono, PDO::PARAM_INT);
        $stmt->bindParam(9, $ciudad, PDO::PARAM_STR);
        $stmt->bindParam(10, $codigopostal, PDO::PARAM_INT);
        $stmt->bindParam(11, $rutempresa, PDO::PARAM_INT);
        $stmt->bindParam(12, $cuotas, PDO::PARAM_INT);
        $stmt->bindParam(13, $precio, PDO::PARAM_INT);
        $stmt->bindParam(14, $email, PDO::PARAM_STR);
        return $stmt->execute();
    }
    
    public function modificar_vendedor($id, $nombre, $sucursal){
        $stmt = $this->conexion->prepare("UPDATE vendedor SET nombre=?, id_sucursal=? WHERE id=?");
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
        $stmt->bindParam(2, $sucursal, PDO::PARAM_INT);
        $stmt->bindParam(3, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    public function eliminar_vendedor($id){
        $stmt = $this->conexion->prepare("DELETE FROM vendedor WHERE MD5(id)=?");
        $stmt->bindParam(1, $id, PDO::PARAM_STR);
        return $stmt->execute();
    }
  public function insertar_producto($id_producto, $id_vendedor, $precio, $observaciones){
        $stmt = $this->conexion->prepare("INSERT INTO producto (id_producto, id_vendedor, precio, observaciones) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $id_producto, PDO::PARAM_STR);
        $stmt->bindParam(2, $id_vendedor, PDO::PARAM_STR);
        $stmt->bindParam(3, $precio, PDO::PARAM_INT);
        $stmt->bindParam(4, $observaciones, PDO::PARAM_STR);
        return $stmt->execute();
    }
    public function modificar_producto($id, $nombre, $sucursal){
        $stmt = $this->conexion->prepare("UPDATE vendedor SET nombre=?, id_sucursal=? WHERE id=?");
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
        $stmt->bindParam(2, $sucursal, PDO::PARAM_INT);
        $stmt->bindParam(3, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function eliminar_producto($id_producto){
        $stmt = $this->conexion->prepare("DELETE FROM producto WHERE MD5(id_producto)=?");
        $stmt->bindParam(1, $id_producto, PDO::PARAM_STR);
        return $stmt->execute();
    }
    
    public function desconectar(){
        $this->conexion = null;
    }
}
?>