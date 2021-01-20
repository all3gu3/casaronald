<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Pais;
use App\Estado;
use App\Municipio;
use App\Familia;
use App\Role;
use App\Integrante;
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
        $this->call(FamiliaTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(IntegranteTableSeeder::class);
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


  class RoleTableSeeder extends Seeder {
    public function run(){
      Role::create(['role' => 'Hijo']);
      Role::create(['role' => 'Mamá']);
    }
}
class IntegranteTableSeeder extends Seeder {
    public function run(){
      Integrante::create(['familia_id' => '1', 'role_id' => '2', 'nombre' => 'Alejandra', 'apellidos' => 'Sánchez Martínez', 'es_paciente' => 0, 'fecha_nacimiento' => '1979-01-19 00:00:00']);
      Integrante::create(['familia_id' => '1', 'role_id' => '1', 'nombre' => 'Carlos Alejandro', 'apellidos' => 'García Sánchez', 'es_paciente' => 1, 'fecha_nacimiento' => '2007-05-20 00:00:00']);
    }
}
class FamiliaTableSeeder extends Seeder {
  public function run(){
    Familia::create(['qr' => 'A1B2C3', 'municipio_id' => '1', 'estado_id' => '12', 'pais_id' => '1']);
    Familia::create(['qr' => 'A1F2C3', 'municipio_id' => '5', 'estado_id' => '12', 'pais_id' => '1']);
    Familia::create(['qr' => 'A1B2X3', 'municipio_id' => '7', 'estado_id' => '12', 'pais_id' => '1']);
    Familia::create(['qr' => 'A1B1C5', 'municipio_id' => '8', 'estado_id' => '12', 'pais_id' => '1']);
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