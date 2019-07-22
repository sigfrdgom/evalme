<?php

class Docentes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('docentesModel');
    }

    function index()
    {
        $datos=['docentes'=>$this->docentesModel->findAll()];
        $this->load->view('mantenimientos/docentes/docentes',$datos);
    }

    function recargarTabla()
    {
        $datos=['docentes'=>$this->docentesModel->findAll()];
        $this->load->view('mantenimientos/docentes/tabla',$datos);
    }

    function recargarFrm()
    {
        $this->load->view('mantenimientos/docentes/formulario');
    }

    function recargarFrmData()
    {
        $id=$_POST['id_docente'];
        $datos=['docentes'=>$this->docentesModel->findById($id)];
        $this->load->view('mantenimientos/docentes/formularioData',$datos);
    }

    function create()
    {
        $datos=['id_institucion'=>$_POST['id_institucion'],
        'id_especialidad'=>$_POST['id_especialidad'],
        'nombres'=>$_POST['nombres'],
        'apellidos'=>$_POST['apellidos'],];
        $this->docentesModel->create($datos);
    }

    function update()
    {
        
        $datos=['id_institucion'=>$_POST['id_institucion'],
        'id_especialidad'=>$_POST['id_especialidad'],
        'nombres'=>$_POST['nombres'],
        'apellidos'=>$_POST['apellidos'],
        'id_docente'=>$_POST['id_docente']];
        $this->docentesModel->update($datos);
    }

    function eliminar()
    {
        $datos=['id_docente'=>$_POST['id_docente']];
        $this->docentesModel->delete($datos);
    }

}


?>