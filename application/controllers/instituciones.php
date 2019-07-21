<?php

class Instituciones extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('institucionesModel');
    }

    function index()
    {
        $datos=['instituciones'=>$this->institucionesModel->findAll()];
        $this->load->view('mantenimientos/instituciones/instituciones',$datos);
    }

    function recargarTabla()
    {
        $datos=['instituciones'=>$this->institucionesModel->findAll()];
        $this->load->view('mantenimientos/instituciones/tabla',$datos);
    }

    function recargarFrm()
    {
        $this->load->view('mantenimientos/instituciones/formulario');
    }

    function recargarFrmData()
    {
        $id=$_POST['id_institucion'];
        $datos=['instituciones'=>$this->institucionesModel->findById($id)];
        $this->load->view('mantenimientos/instituciones/formularioData',$datos);
    }

    function create()
    {
        $datos=['nombre'=>$_POST['nombre'],
        'direccion'=>$_POST['direccion'],
        'codigo'=>$_POST['codigo'],
        'estado'=>$_POST['estado'],];
        $this->institucionesModel->create($datos);
    }

    function update()
    {
        $datos=['nombre'=>$_POST['nombre'],
        'direccion'=>$_POST['direccion'],
        'codigo'=>$_POST['codigo'],
        'estado'=>$_POST['estado'],
        'id_institucion'=>$_POST['id'],];
        $this->institucionesModel->update($datos);
    }

    function eliminar()
    {
        $datos=['id'=>$_POST['id']];
        $this->institucionesModel->delete($datos);
    }

}


?>