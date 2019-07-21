<?php

class Especialidades extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('especialidadesModel');
    }

    function index()
    {
        $datos=['especialidades'=>$this->especialidadesModel->findAll()];
        $this->load->view('mantenimientos/especialidades/especialidades',$datos);
    }

    function recargarTabla()
    {
        $datos=['especialidades'=>$this->especialidadesModel->findAll()];
        $this->load->view('mantenimientos/especialidades/tabla',$datos);
    }

    function recargarFrm()
    {
        // $datos=['especialidades'=>$this->especialidadesModel->findById()];
        $this->load->view('mantenimientos/especialidades/formulario');
    }

    function recargarFrmData()
    {
        $id=$_POST['id_especialidad'];
        $datos=['especialidades'=>$this->especialidadesModel->findById($id)];
        $this->load->view('mantenimientos/especialidades/formularioData',$datos);

    }

    function create()
    {
        $datos=['nombre'=>$_POST['nombre'],
        'estado'=>$_POST['estado'],];
        $this->especialidadesModel->create($datos);
    }

    function update()
    {
        $datos=['nombre'=>$_POST['nombre'],
        'estado'=>$_POST['estado'],
        'id_especialidad'=>$_POST['id'],];
        $this->especialidadesModel->update($datos);
    }

    function eliminar()
    {
        $datos=['id'=>$_POST['id']];
        $this->especialidadesModel->delete($datos);
    }

}


?>