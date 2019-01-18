@extends('welcome')

@section('body')
    <div class="col-12">
        <h5 class="page-header">
            Training Exercise
        </h5>
    </div>

    <div class="col-12">
        <h6>Patterns List</h6>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('patterns.decorator') }}" class="btn btn-default">Decorator Pattern</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('patterns.chain') }}" class="btn btn-default">Chain of Responsibility Pattern</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('patterns.builder') }}" class="btn btn-default">Builder Pattern</a>
            </li>
        </ul>

    </div>
@endsection

