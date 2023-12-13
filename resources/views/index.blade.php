@extends('layouts.app')

@section('title')
laravel-migration-seeder
@endsection

@section('content')

<section class="p-4">
    <table class="table table-hover border border-2">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Partenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Orario partenza</th>
            <th scope="col">Orario arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($trains as $train)
                <tr>
                    <td class="text-danger fw-medium">{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                    <td class="text-success fw-medium">{{ $train->orario_di_partenza }}</td>
                    <td class="text-success fw-medium">{{ $train->orario_di_arrivo }}</td>
                    <td class="text-center">{{ $train->codice_treno }}</td>
                    <td class="text-center">{{ $train->numero_carrozze }}</td>
                    <td class="text-center">{{ $train->in_orario }}</td>
                    <td class="text-center">{{ $train->cancellato }}</td>
                </tr>               
            @empty
                
            @endforelse
        </tbody>
      </table>
</section>

@endsection