@extends('app')
@section('content')
    <div class="row">
      <div class="col-md-6 card p-5">
      @if(session('Success'))
        <p class="alert alert-success">{{session('Success')}}</p>
      @endif
      @if($errors->any())
      @foreach($errors->all() as $err)
     <p class="alert alert-danger">{{$err}}</p> 
      @endforeach
      @endif
        <form method="POST" action="{{route('login.action')}}">
          @csrf

          <div class="mb-3">
            <label >Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}"/>
          </div>

          <div class="mb-3">
            <label >Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password"/>
          </div>

          <div class="mb-3">
           <button class="btn btn-primary">Login</button>
           <a class="btn btn-danger" href="{{route('home1')}}" >Back</a>
          </div>
        </form>
      </div>
    </div>
@endsection

