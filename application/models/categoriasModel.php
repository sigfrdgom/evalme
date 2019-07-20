<?php

class CategoriasModel extends CI_Model
{
    function findAll()
    {
        return $this->db->get('categorias')->result();
    }

    function findById($id)
    {
        
        return $this->db->where('id_categoria',$id)->get('categorias')->result();
    }

    function create($datos)
    {
        $sql="INSERT INTO categorias (id_categoria, nombre, descripcion, estado) VALUES (NULL, ?, ?, ?);";
        $this->db->query($sql,$datos);
    }

    function update($datos)
    {
        $sql="UPDATE categorias SET nombre = ? , descripcion = ? , estado = ? WHERE id_categoria = ? ;";
        $this->db->query($sql,$datos);
    }

    function delete($datos)
    {
        $sql="DELETE FROM categorias WHERE id_categoria= ? ;";
        $this->db->query($sql,$datos);
    }

}
?>