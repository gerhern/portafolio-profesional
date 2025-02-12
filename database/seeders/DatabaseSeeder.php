<?php

namespace Database\Seeders;

use App\Models\catTipoHabilidad;
use App\Models\Habilidad;
use App\Models\Proyecto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Proyecto::create([
            'nombre' => 'Control de activos',
            'descripcion' => 'Aplicación desarrollada para el manejo de equipos y accesorios de cómputo con el fin de llevar un correcto control de activos.</br></br>
            El objetivo de esta aplicación fue mantener un control interno de activos vinculando un usuario con equipos de préstamo de uso empresarial, sin embargo, fue evolucionando constantemente,
             logrando tener entre sus características:</br></br>
            Control de usuarios de la aplicación con sistema de privilegios (administradores)<br><br>
            Préstamo de equipos y accesorios de cómputo </br>
            Emisión de cartas responsivas en formato PDF</br>
            Generación de reportes de ubicación, mantenimiento, tipo y estatus de activos</br>
            Manejo de merma(scrap)</br>
            Esta aplicación fue desarrollada en colaboración con LMRodriguez, compañero encargado de realizar diseño FrontEnd.',
            'descripcion_corta' => 'Administración de activos y préstamos de equipos y accesorios de cómputo empresarial',
            'url_imagen' => 'dorothy.jpeg',
            'created_at' => '2022-09-08 12:00:00',
        ]);

        Proyecto::create([
            'nombre' => 'Calculadora de emisiones',
            'descripcion' => 'Calculadora de emisiones de carbono, se trata de un sitio web dedicado a la concientización de la huella de carbono y las posibles formas de compensarla

e ideas de ahorro de energía así como el uso de medios de transporte alternativos.<br><br>
La calculadora desarrollada te permite calcular tu huella de carbono anual y su equivalente en diferentes especies de árboles.<br><br>
Una de las funciones de este proyecto es que permite a los usuarios visualizar un reporte del uso promedio de esta calculadora por lo que es posible conocer un aproximado de la huella de carbono de producida en México',
            'descripcion_corta' => 'Evaluación y compensación de emisiones de carbono por medio de transporte.',
            'url_imagen' => 'calculadora.jpeg',
            'created_at'        =>  '2021-09-08 12:00:00'
        ]);

        Proyecto::create([
            'nombre' => 'Credencialización',
            'descripcion_corta' => 'Sistema de manejo y emisión de credenciales de servidores públicos de la Ciudad de México.',
            'descripcion'       => 'Credencialización es un sistema que maneja los registros de todos los funcionarios públicos de la CDMX.<br><br> Este sistema es bastante robusto debido a que cuenta con una variedad de funciones entre las que destacan:<br>-Manejo de roles de usuario.<br>-Creación y emisión de credenciales.<br>-Fechas de vigencia para las credenciales emitidas.<br>-Módulo de registros de entradas/salidas de visitantes a inmuebles gubernamentales.<br>-Registro verificación y validación de datos de usuarios.<br>-Carga y baja masiva de credenciales.<br><br>Este sistema se trata de un proyecto heredado el cual tras una revision de estructura y funciones se tomo la desición de comenzar en una serie de modificaciones como:<br>-Refactorización de funciones.<br>-Optimización de Query\'s,<br>-Creación de servicios de consulta.',
            'url_imagen' => 'credencializacion.jpg',
            'created_at'        =>  '2023-11-29 12:00:00'
        ]);




    }
}
