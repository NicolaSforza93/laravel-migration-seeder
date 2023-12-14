@extends('layouts.app')

@section('title')
laravel-migration-seeder
@endsection

@section('content')

<section class="p-4">
  <figure class="mb-5">
    <img class="w-25" src="{{ Vite::asset('resources/img/download.png') }}" alt="">
  </figure>
  <h5 class="text-uppercase">Viaggio di andata</h5>
    <table class="table table-hover shadow border">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Partenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($trains as $train)
                <tr class="align-middle">
                    <td class="text-danger fw-medium">{{ $train->azienda }}</td>
                    <td>
                      <span class="d-block">{{ $train->stazione_di_partenza }}</span>
                      <span class="d-block text-success fw-medium">{{ $train->orario_di_partenza }}</span>
                    </td>
                    <td>
                      <span class="d-block">{{ $train->stazione_di_arrivo }}</span>
                      <span class="d-block text-success fw-medium">{{ $train->orario_di_arrivo }}</span>
                    </td>
                    <td class="text-center">{{ $train->codice_treno }}</td>
                    <td class="text-center">{{ $train->numero_carrozze }}</td>
                    <td class="text-center">{{ $train->in_orario }}</td>
                    <td class="text-center">{{ $train->cancellato }}</td>
                </tr>               
            @empty
                <p>Nessun treno disponibile</p>
            @endforelse
        </tbody>
      </table>
</section>

@endsection