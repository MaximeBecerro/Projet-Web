@extends('master')

@section('content')

<main role="main">
          
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                    @php
                        $json = json_decode(file_get_contents('http://localhost:3000/ideas'), true);
                        echo($json[0]["IdeaContent"]);
                        /*foreach ($json[0] as $coucou){
                            echo $coucou{''};
                        }*/
                        @endphp

            </div>
        </div>
    </div>
</main>
@stop
@section('script')
<script type="text/javascript">
        function test(){
            store('http://localhost:3000/ideas');
            console.log($name);
        };
        console.log('coucou');
</script>
@stop

