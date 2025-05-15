@extends('layouts.layout')

@section('todolist')
<form action="{{route('todolist.store')}}" method="POST" class="container mt-5">
    @csrf
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="mb-3">
          <label for="task" class="form-label text-success fw-bold">Task Baru</label>
          <input 
            name="task" 
            type="text" 
            id="task" 
            placeholder="Type here"
            class="form-control border-success @error('task') is-invalid @enderror">
            
          @error('task')
          <div class="invalid-feedback d-block text-danger">{{ $message }}</div>
          @enderror
        </div>
  
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
    </div>
  </form>
  
@endsection