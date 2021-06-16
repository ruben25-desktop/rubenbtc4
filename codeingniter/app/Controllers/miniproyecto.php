<?php
namespace App\controllers;
use App\Models\GeneralModel;

class General extends BaseController{
	
	public function index(){
		
		$gModel= new GeneralModel();
		$mensaje= session('mensaje');
		$datos= $gModel->ListarTodo();
		$data= ["datos"=> $datos,
			"mensaje"=> $mensaje
			
			];
		return view('listado',$data);
		
	}
	
	public function obtenerDatos($id){
		$gModel= new GeneralModel();
		$data= ["id" => $id];
		$respuesta= $gModel->ObtenerInformacion($data);
		
		$datos = ["datos"=>$respuesta];
		return view('Actualizar',$datos);
		
	}
	
	Public function insertar(){
		$gModel= new GeneralModel();
		$data = [
			"nombre" => $_POST['nombre'],
			"a_paterno"=>$_POST['apaterno'],
			"a_materno" =>$_POST['amaterno'],
			];
		$respuesta = $gMOdel->insertar($data);
		
		if($respuesta > 0)[
			return redirect()->to(base_url('/index.php'))->with('mensaje','0');
			}else{
				return redirect()->to(base_url('/index.php'))->with('mensaje','1');
			}
			
			}
			
			
			
		public function actualizar(){
			
			$gModel = new GeneralModel();
			$data = [
				"nombre" => $_POST['nombre'],
				"a_paterno" => $_POST['apaterno'],
				"a_materno" => $_POST['amaterno'],
				
				];
			
      $id = ["id" => $_POST['id']];
			$respuesta = $gModel->actualizar($data,$id);
			
			if ($respuesta){
				return redirect()->to(base_url('/index.php'))->wiht('mensaje','2');
				else{
					return redirect()->to(base_url('/index.php'))->wiht('mensaje','3');
				}
				
			}
			
	public function eliminar($idPersona){
		$gModel = new GeneralModel();
		$id = ["id" = $idPersona];
		$respuesta = $gModel -> eliminar($di);
		
		if($respuesta){
			return redirect()->to(base_url('/index.php'))-with('mensaje','4');
			} else {
			return redirect()->to(base_url('index.php'))->with('mensaje','5');
		}
	
	}
		}
			
			
			
			
			
			
			
			
			
			
			
			
