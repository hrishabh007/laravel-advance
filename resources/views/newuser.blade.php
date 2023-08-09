{{--<h1>
    {{$name}} Page
</h1>--}}
@include('aboutus')

{{--@for($i=0;$i < count($users);$i++)
    <h2>
        Hello World {{$users[$i]}}
    </h2>
@endfor
@foreach($users as $names)
    <h1>
        Hello World {{$names}}
    </h1>
@endforeach--}}


<script>
    var newdata = @json($users);
    console.warn(newdata[0]);
</script>



