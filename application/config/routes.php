<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';

// páginas principales
$route['principal'] = 'Welcome';
$route['principal/(:num)'] = 'Welcome/indexASD/$1';
$route['terminosycondiciones'] = 'Welcome/terminosycondiciones';
$route['quienessomos'] = 'Welcome/quienessomos';
$route['contacto'] = 'Welcome/contacto';
$route['comercializacion'] = 'Welcome/comercializacion';
// páginas principales

// registro
$route['registrarse'] = 'registro_controller/registrarse';
$route['verifico_nuevoregistro'] = 'registro_controller';
//registro

//productos
$route['productos_todos'] = 'producto_controller';
$route['agregar_producto'] = 'producto_controller/form_agrega_producto';
$route['verifico_nuevoproducto'] = 'producto_controller/agrega_producto';
$route['muestra_eliminados'] = 'producto_controller/muestra_eliminados';
$route['productos_elimina/(:num)'] = 'producto_controller/eliminar_producto/$1';
$route['productos_activa/(:num)'] = 'producto_controller/activar_producto/$1';
$route['productos_modifica/(:num)'] = 'producto_controller/muestra_modificar/$1';
$route['verifico_modificaproducto/(:num)'] = 'producto_controller/modificar_producto/$1';
$route['verDetalle/(:num)'] = 'producto_controller/verDetalle/$1';
//productos

//carrito
$route['mi_carrito'] = 'carrito_controller/productos';
$route['carrito_agrega'] = 'carrito_controller/add';
$route['carrito_actualiza'] = 'carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';
$route['comprar'] = 'carrito_controller/muestra_compra';
$route['confirma_compra'] = 'carrito_controller/guarda_compra';
//carrito

//usuarios
$route['usuarios_todos'] = 'usuario_controller';
$route['usuarios_elimina/(:num)'] = 'usuario_controller/eliminar_usuario/$1';
$route['usuarios_modifica/(:num)'] = 'usuario_controller/muestra_modificarusuario/$1';
$route['verifico_modificausuario/(:num)'] = 'usuario_controller/modificar_usuario/$1';
$route['agregar_usuario'] = 'usuario_controller/form_agrega_usuario';
$route['verifico_nuevousuario'] = 'usuario_controller/agrega_usuario';
$route['muestra_usuarios_eliminados'] = 'usuario_controller/muestra_usuarios_eliminados';
$route['usuarios_activa/(:num)'] = 'usuario_controller/activar_usuario/$1';
$route['muestra_perfil/(:num)'] = 'usuario_controller/muestra_perfil/$1';
$route['modifica_perfil/(:num)'] = 'usuario_controller/muestra_modifica_perfil/$1';
$route['verifico_modifica_perfil/(:num)'] = 'usuario_controller/modificar_perfil/$1';
//usuarios

//Reportes
$route['misCompras'] = 'reporteVentasController/misCompras';
$route['misDetallesCompras/(:num)'] = 'reporteVentasController/misDetallesCompras/$1';
$route['verDetalleVenta/(:num)'] = 'reporteVentasController/verDetalleVenta/$1';
//reportes

//Consultas
$route['verConsultas'] = 'consultasController';
$route['verConsultasEliminadas'] = 'consultasController/muestra_eliminados';
$route['verifico_nuevaConsulta'] = 'consultasController/agrega_reclamo';
$route['consulta_elimina/(:num)'] = 'consultasController/consulta/$1';
//consultas

// login
$route['login'] = 'Welcome/login';
$route['admin'] = 'Welcome/admin';
$route['verificoUsuario'] = 'loginController';
$route['cerrar_sesion'] = 'loginController/cerrar_sesion';
// login

//Buscador
$route['busqueda'] = 'producto_controller/busqueda';
//buscador

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


