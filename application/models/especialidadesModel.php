<?php

class EspecialidadesModel extends CI_Model
{
    function findAll()
    {
        return $this->db->get('especialidades')->result();
    }

    function findById($id)
    {
        
        return $this->db->where('id_especialidad',$id)->get('especialidades')->result();
    }

    function create($datos)
    {
        $sql="INSERT INTO especialidades (id_especialidad, nombre, estado) VALUES (NULL, ?, ?);";
        $this->db->query($sql,$datos);
    }

    function update($datos)
    {
        $sql="UPDATE especialidades SET nombre = ? , estado = ? WHERE id_especialidad = ? ;";
        $this->db->query($sql,$datos);
    }

    function delete($datos)
    {
        $sql="DELETE FROM especialidades WHERE id_especialidad= ? ;";
        $this->db->query($sql,$datos);
    }

}
?>