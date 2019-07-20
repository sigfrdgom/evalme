<?php

class InstitucionesModel extends CI_Model
{
    function findAll()
    {
        return $this->db->get('instituciones')->result();
    }

    function findById($id)
    {
        
        return $this->db->where('id_institucion',$id)->get('instituciones')->result();
    }

    function create($datos)
    {
        $sql="INSERT INTO instituciones (id_institucion, nombre, direccion, codigo, estado) VALUES (NULL, ?, ?, ?, ?);";
        $this->db->query($sql,$datos);
    }

    function update($datos)
    {
        $sql="UPDATE instituciones SET nombre = ? , direccion = ? , codigo = ? , estado = ? WHERE id_institucion = ? ;";
        $this->db->query($sql,$datos);
    }

    function delete($datos)
    {
        $sql="DELETE FROM instituciones WHERE id_institucion= ? ;";
        $this->db->query($sql,$datos);
    }

}
?>