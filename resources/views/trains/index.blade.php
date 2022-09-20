

@extends('layouts.main')

@section('content')

<h1>Treni dal Database</h1>

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
    <td>{{ $train->ID }}</td>
    <td>{{ $train->Azienda}}</td>
    <td>{{ $train->Stazione_di_partenza}}</td>
    <td>{{ $train->Stazione_di_arrivo}}</td>
    <td>{{ $train->Orario_di_partenza}}</td>
    <td>{{ $train->Orario_di_arrivo}}</td>
    <td>{{ $train->Codice_Treno}}</td>
    <td>{{ $train->Numero_Carrozze}}</td>
    <td>{{ $train->In_orario}}</td>
    <td>{{ $train->Cancellato}}</td>
  </tr>
  @endforeach
  
</table>

@endsection