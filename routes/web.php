<?php

use App\producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});
//ruta de arreglos
//multidimensiones
Route::get('arreglosm',function(){ 
 $paises=[ "colombia"=> ["capital"=> "bogota",
                        "peso"=>"peso",
                        "poblacion"=>50,
                        "ciudades" =>["cali", 
                                        "medellin",
                                        "Bogota"],],
            "peru"=> ["capital"=> "lima",
                        "peso"=>"sol",
                        "poblacion"=>32,
                        "ciudades" => ["Arequipa",
                                        "Iquitos",
                                        "Piura"  ],],
            "bolivia"=> ["capital"=> "la paz",
                        "peso"=>"bolivariano",
                         "poblacion"=>11 ,
                         "ciudades" =>["El Alto",
                                        "Oruro",
                                        "Sucre"],]];
     return view ('paises')
        ->with('paises' , $paises);
});            
            //echo"<pre>";
    //var_dump($paises);
    //echo"</pre>";
    //recorrrer el arreglo de paises
    //foreach($paises as $pais => $informacion){
        //echo"<h1>$pais:</h1>";
        //foreach($informacion as $clave=> $valor){
            //echo "$clave: $valor"."<br/>";
       // }
        //echo $informacion["capital"]."<br/>";
        //echo"<hr/>";
    //}
//});

route::get("pruebaprod", function(){
//inserta producto
$p = new producto();
//crear atributo
$p->nombre = 'bicicleta';
$p->valor_unitario = 450.897;
//guardar en db:
$p->save();
});

route::get("nuevoproducto",function(){
//mostrar formulario a guardar:
return view('producto.crear');

});


route::post("guardarproducto",function(){
    //echo"<pre>";
      //  vard_dump($_POST);
    //echo"</pre>";
$p = new producto();
$p->nombre = $_POST["nombre"];
$p->valor_unitario = $_POST["valor"];
$p->save();
echo"Exito Producto guardado";
});