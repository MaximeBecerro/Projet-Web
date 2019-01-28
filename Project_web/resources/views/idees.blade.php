@extends('master')

@section('content')

<main role="main">     
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                    @php
                        $json = json_decode(file_get_contents('http://localhost:3000/ideas'), true);
                        foreach (array_reverse($json) as $IdeaContent => $id) {
                            echo '<div class="card" style="width: 18rem;">
                                <div class="card-body">
                                <p class="card-text">' . $id['IdeaContent'] . '</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>';
                        }
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

