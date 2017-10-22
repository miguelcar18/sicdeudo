<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Solicitud</title>
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
                bottom: -240px; 
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
                <h2><b><u>COMPROBANTE DE SOLICITUD</u></b></h2>
            </div>
        </div>
        <div id="footer">
            <div style="text-align: center; font-size: 13px; font-weight: bold;">
                <p>Delegación de Desarrollo Estudiantil UDO Monagas.</p>
                <p>2017 © Universidad de Oriente - Núcleo Monagas.</p>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" id="cabecera" border="0" width="100%" style="padding-top: 20px;">
            <tbody style="padding-top: 100px; font-size: 18px">
                <tr>
                    <td align="center"><b>Fecha:</b> {{ $fechaHoy }}<br><br></td>
                </tr>
                <tr>
                    <td align="center"><b>Cédula:</b> {{ number_format($estudiante->cedula, 0, '', '.') }}<br><br></td>
                </tr>
                <tr>
                    <td align="center"><b>Nombre:</b> {{ strtoupper($estudiante->apellidosNombres) }}<br><br></td>
                </tr>
                <tr>
                    <td align="center"><b>Especialidad:</b> 
                        @if($estudiante->datosAcademicos->especialidad == 'administracion' )
                        Administración de Empresas
                        @elseif($estudiante->datosAcademicos->especialidad == 'contaduria' )
                        Contaduría Pública
                        @elseif($estudiante->datosAcademicos->especialidad == 'gerencia' )
                        Gerencia de Recursos Humanos
                        @elseif($estudiante->datosAcademicos->especialidad == 'agronomia' )
                        Ingeniería Agronómica
                        @elseif($estudiante->datosAcademicos->especialidad == 'petroleo' )
                        Ingeniería de Petróleo
                        @elseif($estudiante->datosAcademicos->especialidad == 'sistemas' )
                        Ingeniería de Sistemas
                        @elseif($estudiante->datosAcademicos->especialidad == 'produccionAnimal' )
                        Ingeniería en Producción Animal
                        @elseif($estudiante->datosAcademicos->especialidad == 'tecnologiaAlimentos' )
                        Tecnología de los Alimentos
                        @endif
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td align="center"><b>Solicitud Realizada:</b> 
                        {{ $peticion->nombrePeticion->nombre }}
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td align="center"><b style="color: red">Observación:</b> Imprimir este comprobante y conservarlo como garantía de su registro. Recuerde mantener su Usuario y Clave en estricta confidencialidad.</td>
                </tr>
            </tbody>
        </table>      
    </body>
</html>