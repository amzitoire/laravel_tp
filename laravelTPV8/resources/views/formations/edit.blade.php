@extends('..//layouts.base')
@section('title')
@endsection
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
    <form  action="{{route('formations.updateFormation',$formation->id)}}" method="post">
        @csrf()
        <div class="col-12 mx-auto">
            @include('../messages.errors')
            @include('../messages.success')
        </div>
        <div class="col-12 mx-auto">
            <label for="exampleInputEmail1" class="form-label">full name:</label>
            <input type="text" class="form-control" id="exampleInputText" name="name" value="{{$formation->name}}" >
        </div>
        <div class="col-12 mx-auto">
                <label for="">price:</label>
                <input type="number"
                       class="form-control" name="price" id="" aria-describedby="helpId" placeholder="" value="{{$formation->price}}">
                <small id="helpId" class="form-text text-muted">price formation</small>
        </div>
        <div class=" col-12 mx-auto">
            <div class="form-group">
                <label for="">user</label>
                <select class="form-control" name="user_id" id="">
                @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
    </form>
        </div>
    </div>
@endsection
@section('js')
@endsection
