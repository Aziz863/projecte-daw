<body>
<h1>Temps</h1>
{{--@foreach ($temperatures as $temperatura)--}}
{{--    {{$temperatura}}--}}
{{--@endforeach--}}

<?php
foreach ($temperatures as $temp) {
    echo $temp;
}
?>
</body>
