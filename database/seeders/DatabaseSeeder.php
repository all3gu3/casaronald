<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Pais;
use App\Estado;
use App\Municipio;
use App\ClasificacionSocial;
use App\EdoSalud;
use App\Escolaridad;
use App\Hospital;
use App\Ocupacion;
use App\Parentesco;
use App\SalarioMinimo;
use App\TipoDieta;
use App\TipoNinio;
use App\TipoTratamiento;
use App\TrabajadorSocial;
use App\Zona;
use App\Tratamiento;

use App\Nino;
use App\Acompanante;
use App\RegistroOperativo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(MunicipioTableSeeder::class);
        $this->call(ClasificacionSocialTableSeeder::class);
        $this->call(EdoSaludTableSeeder::class);
        $this->call(EscolaridadTableSeeder::class);
        $this->call(HospitalTableSeeder::class);
        $this->call(OcupacionTableSeeder::class);
        $this->call(ParentescoTableSeeder::class);
        $this->call(SalarioMinimoTableSeeder::class);
        $this->call(TipoDietaTableSeeder::class);
        $this->call(TipoNinioTableSeeder::class);
        $this->call(TipoTratamientoTableSeeder::class);
        $this->call(TrabajadorSocialTableSeeder::class);
        $this->call(ZonaTableSeeder::class);
        $this->call(TratamientoTableSeeder::class);

        $this->call(NinoTableSeeder::class);
        $this->call(AcompananteTableSeeder::class);
        $this->call(RegistroOperativoTableSeeder::class);
        $this->command->info("Semilla plantada");
    }
}

class PaisTableSeeder extends Seeder {
    public function run(){
      Pais::create(['pais' => 'México']);
      Pais::create(['pais' => 'Belice']);
      Pais::create(['pais' => 'Guatemala']);
    }
}
Class EstadoTableSeeder extends Seeder {
    public function run(){        
        Estado::create(['pais_id' => '1', 'estado' => 'Aguascalientes']);
        Estado::create(['pais_id' => '1', 'estado' => 'Baja California']);
        Estado::create(['pais_id' => '1', 'estado' => 'Baja California Sur']);
        Estado::create(['pais_id' => '1', 'estado' => 'Campeche']);
        Estado::create(['pais_id' => '1', 'estado' => 'Coahuila de Zaragoza']);
        Estado::create(['pais_id' => '1', 'estado' => 'Colima']);
        Estado::create(['pais_id' => '1', 'estado' => 'Chiapas']);
        Estado::create(['pais_id' => '1', 'estado' => 'Chihuahua']);
        Estado::create(['pais_id' => '1', 'estado' => 'Distrito Federal']);
        Estado::create(['pais_id' => '1', 'estado' => 'Durango']);
        Estado::create(['pais_id' => '1', 'estado' => 'Guanajuato']);
        Estado::create(['pais_id' => '1', 'estado' => 'Guerrero']);
        Estado::create(['pais_id' => '1', 'estado' => 'Hidalgo']);
        Estado::create(['pais_id' => '1', 'estado' => 'Jalisco']);
        Estado::create(['pais_id' => '1', 'estado' => 'México']);
        Estado::create(['pais_id' => '1', 'estado' => 'Michoacán de Ocampo']);
        Estado::create(['pais_id' => '1', 'estado' => 'Morelos']);
        Estado::create(['pais_id' => '1', 'estado' => 'Nayarit']);
        Estado::create(['pais_id' => '1', 'estado' => 'Nuevo León']);
        Estado::create(['pais_id' => '1', 'estado' => 'Oaxaca de Juárez']);
        Estado::create(['pais_id' => '1', 'estado' => 'Puebla']);
        Estado::create(['pais_id' => '1', 'estado' => 'Querétaro']);
        Estado::create(['pais_id' => '1', 'estado' => 'Quintana Roo']);
        Estado::create(['pais_id' => '1', 'estado' => 'San Luis Potosí']);
        Estado::create(['pais_id' => '1', 'estado' => 'Sinaloa']);
        Estado::create(['pais_id' => '1', 'estado' => 'Sonora']);
        Estado::create(['pais_id' => '1', 'estado' => 'Tabasco']);
        Estado::create(['pais_id' => '1', 'estado' => 'Tamaulipas']);
        Estado::create(['pais_id' => '1', 'estado' => 'Tlaxcala']);
        Estado::create(['pais_id' => '1', 'estado' => 'Veracruz de Ignacio de la Llave']);
        Estado::create(['pais_id' => '1', 'estado' => 'Yucatán']);
        Estado::create(['pais_id' => '1', 'estado' => 'Zacatecas']);
    }
}
class MunicipioTableSeeder extends Seeder {
    public function run(){
        Municipio::create(['estado_id' => 12, 'municipio' => 'Acapulco de Juárez']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Ahuacuotzingo']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Ajuchitlán del Progreso']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Alcozauca de Guerrero']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Alpoyeca']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Apaxtla']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Arcelia']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Atenango del Río']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Atlamajalcingo del Monte']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Atlixtac']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Atoyac de Álvarez']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Ayutla de los Libres']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Azoyú']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Benito Juárez']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Buenavista de Cuéllar']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Coahuayutla de José María Izazaga']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cocula']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Copala']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Copalillo']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Copanatoyac']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Coyuca de Benítez']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Coyuca de Catalán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cuajinicuilapa']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cualác']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cuautepec']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cuetzala del Progreso']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cutzamala de Pinzón']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Chilapa de Álvarez']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Chilpancingo de los Bravo']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Florencio Villarreal']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'General Canuto A. Neri']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'General Heliodoro Castillo']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Huamuxtitlán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Huitzuco de los Figueroa']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Iguala de la Independencia']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Igualapa']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Ixcateopan de Cuauhtémoc']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Zihuatanejo de Azueta']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Juan R. Escudero']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Leonardo Bravo']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Malinaltepec']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Mártir de Cuilapan']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Metlatónoc']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Mochitlán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Olinalá']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Ometepec']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Pedro Ascencio Alquisiras']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Petatlán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Pilcaya']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Pungarabato']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Quechultenango']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'San Luis Acatlán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'San Marcos']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'San Miguel Totolapan']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Taxco de Alarcón']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tecoanapa']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Técpan de Galeana']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Teloloapan']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tepecoacuilco de Trujano']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tetipac']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tixtla de Guerrero']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tlacoachistlahuaca']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tlacoapa']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tlalchapa']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tlalixtaquilla de Maldonado']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tlapa de Comonfort']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Tlapehuala']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'La Unión de Isidoro Montes de Oca']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Xalpatláhuac']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Xochihuehuetlán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Xochistlahuaca']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Zapotitlán Tablas']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Zirándaro']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Zitlala']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Eduardo Neri']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Acatepec']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Marquelia']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Cochoapa el Grande']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'José Joaquín de Herrera']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Juchitán']);
        Municipio::create(['estado_id' => 12, 'municipio' => 'Iliatenco']);
    }
  }

class ClasificacionSocialTableSeeder extends Seeder {
  public function run(){
    ClasificacionSocial::create(['clasificacion_social' => '1']);
    ClasificacionSocial::create(['clasificacion_social' => '2']);
    ClasificacionSocial::create(['clasificacion_social' => '3']);
    ClasificacionSocial::create(['clasificacion_social' => '4']);
    ClasificacionSocial::create(['clasificacion_social' => '5']);
    ClasificacionSocial::create(['clasificacion_social' => '6']);
    ClasificacionSocial::create(['clasificacion_social' => 'x1']);
  }
}
class EdoSaludTableSeeder extends Seeder {
  public function run(){
    EdoSalud::create(['edo_salud' => 'Sano']);
    EdoSalud::create(['edo_salud' => 'En tratamiento']);
    EdoSalud::create(['edo_salud' => 'Enfermo']);
  }
}
class EscolaridadTableSeeder extends Seeder {
  public function run(){
    Escolaridad::create(['escolaridad' => 'Sin Escuela']);
    Escolaridad::create(['escolaridad' => 'Maternal']);
    Escolaridad::create(['escolaridad' => 'Kinder']);
    Escolaridad::create(['escolaridad' => 'Primaria']);
    Escolaridad::create(['escolaridad' => 'Secundaria']);
    Escolaridad::create(['escolaridad' => 'Preparatoria/Bachiller']);
    Escolaridad::create(['escolaridad' => 'Carrera Técnica']);
    Escolaridad::create(['escolaridad' => 'Licenciatura']);
    Escolaridad::create(['escolaridad' => 'Maestría']);
    Escolaridad::create(['escolaridad' => 'Doctorado']);
    Escolaridad::create(['escolaridad' => 'Educación inicial']);
  }
}
class HospitalTableSeeder extends Seeder {
  public function run(){
    Hospital::create(['hospital' => 'CRIT']);
    Hospital::create(['hospital' => 'HNP']);
    Hospital::create(['hospital' => 'HGCH']);
    Hospital::create(['hospital' => 'HUP']);
    Hospital::create(['hospital' => 'HGN']);
    Hospital::create(['hospital' => 'HGS']);
    Hospital::create(['hospital' => 'HdlM']);
    Hospital::create(['hospital' => 'UQxP']);
    Hospital::create(['hospital' => 'TyO']);
    Hospital::create(['hospital' => 'HA CCR']);
    Hospital::create(['hospital' => 'HB']);
    Hospital::create(['hospital' => 'SEDIF']);
    Hospital::create(['hospital' => 'IMEX']);
    Hospital::create(['hospital' => 'IMSS Margarita']);
    Hospital::create(['hospital' => 'Fundación AMS']);
    Hospital::create(['hospital' => 'Cruz Roja Puebla']);
    Hospital::create(['hospital' => 'Torres Med. Ang.']);
  }
}
class OcupacionTableSeeder extends Seeder {
  public function run(){
    Ocupacion::create(['ocupacion' => 'Desempleado']);
    Ocupacion::create(['ocupacion' => 'Labores del Hogar']);
    Ocupacion::create(['ocupacion' => 'Empleado']);
    Ocupacion::create(['ocupacion' => 'Profesionista']);
    Ocupacion::create(['ocupacion' => 'Plomero']);
    Ocupacion::create(['ocupacion' => 'Albañil']);
    Ocupacion::create(['ocupacion' => 'Chofer']);
    Ocupacion::create(['ocupacion' => 'Sirvienta']);
    Ocupacion::create(['ocupacion' => 'Campesino']);
    Ocupacion::create(['ocupacion' => 'Taxista']);
  }
}
class ParentescoTableSeeder extends Seeder {
  public function run(){
    Parentesco::create(['parentesco' => 'Padre']);
    Parentesco::create(['parentesco' => 'Madre']);
    Parentesco::create(['parentesco' => 'Abuelo']);
    Parentesco::create(['parentesco' => 'Abuela']);
    Parentesco::create(['parentesco' => 'Tia']);
    Parentesco::create(['parentesco' => 'Tio']);
    Parentesco::create(['parentesco' => 'Hermano']);
    Parentesco::create(['parentesco' => 'Hermana']);
    Parentesco::create(['parentesco' => 'Primo']);
    Parentesco::create(['parentesco' => 'Prima']);
    Parentesco::create(['parentesco' => 'Cuñada']);
    Parentesco::create(['parentesco' => 'Cuñado']);
    Parentesco::create(['parentesco' => 'Sin Parentesco']);
    Parentesco::create(['parentesco' => 'Tutor']);

  }
}
class SalarioMinimoTableSeeder extends Seeder {
  public function run(){
    SalarioMinimo::create(['salario_minimo' => '< 1']);
    SalarioMinimo::create(['salario_minimo' => '1 a 2']);
    SalarioMinimo::create(['salario_minimo' => '> 2']);
    SalarioMinimo::create(['salario_minimo' => 'NO SPEC EN EXCEL']);
    SalarioMinimo::create(['salario_minimo' => 'NO SPEC EN EXCEL']);


  }
}
class TipoDietaTableSeeder extends Seeder {
  public function run(){
    TipoDieta::create(['tipo_dieta' => 'Normal']);
    TipoDieta::create(['tipo_dieta' => 'Blanda']);
    TipoDieta::create(['tipo_dieta' => 'Lactante']);
    TipoDieta::create(['tipo_dieta' => 'Papilla']);
    TipoDieta::create(['tipo_dieta' => 'Renal']);
    TipoDieta::create(['tipo_dieta' => 'Especial']);
    TipoDieta::create(['tipo_dieta' => 'Restringida']);

  }
}
class TipoNinioTableSeeder extends Seeder {
  public function run(){
    TipoNinio::create(['tipo_ninio' => 'En casa']);
    TipoNinio::create(['tipo_ninio' => 'Hospitalizado']);

  }
}
class TipoTratamientoTableSeeder extends Seeder {
  public function run(){
    TipoTratamiento::create(['tipo_tratamiento' => 'Terapia']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Tratamiento']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Estudios de Laboratorio']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Valoración Médica']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Estudios de Gabinete']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Rehabilitación']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Consulta Externa']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Cirugía']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Observación - Urgencias']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Pre-Hospitalización']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Terapia Intensiva']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Post-Hospitalización']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Hospitalización']);
    TipoTratamiento::create(['tipo_tratamiento' => 'Otro']);
  }
}
class TrabajadorSocialTableSeeder extends Seeder {
  public function run(){
    TrabajadorSocial::create(['trabajador_social' => 'Erika Beatriz Salgado Martínez']);
    TrabajadorSocial::create(['trabajador_social' => 'Sandra Domínguez Ugalde']);
    TrabajadorSocial::create(['trabajador_social' => 'Lizbeth Mendoza Medellin']);
    TrabajadorSocial::create(['trabajador_social' => 'Ma. del Carmen Campeche López']);
    TrabajadorSocial::create(['trabajador_social' => 'Alma Victoria Padilla Carmona']);
    TrabajadorSocial::create(['trabajador_social' => 'Patricia Coyotl CoayaRRR']);
    TrabajadorSocial::create(['trabajador_social' => 'Laura Lara Zenteno']);
    TrabajadorSocial::create(['trabajador_social' => 'Mónica Islas Martínez']);
    TrabajadorSocial::create(['trabajador_social' => 'Ma. Del Rayo Pacheco Briones']);
    TrabajadorSocial::create(['trabajador_social' => 'Esmeralda Reyes Luna']);
    TrabajadorSocial::create(['trabajador_social' => 'Ma. Lucrecia Flores']);
    TrabajadorSocial::create(['trabajador_social' => 'Diana Jimenez Gonzaga']);
    TrabajadorSocial::create(['trabajador_social' => 'Veronica del Carmen Roque Perez']);
    TrabajadorSocial::create(['trabajador_social' => 'Elia Aguila M.']);
    TrabajadorSocial::create(['trabajador_social' => 'Lilia Serrano Mendez']);
    TrabajadorSocial::create(['trabajador_social' => 'Evelyn Juarez Morales']);
    TrabajadorSocial::create(['trabajador_social' => 'Beatriz Robles Fragoso']);
    TrabajadorSocial::create(['trabajador_social' => 'Beatriz Pérez Aponte']);
    TrabajadorSocial::create(['trabajador_social' => 'Judith Zepeda Arrieta']);
    TrabajadorSocial::create(['trabajador_social' => 'Rocío Castilla García']);
    TrabajadorSocial::create(['trabajador_social' => 'Aurora Castillo Sánchez']);
    TrabajadorSocial::create(['trabajador_social' => 'Minerva Aguilar Torres']);
    TrabajadorSocial::create(['trabajador_social' => 'Edith Martínez Otiz']);
    TrabajadorSocial::create(['trabajador_social' => 'Monserrat Absalón Hernández']);
    TrabajadorSocial::create(['trabajador_social' => 'Liliana Pazos osuna OS']);
    TrabajadorSocial::create(['trabajador_social' => 'Ma. Del Carmen Tapia G.']);
    TrabajadorSocial::create(['trabajador_social' => 'Anahí Zamora Tehumitzi']);
    TrabajadorSocial::create(['trabajador_social' => 'Veronica Vázquez Arellano']);
    TrabajadorSocial::create(['trabajador_social' => 'Karina Ramirez Benitez']);
    TrabajadorSocial::create(['trabajador_social' => 'Monserrat Flores Márquez']);
    TrabajadorSocial::create(['trabajador_social' => 'Maricela Hernández Pérez']);
    TrabajadorSocial::create(['trabajador_social' => 'María Lucrecia Flores Hernández']);
    TrabajadorSocial::create(['trabajador_social' => 'Susana Alcantara Xocoyotl']);
    TrabajadorSocial::create(['trabajador_social' => 'Veronica Domínguez Hernández']);
    TrabajadorSocial::create(['trabajador_social' => 'Luz María Najera ']);
    TrabajadorSocial::create(['trabajador_social' => 'Adriana A. Duran Lezama']);
    TrabajadorSocial::create(['trabajador_social' => 'Claudia Casiano Urrutia']);
    TrabajadorSocial::create(['trabajador_social' => 'Araceli Pérez Sosa']);
    TrabajadorSocial::create(['trabajador_social' => 'Norma Patricia Saldivar Altilano']);
    TrabajadorSocial::create(['trabajador_social' => 'Raúl Pérez De La Cruz']);
    TrabajadorSocial::create(['trabajador_social' => 'Jessica Bolaños Frias']);
    TrabajadorSocial::create(['trabajador_social' => 'Patricia Saldivar Atilano']);
    TrabajadorSocial::create(['trabajador_social' => 'Wz Nájera']);
    TrabajadorSocial::create(['trabajador_social' => 'Alexis Monsalve del Valle']);
    TrabajadorSocial::create(['trabajador_social' => 'Martha Nelly Martínez Hdz.']);
    TrabajadorSocial::create(['trabajador_social' => 'Magali Muñoz Vega']);
    TrabajadorSocial::create(['trabajador_social' => 'Nelly Martinez']);
    TrabajadorSocial::create(['trabajador_social' => 'Verónica Del Carmen Roque ']);
    TrabajadorSocial::create(['trabajador_social' => 'Brayan Mejia']);
    TrabajadorSocial::create(['trabajador_social' => 'Lizbeth Gómez Calderón']);
    TrabajadorSocial::create(['trabajador_social' => 'Silvia María Sánchez Rivera']);
    TrabajadorSocial::create(['trabajador_social' => 'Aurora Huerta Cuautle']);
    TrabajadorSocial::create(['trabajador_social' => 'Dr. Roberto Díaz C']);
    TrabajadorSocial::create(['trabajador_social' => 'Yessica Lucero Sandoval Navarro']);
    TrabajadorSocial::create(['trabajador_social' => 'María Del Rosario Saavedra Lozano']);
    TrabajadorSocial::create(['trabajador_social' => 'María Isabel López Pérez']);
    TrabajadorSocial::create(['trabajador_social' => 'Alma Delia Castillo D.']);
    TrabajadorSocial::create(['trabajador_social' => 'Ana Lilia Bala Flores']);
    TrabajadorSocial::create(['trabajador_social' => 'Alejandro Mendez Silva']);
    TrabajadorSocial::create(['trabajador_social' => 'Rosa María M. Cardozo']);
    TrabajadorSocial::create(['trabajador_social' => 'Ana Torres Domínguez']);
    TrabajadorSocial::create(['trabajador_social' => 'Paola Barrientos']);
    TrabajadorSocial::create(['trabajador_social' => 'Abril Tello Lopez']);
    TrabajadorSocial::create(['trabajador_social' => 'Mónica Polanco']);
    TrabajadorSocial::create(['trabajador_social' => 'Reyna Petlacalco Mancilla']);
    TrabajadorSocial::create(['trabajador_social' => 'Dr. Ivonn Benítez']);
  }
}

class ZonaTableSeeder extends Seeder {
  public function run(){
    Zona::create(['zona' => 'Rural']);
    Zona::create(['zona' => 'Sub-urbana']);
    Zona::create(['zona' => 'Urbana']);
  }
}

class TratamientoTableSeeder extends Seeder {
  public function run(){
    Tratamiento::create(["nombre"=> "Terapia"]);    
		Tratamiento::create(["nombre"=> "Tratamiento"]);    
		Tratamiento::create(["nombre"=> "Estudios de laboratorio"]);    
		Tratamiento::create(["nombre"=> "Valoracion Medica"]);    
		Tratamiento::create(["nombre"=> "Estudios de Gabinete"]);    
		Tratamiento::create(["nombre"=> "Rehabilitacion"]);
		Tratamiento::create(["nombre"=> "Consulta externa"]);    
		Tratamiento::create(["nombre"=> "Cirugia"]); 
		Tratamiento::create(["nombre"=> "Observacion-Urgencias"]);    
		Tratamiento::create(["nombre"=> "Pre-Hospitalizacion"]);    
		Tratamiento::create(["nombre"=> "Hospitalizacion"]);
		Tratamiento::create(["nombre"=> "Terapia UCIN"]);    
		Tratamiento::create(["nombre"=> "Terapia T int"]);    
		Tratamiento::create(["nombre"=> "Terapia UCIA"]);    
		Tratamiento::create(["nombre"=> "Post-Hospitalizacion"]);    
		Tratamiento::create(["nombre"=> "Otro"]);
  }
}

class NinoTableSeeder extends Seeder {
  public function run(){
    Nino::create(['qr' => 'A1B2C3', 'nombre' => 'Ronald', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Uno',  'fecha_nacimiento' => '2007-01-19 00:00:00', 'edad'=>'13', 'sexo'=>'M', 'calle'=>'Jacarandas', 'numero'=>'15', 'localidad'=>'San Juan de las Manzanas', 'cp'=>'66278', 'primer_telefono'=>'7777777777', 'segundo_telefono'=>'8888888888', 'dialecto'=>'Ninguno', 'escolaridad_id' => '1', 'clasificacion_social_id' => '1', 'salario_minimo_id' => '1', 'zona_id' => '1',  'municipio' => 'Acatzingo', 'estado_id' => '12', 'pais_id' => '1', 'trabajador_social_id' => '1', 'tipo_dieta_id' => '2', 'hospital_id' => '1']);
    Nino::create(['qr' => 'J1B2X7', 'nombre' => 'Ronald', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Dos',  'fecha_nacimiento' => '2008-01-19 00:00:00', 'edad'=>'12', 'sexo'=>'M', 'calle'=>'Tabachines', 'numero'=>'16', 'localidad'=>'San Juan de las Peras', 'cp'=>'66486', 'primer_telefono'=>'7777777777', 'segundo_telefono'=>'8888888888', 'dialecto'=>'Ninguno', 'escolaridad_id' => '2', 'clasificacion_social_id' => '2', 'salario_minimo_id' => '2', 'zona_id' => '2',  'municipio' => 'Acteopan', 'estado_id' => '12', 'pais_id' => '1', 'trabajador_social_id' => '2', 'tipo_dieta_id' => '1', 'hospital_id' => '3']);
    Nino::create(['qr' => 'B1S2C3', 'nombre' => 'Ronald', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Tres',  'fecha_nacimiento' => '2009-01-19 00:00:00', 'edad'=>'11', 'sexo'=>'F', 'calle'=>'Primaveras', 'numero'=>'17', 'localidad'=>'San Juan de las Tunas', 'cp'=>'66147', 'primer_telefono'=>'7777777777', 'segundo_telefono'=>'8888888888', 'dialecto'=>'Maya', 'escolaridad_id' => '3', 'clasificacion_social_id' => '2', 'salario_minimo_id' => '2', 'zona_id' => '1',  'municipio' => 'Chichiquila', 'estado_id' => '12', 'pais_id' => '1', 'trabajador_social_id' => '1', 'tipo_dieta_id' => '2', 'hospital_id' => '1']);
    Nino::create(['qr' => 'A9B215', 'nombre' => 'Ronald', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Cuatro',  'fecha_nacimiento' => '2010-01-19 00:00:00', 'edad'=>'10', 'sexo'=>'M', 'calle'=>'Bugambilias', 'numero'=>'18', 'localidad'=>'San Juan de los Duraznos', 'cp'=>'66299', 'primer_telefono'=>'7777777777', 'segundo_telefono'=>'8888888888', 'dialecto'=>'Ninguno', 'escolaridad_id' => '1', 'clasificacion_social_id' => '1', 'salario_minimo_id' => '1', 'zona_id' => '2',  'municipio' => 'Epatlán', 'estado_id' => '12', 'pais_id' => '1', 'trabajador_social_id' => '3', 'tipo_dieta_id' => '2', 'hospital_id' => '4']);
    
  }
}

class AcompananteTableSeeder extends Seeder {
  public function run(){
    Acompanante::create(['nombre' => 'Ronaldiño', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Uno', 'edad'=>'34', 'sexo'=>'F', 'parentesco_id'=> 2, 'escolaridad_id'=> 1, 'nino_id'=> 1, 'edo_salud_id'=> 1, 'ocupacion_id'=> 2, 'trabaja'=> 1, 'licencia_goce_sueldo'=> 1, 'seguro_medico'=> 1, 'casa_propia'=> 0, 'asistencia_financiera'=> 0, 'renta_mensualidad'=> 2000, 'dependientes_economicos'=> 3, 'ingreso_mensual'=> 5000, 'fecha_registro' => '2020-01-23 00:00:00']);
    Acompanante::create(['nombre' => 'Ronaldiño', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Dos', 'edad'=>'45', 'sexo'=>'F', 'parentesco_id'=> 2, 'escolaridad_id'=> 2, 'nino_id'=> 1, 'edo_salud_id'=> 1, 'ocupacion_id'=> 2, 'trabaja'=> 1, 'licencia_goce_sueldo'=> 1, 'seguro_medico'=> 1, 'casa_propia'=> 0, 'asistencia_financiera'=> 1, 'renta_mensualidad'=> 2500, 'dependientes_economicos'=> 4, 'ingreso_mensual'=> 4500 , 'fecha_registro' => '2020-01-23 00:00:00']);
    Acompanante::create(['nombre' => 'Ronaldiño', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Tres', 'edad'=>'51', 'sexo'=>'F', 'parentesco_id'=> 4, 'escolaridad_id'=> 4, 'nino_id'=> 2, 'edo_salud_id'=> 1, 'ocupacion_id'=> 3, 'trabaja'=> 1, 'licencia_goce_sueldo'=> 1, 'seguro_medico'=> 1, 'casa_propia'=> 1, 'asistencia_financiera'=> 0, 'renta_mensualidad'=> 6000, 'dependientes_economicos'=> 7, 'ingreso_mensual'=> 3900, 'fecha_registro' => '2020-01-23 00:00:00']);
    Acompanante::create(['nombre' => 'Ronaldiño', 'apellido_paterno' => 'Mc', 'apellido_materno' => 'Cuatro', 'edad'=>'29', 'sexo'=>'M', 'parentesco_id'=> 1, 'escolaridad_id'=> 1, 'nino_id'=> 3, 'edo_salud_id'=> 1, 'ocupacion_id'=> 1, 'trabaja'=> 0, 'licencia_goce_sueldo'=> 1, 'seguro_medico'=> 1, 'casa_propia'=> 1, 'asistencia_financiera'=> 1, 'renta_mensualidad'=> 1700, 'dependientes_economicos'=> 1, 'ingreso_mensual'=> 5340, 'fecha_registro' => '2020-01-23 00:00:00']);
  }
}

class RegistroOperativoTableSeeder extends Seeder {
  public function run(){
    RegistroOperativo::create(['nino_id' => 1, 'hospital_id' => 1, 'tipo_ninio_id' => 1, 'tipo_tratamiento_id' => 1, 'tipo_dieta_id' => 1, 'trabajador_social_id' => 1, 'fecha_ingreso' => '2020-01-19 00:00:00', 'fecha_egreso' => '2020-01-23 00:00:00', 'medico_atiende' => "Dr. Ronald McDonald", 'diagnostico' => 'Síndrome de Regresión Caudal', 'reingreso' => 1, 'ninos_adicionales' => 0, 'habitacion' => 3, 'observaciones' => "Primer reingreso, nada más que decir"]);
    RegistroOperativo::create(['nino_id' => 2, 'hospital_id' => 4, 'tipo_ninio_id' => 1, 'tipo_tratamiento_id' => 1, 'tipo_dieta_id' => 3, 'trabajador_social_id' => 5, 'fecha_ingreso' => '2020-01-19 00:00:00', 'fecha_egreso' => '2020-01-20 00:00:00', 'medico_atiende' => "Dr. Ronald McDonald", 'diagnostico' => 'Hidrocefalia', 'reingreso' => 1, 'ninos_adicionales' => 0, 'habitacion' => 1]);
  }
}