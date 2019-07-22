<?php

class Respuestas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('preguntasModel');
    }

    function index()
    {
        $datos=['respuestas'=>$this->respuestasModel->findAll()];
        $this->load->view('mantenimientos/respuestas/respuestas',$datos);
    }

    function recargarTabla()
    {
        $datos=['respuestas'=>$this->respuestasModel->findAll()];
        $this->load->view('mantenimientos/respuestas/tabla',$datos);
    }

    function recargarFrm()
    {
        $this->load->view('mantenimientos/respuestas/formulario');
    }

    function recargarFrmData()
    {
        $id=$_POST['id_respuesta'];
        $datos=['respuestas'=>$this->respuestasModel->findById($id)];
        $this->load->view('mantenimientos/respuestas/formularioData',$datos);
    }

    function create()
    {
        $datos=['id_docente'=>$_POST['id_docente'],
        'id_pregunta'=>$_POST['id_pregunta'],
        'calificacion'=>$_POST['calificacion'],
        'fecha_respuesta'=>$_POST['fecha_respuesta'],];
        $this->respuestasModel->create($datos);
    }

    function update()
    {
        $datos=['id_docente'=>$_POST['id_docente'],
        'id_pregunta'=>$_POST['id_pregunta'],
        'calificacion'=>$_POST['calificacion'],
        'fecha_respuesta'=>$_POST['fecha_respuesta'],
        'id_respuesta'=>$_POST['id_respuesta']];

        $this->respuestasModel->update($datos);
    }

    function eliminar()
    {
        $datos=['id_respuesta'=>$_POST['id_respuesta']];
        $this->respuestasModel->delete($datos);
    }

}


?>