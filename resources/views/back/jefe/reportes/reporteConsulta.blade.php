<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Resultados de consulta</title>
        <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
        <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
        <style>
            @page { margin: 180px 50px; }
            #header {
                position: fixed; 
                left: 0px; 
                top: -180px; 
                right: 0px; 
                height: 150px; 
                text-align: center;
            }
            #footer {
                position: fixed; 
                left: 0px; 
                bottom: -180px; 
                right: 0px; 
                height: 150px; 
            }
            #footer .page:after {
                content: counter(page, upper-roman);
            }
        </style>
    </head>
    <body marginwidth="0" marginheight="0">
        <div id="header">
            <div style="float:left;">
                <img src="{{ asset('assets/images/logos/logo_udo.png') }}" width="100px" height="auto" style="margin: 0.5em;">
            </div>
            <div style="float:left; text-align: left; font-size: 13px; padding-top: 10px; font-weight: bold;">
                <p>UNIVERSIDAD DE ORIENTE</p>
                <p>DELEGACIÓN DE DESARROLLO ESTUDIANTIL</p>
                <p>NÚCLEO MONAGAS</p>
            </div>
            <div style="float:right;">
                <img src="{{ asset('assets/images/logos/logo_sistema.png') }}" width="auto" height="100px" style="margin: 0.5em;">
            </div>
            <br>
            <div style="padding-top: 110px; text-align:center; color: red">
                <h2><b><u>REPORTE</u></b></h2>
            </div>
        </div>
        <div id="footer">
            <div style="text-align: center; font-size: 13px; font-weight: bold;">
                <p>Delegación de Desarrollo Estudiantil UDO Monagas.</p>
                <p>2017 © Universidad de Oriente - Núcleo Monagas.</p>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" id="cabecera" border="0" width="100%" style="padding-top: 20px;">
            <thead>
                <tr style="color:red; text-transform: uppercase">
                    <th><u>Cédula</u></th>
                    <th><u>Nombre</u></th>
                    <th><u>Semestre</u></th>
                    <th><u>Especialidad</u></th>
                    <th><u>Status</u></th>
                </tr>
            </thead>
            <tbody style="padding-top: 100px">
                <tr>
                    <td colspan="5"><br></td>
                </tr>
                @foreach($resultados as $data)
                <tr>
                    <td>{{ number_format($data->cedula, 0, '', '.') }}</td>
                    <td>{{ $data->apellidosNombres }}</td>
                    <td>
                        @if($data->semestreActual == 'primero')
                            1er Semestre
                        @elseif($data->semestreActual == 'segundo')
                            2do Semestre
                        @elseif($data->semestreActual == 'tercero')
                            3ro Semestre
                        @elseif($data->semestreActual == 'cuarto')
                            4to Semestre
                        @elseif($data->semestreActual == 'quinto')
                            5to Semestre
                        @elseif($data->semestreActual == 'sexto')
                            6to Semestre
                        @elseif($data->semestreActual == 'septimo')
                            7mo Semestre
                        @elseif($data->semestreActual == 'octavo')
                            8vo Semestre
                        @elseif($data->semestreActual == 'noveno')
                            9no Semestre
                        @elseif($data->semestreActual == 'decimo')
                            10mo Semestre
                        @endif
                    </td>
                    <td>
                        @if($data->especialidad == 'administracion' )
                            Administración de Empresas
                        @elseif($data->especialidad == 'contaduria' )
                            Contaduría Pública
                        @elseif($data->especialidad == 'gerencia' )
                            Gerencia de Recursos Humanos
                        @elseif($data->especialidad == 'agronomia' )
                            Ingeniería Agronómica
                        @elseif($data->especialidad == 'petroleo' )
                            Ingeniería de Petróleo
                        @elseif($data->especialidad == 'sistemas' )
                            Ingeniería de Sistemas
                        @elseif($data->especialidad == 'produccionAnimal' )
                            Ingeniería en Producción Animal
                        @elseif($data->especialidad == 'tecnologiaAlimentos' )
                            Tecnología de los Alimentos
                        @endif
                    </td>
                    <td>{{ $data->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>      
    </body>
</html>