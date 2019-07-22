<?php

class DocentesModel extends CI_Model
{
    function findAll()
    {
        return $this->db->get('docentes')->result();
    }

    function findById($id)
    {
        
        return $this->db->where('id_docente',$id)->get('docentes')->result();
    }

    function create($datos)
    {
        $sql="INSERT INTO docentes (id_docente, id_institucion, id_especialidad, nombres, apellidos) VALUES (NULL, ?, ?, ?, ?);";
        $this->db->query($sql,$datos);
    }

    function update($datos)
    {
        $sql="UPDATE docentes SET id_institucion = ? , id_especialidad = ? , nombres = ? , apellidos = ? WHERE id_docente = ? ;";
        $this->db->query($sql,$datos);
    }

    function delete($datos)
    {
        $sql="DELETE FROM docentes WHERE id_docente= ? ;";
        $this->db->query($sql,$datos);
    }

}
?>