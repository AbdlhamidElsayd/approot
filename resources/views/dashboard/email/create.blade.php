@extends('layouts.default')

@section('contentt')

@section('title')
Create Email

@endsection




<form method="post" action="{{ route('email.store') }}" >
                <h3 class="box-title">create Email</h3>
                 @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
        @endforeach

    {{csrf_field()}}

    


    <div class="form-group">
        <input type="email" name="email" class="form-control" id="email" placeholder="email">
        <label for="code">enter email </label>

    </div>
    <div class="form-group">
        <input type="number" name="order" class="form-control" id="code" placeholder="oorder">
        <label for="code">enter order </label>

    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>





@endsection


