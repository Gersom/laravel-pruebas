<?php

use Illuminate\Database\Seeder;
use App\Entities\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
          'name'        => 'EDteam',
          'slogan'      => 'Somos la única propuesta en español con un enfoque orientado a proyectos',
          'description' => 'EDteam es la mejor opción en español para aprender tecnología, programación y diseño. Nuestros cursos son preparados minuciosamente con meses de anticipación y te llevan desde cero hasta tu primer proyecto.Entre tantas opciones que te prometen convertirte en profesional y terminan enseñando poco (y mal), EDteam es la única propuesta con profesores reales, temarios detallados y un cuidado obsesivo por una enseñanza correcta.',
        ]);

        Company::create([
          'name'        => 'Código Facilito',
          'slogan'      => 'CódigoFacilito - Aprende a Programar desde tu casa hoy',
          'description' => 'Cursos de programación en desarrollo web, frontend, backend, apps para Android, iOS y mucho más. Aprende desde tu casa.',
        ]);
    }
}
