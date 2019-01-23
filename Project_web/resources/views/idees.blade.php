@extends('master')

@section('content')
TELLEMENT D'IDEES WTF
<ul class="list">
        @foreach ($centers as $center)
                <li>
                    WTF TEST AFFICHAGE {{ $center->CenterName }}
                </li>
        @endforeach
    </ul>
@stop

