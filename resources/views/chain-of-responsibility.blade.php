@extends('welcome')

@section('body')
    <div class="col-12" style="padding: 10px 10px;">
        <div class="alert alert-info">
            <p>Place someone to greet, Longer names would be welcomed by new year.</p>

            @include('back-button')
        </div>
    </div>

    <div class="col-12" style="padding: 10px 10px;">
        <form action="{{ route('patterns.chain.submit') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="string">Who do you want to greet? </label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    @if(isset($result) && $result)
        <div class="col-12" style="padding: 10px 10px;">
            <div class="alert alert-success">
                {{ $result }}
            </div>
        </div>
    @endif
@endsection
