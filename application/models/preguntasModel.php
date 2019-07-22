<?php

class PreguntasModel extends CI_Model
{
    function findAll()
    {
        return $this->db->get('preguntas')->result();
    }

    function findById($id)
    {
        
        return $this->db->where('id_pregunta',$id)->get('preguntas')->result();
    }

    function create($datos)
    {
        $sql="INSERT INTO preguntas (id_pregunta, id_categoria, pregunta, estado) VALUES (NULL, ?, ?, ?);";
        $this->db->query($sql,$datos);
    }

    function update($datos)
    {
        $sql="UPDATE preguntas SET id_categoria = ? , pregunta = ? , estado = ? WHERE id_pregunta = ? ;";
        $this->db->query($sql,$datos);
    }

    function delete($datos)
    {
        $sql="DELETE FROM preguntas WHERE id_pregunta= ? ;";
        $this->db->query($sql,$datos);
    }

}
?>