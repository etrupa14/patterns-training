@extends('welcome')

@section('body')
    <div class="col-12" style="padding: 10px 10px;">
        <div class="alert alert-info">
            <p>Input a string to reverse</p>
            @include('back-button')
        </div>
    </div>

    <div class="col-12" style="padding: 10px 10px;">
        <form action="{{ route('patterns.decorator.submit') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="string">To Reverse:</label>
                <input type="text" name="string" id="string" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <div class="col-12" style="padding: 10px 10px;">
        @if(isset($result) && $result)
            <div class="alert alert-success">
                <h5>Result: </h5>
                <p>{{ $result }}</p>
            </div>
        @endif
    </div>
@endsection