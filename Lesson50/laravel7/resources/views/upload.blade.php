@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Upload files </div>

          <div class="card-body">

            <form  method="POST" action="/upload" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                <div class="col-md-6">
                 <input type="text" name="title" >
 
                </div>
                <div>
              <div class="form-group row">
                <label for="file" class="col-md-4 col-form-label text-md-right">Upload file</label>

                <div class="col-md-6">
                 <input type="file" name="logo" id="file">
 
                </div>
                <div>
                  @if(session('message'))
                    <p>{{session('message')}}</p>
                  @endif
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-outline-primary">
                    Upload files
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection