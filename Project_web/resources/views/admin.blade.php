@extends('master')

@section('content')
test
<ul>
    @foreach ($users as $user)
    <li>
        <a href="{{ url('/admin/' . $user->id)}}">
            {{$user->name}}, {{$user->email}}
            
        </a>
        <a>
            <label class="radio-inline"><input type="radio" name="optradio[{{$user->id}}]" checked>BDE member</label>
            
        </a>
        <a>
            <label class="radio-inline"><input type="radio" name="optradio[{{$user->id}}]">CESI employee</label>
        </a>
        <a>
            <label class="radio-inline"><input type="radio" name="optradio[{{$user->id}}]">Student</label>    
        </a>
    </li> 
    @endforeach
</ul>
@endsection

