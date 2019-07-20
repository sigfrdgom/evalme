<?php

class Categorias extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('categoriasModel');
    }

    function index()
    {
        $datos=['categorias'=>$this->categoriasModel->findAll()];
        $this->load->view('mantenimientos/categorias/categorias',$datos);
    }

    function recargarTabla()
    {
        $datos=['categorias'=>$this->categoriasModel->findAll()];
        $this->load->view('mantenimientos/categorias/tabla',$datos);
    }

    function recargarFrm()
    {
        // $datos=['categorias'=>$this->categoriasModel->findById()];
        $this->load->view('mantenimientos/categorias/formulario');
    }

    function recargarFrmData()
    {
        $id=$_POST['id_categoria'];
        $datos=['categorias'=>$this->categoriasModel->findById($id)];
        $this->load->view('mantenimientos/categorias/formularioData',$datos);

    }

    function create()
    {
        $datos=['nombre'=>$_POST['nombre'],
        'descripcion'=>$_POST['descripcion'],
        'estado'=>$_POST['estado'],];
        $this->categoriasModel->create($datos);
    }

    function update()
    {
        $datos=['nombre'=>$_POST['nombre'],
        'descripcion'=>$_POST['descripcion'],
        'estado'=>$_POST['estado'],
        'id_categoria'=>$_POST['id'],];
        $this->categoriasModel->update($datos);
    }

    function eliminar()
    {
        $datos=['id'=>$_POST['id']];
        $this->categoriasModel->delete($datos);
    }

}


?>