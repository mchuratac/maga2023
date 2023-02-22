<?php
class PrincipalModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }

    public function getProducto($id_producto)
    {
        $sql = "SELECT p.*, c.categoria FROM productos p INNER JOIN categorias c on p.id_categoria=c.id WHERE p.id = $id_producto";
        return $this->select($sql);

    }
    //paginacion
    public function getProductos($desde, $porPagina)
    {
        $sql = "SELECT * FROM productos LIMIT $desde, $porPagina";
        return $this->selectAll($sql);

    }
    //obtener total productos
    public function getTotalProductos()
    {
        $sql = "SELECT COUNT(*) AS total FROM productos";
        return $this->select($sql);
    
    }


}
 
?>