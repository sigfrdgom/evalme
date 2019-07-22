<?php

class RespuestasModel extends CI_Model
{
    function findAll()
    {
        return $this->db->get('respuestas')->result();
    }

    function findById($id)
    {
        
        return $this->db->where('id_respuesta',$id)->get('respuestas')->result();
    }

    function create($datos)
    {
        $sql="INSERT INTO respuestas (id_respuesta, id_docente, id_pregunta, calificacion, fecha_respuesta) VALUES (NULL, ?, ?, ?, CURRENT_TIMESTAMP);";
        $this->db->query($sql,$datos);
    }

    
    function update($datos)
    {
        $sql="UPDATE respuestas SET id_docente = ? , id_pregunta = ? , calificacion = ? , fecha_respuesta = ? WHERE id_respuesta = ? ;";
        $this->db->query($sql,$datos);
    }

    function delete($datos)
    {
        $sql="DELETE FROM respuestas WHERE id_respuesta= ? ;";
        $this->db->query($sql,$datos);
    }

}
?>