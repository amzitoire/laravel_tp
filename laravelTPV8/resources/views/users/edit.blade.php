@extends('..//layouts.base')
@section('title')
@endsection
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">full name:</label>
            <input type="text" class="form-control" id="exampleInputText" name="name" value="{{$user->name}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$user->email}}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
    </form>
        </div>
    </div>
@endsection
@section('js')
@endsection