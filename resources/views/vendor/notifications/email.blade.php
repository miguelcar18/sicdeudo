@component('mail::layout')
{{-- Greeting --}}

{{-- Header --}}
@slot('header')
    <center>
        <img src="https://image.ibb.co/icCFbG/logo_sistema.png" alt="" height="150px" width="auto">
    </center>
@endslot
{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Regards,<br>{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@component('mail::subcopy')
Si tiene problemas al hacer clic en el botón "{{ $actionText }}", copie y pegue la URL a continuación en su navegador web: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
    <footer style="text-align: center">
        <div class="col-xs-12">
            Delegación de Desarrollo Estudiantil UDO Monagas.
        </div>
        <div class="col-xs-12">
            2017 &copy; Universidad de Oriente - Núcleo Monagas.
        </div>
    </footer>
@endslot

@endcomponent
