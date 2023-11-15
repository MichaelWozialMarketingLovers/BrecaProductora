@extends('layouts.admin')

@section('cssExtras')
@endsection

@section('styleExtras')
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @foreach ($categorias as $c)
                    @foreach ($espectaculo as $e)
                        @if ($c->id == $e->categoria)
                            {{ $e->titulolateral }} <br>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('jsLibExtras2')
@endsection
