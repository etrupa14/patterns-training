@extends('welcome')

@section('body')

    <div class="col-12" style="padding: 10px 10px;">
        <div class="alert alert-info">
            <p>Please input student details, and press submit to view the simple student summary</p>
            @include('back-button')
        </div>
    </div>

    <div class="col-12" style="padding: 10px 10px;">
        <form action="{{ route('patterns.builder.submit') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="class">Class: </label>
                <input type="text" name="class" id="class" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <div class="col-12" style="padding: 10px 10px;">
        @if(isset($result) && $result)
            <div class="alert alert-success">
                {{ $result }}
            </div>
        @endif
    </div>
@endsection