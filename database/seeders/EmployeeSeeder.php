<?php

namespace Database\Seeders;

use App\Models\Employee ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mockery\Undefined;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = 
        [
            [
                'p00' => '155718',
                'personal_id' => '11917242',
                'first_name' => 'JENBLUK',
                'second_name' => null,
                'first_surname' => 'VANEGAS',
                'second_surname' => 'GARCIA',
                'job_title_id' => 9,
                'uai_id' => 1,
                'phone' => '4126625907',
                'gmail' => 'jenblukvanegas@gmail.com',
                'email_cantv' => 'jvane01@cantv.com.ve',
                'profile_photo' => '155718.jpg',
              ],
              [
                'p00' => '155877',
                'personal_id' => '25604428',
                'first_name' => 'KATERINE',
                'second_name' => 'ENYERLI',
                'first_surname' => 'DALESSANDRO',
                'second_surname' => 'RODRIGUEZ',
                'job_title_id' => 1,
                'uai_id' => 1,
                'phone' => '4126625907',
                'gmail' => 'kdales01.uai@gmail.com',
                'email_cantv' => 'kdales01@cantv.com.ve',
                'profile_photo' => '155877.jpg',
              ],
              [
                'p00' => '210475',
                'personal_id' => '11488022',
                'first_name' => 'LEONARDO',
                'second_name' => 'ALBERTO',
                'first_surname' => 'APONTE',
                'second_surname' => 'RAMOS',
                'job_title_id' => 10,
                'uai_id' => 1,		
                'phone' => '4124905187',
                'gmail' => 'leonardoaponte781@gmail.com',
                'email_cantv' => 'lapont03@cantv.com.ve',
                'profile_photo' => '210475.jpg',
              ],
              [
                'p00' => '156286',
                'personal_id' => '10519206',
                'first_name' => 'MARTIN',
                'second_name' => 'HIPOLITO',
                'first_surname' => 'GONZALEZ',
                'second_surname' => 'CONTRERAS',
                'job_title_id' => 11,
                'uai_id' => 1,
                'phone' => '4265161189',
                'gmail' => 'mhgonzalez911@gmail.com',
                'email_cantv' => 'mgonza130@cantv.com.ve',
                'profile_photo' => '156286.jpg',
              ],
              [
                'p00' => '131466',
                'personal_id' => '3970276',
                'first_name' => 'MAGALY',
                'second_name' => 'CONCEPCION',
                'first_surname' => 'VARGAS',
                'second_surname' => null,
                'job_title_id' => 11,
                'uai_id' => 3,
                'phone' => '4166616633',
                'gmail' => 'mvarga04.uai@gmail.com',
                'email_cantv' => 'mvarga04@cantv.com.ve',
                'profile_photo' => '131466.jpg',
              ],
              [
                'p00' => '206620',
                'personal_id' => '6205113',
                'first_name' => 'JACQUELINE',
                'second_name' => 'EMILIA',
                'first_surname' => 'OLIVERA',
                'second_surname' => 'PARTIDAS',
                'job_title_id' => 7,
                'uai_id' => 9,
                'phone' => null,
                'gmail' => 'jolive02.uai@gmail.com',
                'email_cantv' => 'jolive02@cantv.com.ve',
                'profile_photo' => '206620.jpg',
              ],
              [
                'p00' => '124184',
                'personal_id' => '11966635',
                'first_name' => 'KEYLA',
                'second_name' => 'SOLEDAD',
                'first_surname' => 'PEREIRA',
                'second_surname' => 'VILLARROEL',
                'job_title_id' => 6,
                'uai_id' => 9,
                'phone' => '4265103485',
                'gmail' => 'kperei02.uai@gmail.com',
                'email_cantv' => 'kperei02.uai@gmail.com',
                'profile_photo' => '124184.jpg',
              ],
              [
                'p00' => '155919',	
                'personal_id' => '11195984',
                'first_name' => 'INDIRA',
                'second_name' => 'VIRGINIA',
                'first_surname' => 'UZCATEGUI',
                'second_surname' => 'GUZMAN',
                'job_title_id' => 4,
                'uai_id' => 9,
                'phone' => '4129245197',
                'gmail' => null,
                'email_cantv' => 'iuzcat01@cantv.com.ve',
                'profile_photo' => '155919.jpg',
              ],
              [
                'p00' => '156483',
                'personal_id' => '14276231',
                'first_name' => 'FRANKILN',
                'second_name' => 'ANTONIO',
                'first_surname' => 'RUIZ',
                'second_surname' => null,
                'job_title_id' => 4,
                'uai_id' => 7,
                'phone' => '4241357637',
                'gmail' => 'faruiz01.uai@gmail.com',
                'email_cantv' => 'fruiz01@cantv.com.ve',
                'profile_photo' => '156483.jpg',
              ],
              [
                'p00' => '155918',
                'personal_id' => '19294541',
                'first_name' => 'ISMAEL',
                'second_name' => 'ENRIQUE',
                'first_surname' => 'ARIAS',
                'second_surname' => 'CORDOBA',
                'job_title_id' => 5,
                'uai_id' => 7,
                'phone' => '4125678269',
                'gmail' => null,
                'email_cantv' => 'iarias01@cantv.com.ve',
                'profile_photo' => '155918.jpg',
              ],
              [
                'p00' => '132484',
                'personal_id' => '6721159',
                'first_name' => 'LUISA',
                'second_name' => 'ARGELIA',
                'first_surname' => 'ARIAS',
                'second_surname' => 'RIERA',
                'job_title_id' => 8,
                'uai_id' => 3,
                'phone' => '4166114416',
                'gmail' => null,
                'email_cantv' => 'larias02@cantv.com.ve',
                'profile_photo' => '132484.jpg',
              ],
              [
                'p00' => '155485',
                'personal_id' => '12831916',
                'first_name' => 'YUBISAY',
                'second_name' => 'DEL VALLE',
                'first_surname' => 'SALAS',
                'second_surname' => 'PEREZ',
                'job_title_id' => 12,
                'uai_id' => 3,
                'phone' => '4129953995',
                'gmail' => null,
                'email_cantv' => 'ysalas03@cantv.com.ve',
                'profile_photo' => '155485.jpg',
              ],
              [
                'p00' => '150389',
                'personal_id' => '19512503',
                'first_name' => 'JOHANNA',
                'second_name' => 'LISBETH',
                'first_surname' => 'MEJIAS',
                'second_surname' => 'HERNANDEZ',
                'job_title_id' => 7,
                'uai_id' => 6,
                'phone' => '4265338738',
                'gmail' => 'jmejia12.uai@gmail.com',
                'email_cantv' => 'jmejia12@cantv.com.ve',
                'profile_photo' => '150389.jpg',
              ],
              [
                'p00' => '155501',
                'personal_id' => '5223346',
                'first_name' => 'ELIZABETH',
                'second_name' => null,
                'first_surname' => 'PEREZ',
                'second_surname' => 'ARANGUREN',
                'job_title_id' => 4,
                'uai_id' => 6,
                'phone' => '4166531728',
                'gmail' => 'eperez.uai@gmail.com',
                'email_cantv' => 'eperez53@cantv.com.ve',
                'profile_photo' => '155501.jpg',
              ],
              [
                'p00' => '206397',
                'personal_id' => '10381685',
                'first_name' => 'ZENOBIO',
                'second_name' => null,
                'first_surname' => 'OROPEZA',
                'second_surname' => 'SALAZAR',
                'job_title_id' => 3,
                'uai_id' => 6,
                'phone' => '4166229474',
                'gmail' => 'zorope.uai@gmail.com',
                'email_cantv' => 'zorope@cantv.com.ve',
                'profile_photo' => '206397.jpg',
              ],[
                'p00' => '146196',
                'personal_id' => '10584414',
                'first_name' => 'MARIA',
                'second_name' => 'ANDREA',
                'first_surname' => 'SORATE',
                'second_surname' => 'DE VOLCANES',
                'job_title_id' => 7,
                'uai_id' => 5,
                'phone' => '4142582181',
                'gmail' => 'masorate01.uai@gmail.com',
                'email_cantv' => 'msorat01@cantv.com.ve',
                'profile_photo' => '146196.jpg',
              ],
              [
                'p00' => '155435',
                'personal_id' => '14008430',
                'first_name' => 'EDUARDO',
                'second_name' => 'JOSE',
                'first_surname' => 'CUMANA',
                'second_surname' => 'CUMANA',
                'job_title_id' => 4,
                'uai_id' => 5,
                'phone' => '4125771270',
                'gmail' => 'ecumana01.uai@gmail.com',
                'email_cantv' => 'ecuman01@cantv.com.ve',
                'profile_photo' => '155435.jpg',
              ],
              [
                'p00' => '149057',
                'personal_id' => '5969179',
                'first_name' => 'LUISANA',
                'second_name' => 'YASMIRA',
                'first_surname' => 'BARRETO',
                'second_surname' => 'QUIÑONES',
                'job_title_id' => 3,
                'uai_id' => 5,
                'phone' => '4241950669',
                'gmail' => 'lbarre04.uai@gmail.com',
                'email_cantv' => 'lbarret04@cantv.com.ve',
                'profile_photo' => '149057.jpg',
              ],
              [
                'p00' => '132129',
                'personal_id' => '6810760',
                'first_name' => 'SILVIA',
                'second_name' => 'ROSA',
                'first_surname' => 'VARGAS',
                'second_surname' => 'ORTIZ',
                'job_title_id' => 7,
                'uai_id' => 4,
                'phone' => '4166209208',
                'gmail' => 'svarga04.uai@gmail.com',
                'email_cantv' => 'svarga04@cantv.com.ve',
                'profile_photo' => '132129.jpg',
              ],
              [
                'p00' => '124502',
                'personal_id' => '10347228',
                'first_name' => 'JOSE',
                'second_name' => 'ENRIQUE',
                'first_surname' => 'VAZQUEZ',
                'second_surname' => 'BASTIDAS',
                'job_title_id' => 4,
                'uai_id' => 4,
                'phone' => '4166327610',
                'gmail' => 'jvazqu01.uai@gmail.com',
                'email_cantv' => 'jvazqu01@cantv.com.ve',
                'profile_photo' => '124502.jpg',
              ],
              [
                'p00' => '146236',
                'personal_id' => '13138186',
                'first_name' => 'MARIFRANCY',
                'second_name' => null,
                'first_surname' => 'FALCON',
                'second_surname' => 'OLIVAR',
                'job_title_id' => 4,
                'uai_id' => 4,
                'phone' => '4163054088',
                'gmail' => 'mariolivar.uai@gmail.com',
                'email_cantv' => 'mfalco01@cantv.com.ve',
                'profile_photo' => '146236.jpg',
              ],
              [
                'p00' => '155267',
                'personal_id' => '17300607'	,
                'first_name' => 'FRERYDA',
                'second_name' => 'MARIBELL',
                'first_surname' => 'BETANCOURT',
                'second_surname' => 'FELIX'	,
                'job_title_id' => 3,
                'uai_id' => 4,
                'phone' => '4143090015',
                'gmail' => 'fbetac.uai@gmail.com',
                'email_cantv' => 'fbetan03@cantv.com.ve',
                'profile_photo' => '155267.jpg',
              ],
              [
                'p00' => '149382',
                'personal_id' => '10054313',
                'first_name' => 'ANA',
                'second_name' => 'IVONNE',
                'first_surname' => 'ROJAS',
                'second_surname' => 'DE RAMOS',
                'job_title_id' => 2,
                'uai_id' => 4,
                'phone' => '4164583729',
                'gmail' => 'ivonnerojas07.uai@gmail.com',
                'email_cantv' => 'arojas28@cantv.com.ve',
                'profile_photo' => '149382.jpg',
              ],
              [
                'p00' => '156499',
                'personal_id' => '30769416',
                'first_name' => 'PIER',
                'second_name' => 'LUIGI',
                'first_surname' => 'BOLECH',
                'second_surname' => 'DIAZ',
                'job_title_id' => 2,
                'uai_id' => 4,
                'phone' => '4164583729',
                'gmail' => 'pbolec01.uai@gmail.com'	,
                'email_cantv' => 'pbolec01@cantv.com.ve',
                'profile_photo' => '156499.jpg',
              ],
              [
                'p00' => '156373',
                'personal_id' => '28563229',
                'first_name' => 'GEFERSON',
                'second_name' => 'LEONAIKER',
                'first_surname' => 'MORENO',
                'second_surname' => 'PALACIOS',
                'job_title_id' => 2,
                'uai_id' => 4,
                'phone' => '4129915401',
                'gmail' => 'gmoren02.uai@gmaill.com',
                'email_cantv' => 'gmoren02@cantv.com.ve',
                'profile_photo' => '156373.jpg',
              ],
              [
                'p00' => '134363',
                'personal_id' => '12398193',
                'first_name' => 'JENY',
                'second_name' => 'DEL VALLE',
                'first_surname' => 'RADA',
                'second_surname' => 'SALAZAR',
                'job_title_id' => 7,
                'uai_id' => 7,
                'phone' => '4166337594',
                'gmail' => 'jradas01.uai@gmail.com',
                'email_cantv' => 'jradas01@cantv.com.ve',
                'profile_photo' => '134363.jpg',
              ],
              [
                'p00' => '149070',
                'personal_id' => '6559279',
                'first_name' => 'JOSE',
                'second_name' => 'LUIS',
                'first_surname' => 'VILLEGAS',
                'second_surname' => 'HERRERA',
                'job_title_id' => 4,
                'uai_id' => 7,
                'phone' => '4149893742',
                'gmail' => 'jville12.uai@gmail.com',
                'email_cantv' => 'jville12@cantv.com.ve',
                'profile_photo' => '149070.jpg',
              ],
              [
                'p00' => '154423',
                'personal_id' => '14446916',
                'first_name' => 'ISMIR',
                'second_name' => 'ROSALIA',
                'first_surname' => 'RUMBOS',
                'second_surname' => 'AGUIAR',
                'job_title_id' => 4,
                'uai_id' => 7,
                'phone' => '4164022312',
                'gmail' => 'irumbos.uai@gmail.com',
                'email_cantv' => 'irumbo01@cantv.com.ve',
                'profile_photo' => '154423.jpg',
              ],
              [
                'p00' => '150770',
                'personal_id' => '14309185',
                'first_name' => 'YERLIN',
                'second_name' => 'LORENA',
                'first_surname' => 'CASTELLANOS',
                'second_surname' => 'RODRIGUEZ',
                'job_title_id' => 3,
                'uai_id' => 7,
                'phone' => null,
                'gmail' => null,
                'email_cantv' => 'ycaste01@cantv.com.ve',
                'profile_photo' => '',
              ],
              [
                'p00' => '150753',
                'personal_id' => '14157605',
                'first_name' => 'JOHAN',
                'second_name' => 'RAMON',
                'first_surname' => 'INFANTE',
                'second_surname' => 'VANEGAS',
                'job_title_id' => 3,
                'uai_id' => 7,
                'phone' => '4263188810',
                'gmail' => 'jinfan03.uai@gmail.com',
                'email_cantv' => 'jinfan03@cantv.com.ve',
                'profile_photo' => '150753.jpg',
              ],
              [
                'p00' => '149073',
                'personal_id' => '6548966',
                'first_name' => 'FLOR',
                'second_name' => 'YSMELDA',
                'first_surname' => 'SERRANO',
                'second_surname' => 'MENDOZA',
                'job_title_id' => 3,
                'uai_id' => 7,
                'phone' => '4262386802',
                'gmail' => 'sflory01.uai@gmail.com',
                'email_cantv' => 'sflory01@cantv.com.ve',
                'profile_photo' => '149073.jpg',
              ],
              [
                'p00' => '155005',
                'personal_id' => '14453673',
                'first_name' => 'RUTH',
                'second_name' => 'BELINDA',
                'first_surname' => 'GOMEZ',
                'second_surname' => 'GARCIA',
                'job_title_id' => 3,
                'uai_id' => 7,
                'phone' => '4263188810',
                'gmail' => 'rgome01.uai@gmail.com',
                'email_cantv' => 'rgome01@cantv.com.ve',
                'profile_photo' => '155005.jpg',
              ],
              [
                'p00' => '147987',
                'personal_id' => '6326725',
                'first_name' => 'MARIA NICOLINA',
                'second_name' => 'NELLA',
                'first_surname' => 'DE MARINIS',
                'second_surname' => 'BAGNOLI',
                'job_title_id' => 7,
                'uai_id' => 8,
                'phone' => '4241264891',
                'gmail' => 'mdemar02.uai@gmail.com',
                'email_cantv' => 'mdemar01@cantv.com.ve',
                'profile_photo' => '147987.jpg',
              ],
              [
                'p00' => '155892',
                'personal_id' => '14197937',
                'first_name' => 'ADRIANA',
                'second_name' => 'CRISTINA',
                'first_surname' => 'LINARES',
                'second_surname' => 'CASTILLO',
                'job_title_id' => 12,
                'uai_id' => 8,
                'phone' => '4148518981',
                'gmail' => 'adrianaclinaresc@gmail.com',
                'email_cantv' => 'alinar09@cantv.com.ve',
                'profile_photo' => '155892.jpg',
              ],
              [
                'p00' => '155909',
                'personal_id' => '15805516',
                'first_name' => 'RUBEN',
                'second_name' => 'DARIO',
                'first_surname' => 'TORRES',
                'second_surname' => 'DUQUE',
                'job_title_id' => 12,
                'uai_id' => 8,
                'phone' => '4142683382',
                'gmail' => 'rtorre26.uai@gmail.com',
                'email_cantv' => 'rtorre26@cantv.com.ve',
                'profile_photo' => '155909.jpg',
              ],
              [
                'p00' => '155901',
                'personal_id' => '15805515',
                'first_name' => 'BETHZABETH',
                'second_name' => 'NATHALIE',
                'first_surname' => 'ZAMBRANO',
                'second_surname' => 'MENDOZA',
                'job_title_id' => 12,
                'uai_id' => 8,
                'phone' => '4144543386',
                'gmail' => 'bzambr01.uai@gmail.com',
                'email_cantv' => 'bzambr01@cantv.com.ve',
                'profile_photo' => '155901.jpg',
              ],
              [
                'p00' => '156642',
                'personal_id' => '6901860',
                'first_name' => 'DOUGLAS',
                'second_name' => 'RAÚL',
                'first_surname' => 'SEQUERA',
                'second_surname' => 'SANTANA',
                'job_title_id' => 4,
                'uai_id' => 5,
                'phone' => '4149100645',
                'gmail' => 'barre04.uai@gmail.com',
                'email_cantv' => 'barre04@cantv.com.ve',
                'profile_photo' => '156642.jpg',
              ],
              [
                'p00' => '156560',
                'personal_id' => '3935574',
                'first_name' => 'LIGIA',
                'second_name' => null,
                'first_surname' => 'RAMIREZ',
                'second_surname' => 'RAMOS',
                'job_title_id' => 8,
                'uai_id' => 2,
                'phone' => '4143944955',
                'gmail' => 'lramir17.uai@gmail.com',
                'email_cantv' => 'lramir17@cantv.com.ve',
                'profile_photo' => '156560.jpg',
              ],
              [
                'p00' => '126645',
                'personal_id' => '18220808',
                'first_name' => 'ORIANA',
                'second_name' => 'NAKARELY',
                'first_surname' => 'LOPEZ',
                'second_surname' => 'ALESSANDRINI',
                'job_title_id' => 4,
                'uai_id' => 1,
                'phone' => '4265320101',
                'gmail' => 'olopez01.uai@gmail.com',
                'email_cantv' => 'olopez01@cantv.com.ve',
                'profile_photo' => '126645.jpg',
              ],
              [
                'p00' => '156646',
                'personal_id' => '14758766',
                'first_name' => 'DAYANNA',
                'second_name' => 'DUGIN',
                'first_surname' => 'DURÁN',
                'second_surname' => 'GONZÁLEZ',
                'job_title_id' => 3,
                'uai_id' => 5,
                'phone' => '4163848415',
                'gmail' => 'dduran03.uai@gmail.com',
                'email_cantv' => 'dduran03@cantv.com.ve',
                'profile_photo' => '156646.jpg',
              ],
        ];

        
        foreach($employees as $employee)
        {
            $employeeModel = new Employee();
            $employeeModel->personal_id = $employee['personal_id'];
            $employeeModel->first_name = $employee['first_name'];
            $employeeModel->second_name = $employee['second_name'] != null ? $employee['second_name'] : null;
            $employeeModel->first_surname = $employee['first_surname'];
            $employeeModel->second_surname = $employee['second_surname'] != null ? $employee['second_surname'] : null;
            $employeeModel->phone = $employee['phone'];
            $employeeModel->p00 = $employee['p00']; 
            $employeeModel->gmail = $employee['gmail'] != null ? $employee['gmail'] : null;
            $employeeModel->email_cantv = $employee['email_cantv'];
            $employeeModel->job_title_id = $employee['job_title_id'];
            $employeeModel->uai_id = $employee['uai_id'];
            $employeeModel->profile_photo = isset($employee['profile_photo']) ? $employee['profile_photo']: null;
            // $employeeModel->user_id = $employee['user_id'];
            $employeeModel->save();
        }
    }
}
