@extends('layouts.main')


@section('content')

<h1>Treni Passati dal Controller</h1>


<table>
  <tr>
    <th>ID</th>
    <th>Azienda</th>
    <th>Stazione di partenza</th>
    <th>Stazione di arrivo</th>
    <th>Orario di partenza</th>
    <th>Orario di arrivo</th>
    <th>Codice Treno</th>
    <th>Numero Carrozze</th>
    <th>In orario</th>
    <th>Cancellato</th>
  </tr>

  @foreach ($trains as $train)
  <tr>
    <td>{{ $train['ID']}}</td>
    <td>{{ $train['Azienda']}}</td>
    <td>{{ $train['Stazione di partenza']}}</td>
    <td>{{ $train['Stazione di arrivo']}}</td>
    <td>{{ $train['Orario di partenza']}}</td>
    <td>{{ $train['Orario di arrivo']}}</td>
    <td>{{ $train['Codice Treno']}}</td>
    <td>{{ $train['Numero Carrozze']}}</td>
    <td>{{ $train['In orario']}}</td>
    <td>{{ $train['Cancellato']}}</td>
  </tr>
  
  @endforeach
</table>
@endsection


