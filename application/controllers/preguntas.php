<?php

class Preguntas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('preguntasModel');
    }

    function index()
    {
        $datos=['preguntas'=>$this->preguntasModel->findAll()];
        $this->load->view('mantenimientos/preguntas/preguntas',$datos);
    }

    function recargarTabla()
    {
        $datos=['preguntas'=>$this->preguntasModel->findAll()];
        $this->load->view('mantenimientos/preguntas/tabla',$datos);
    }

    function recargarFrm()
    {
        $this->load->view('mantenimientos/preguntas/formulario');
    }

    function recargarFrmData()
    {
        $id=$_POST['id_pregunta'];
        $datos=['preguntas'=>$this->preguntasModel->findById($id)];
        $this->load->view('mantenimientos/preguntas/formularioData',$datos);
    }

    function create()
    {
        $datos=['id_categoria'=>$_POST['id_categoria'],
        'pregunta'=>$_POST['pregunta'],
        'estado'=>$_POST['estado'],];
        $this->preguntasModel->create($datos);
    }

    function update()
    {
        $datos=['id_categoria'=>$_POST['id_categoria'],
        'pregunta'=>$_POST['pregunta'],
        'estado'=>$_POST['estado'],
        'id_pregunta'=>$_POST['id_pregunta']];
        $this->preguntasModel->update($datos);
    }

    function eliminar()
    {
        $datos=['id_pregunta'=>$_POST['id_pregunta']];
        $this->preguntasModel->delete($datos);
    }

}


?>