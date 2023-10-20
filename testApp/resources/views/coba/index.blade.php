<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Qigelia</h1>
    {!! $nama !!}
    <br>
   {{  $kampus }}
   <br>
   {{ $fruit[1] }}
   <br>

   @foreach ($fruit as $fruit)
   {{ $fruit }} <br>
   @endforeach

    {{-- @if ($nama == null)
    tidak tersedia
    @elseif ($nama == null)
        adadadad
    @else
        nama tersedia {{ nama }}
    @endif --}}

    {{-- <form method="POST" action="#">
        @method('PATCH')
        @csrf
    </form> --}}

    {{-- @php

        $value = 1;
        
    @endphp --}}

    {{-- <x-alert/> --}}
    <x-alert type="info" message="lorem asdsadsadsadsadasd"/>
    <x-alert type="danger" message="lorem asdsadsadsadsadasd"/>
    <x-alert type="warning" message="lorem asdsadsadsadsadasd"/>
    <x-alert type="success" message="lorem asdsadsadsadsadasd"/>
    <x-alert type="secondary" message="lorem asdsadsadsadsadasd"/>


    <x-button type="success" title="Tambah Data"/>


        
   
</body>
</html>