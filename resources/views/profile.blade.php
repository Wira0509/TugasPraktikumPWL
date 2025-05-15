@extends('layouts.layout')

@section('todolist')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type here" aria-label="Task input">
            <button class="btn btn-success" type="button">Tambahkan Profil</button>
            <a href="{{route('todolist.create')}}"></a>
        </div>
    </div>
</div>

@endsection