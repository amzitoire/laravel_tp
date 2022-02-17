@extends('..//layouts.base')
@section('title')
    show
@endsection
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col mx-auto my-5">
    <div class="card" >
        <img src="..." class="card-img-top" alt="image user">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text"><strong>Name :</strong> {{$user->name}}</p>
            <p class="card-text"><strong>EMAIL :</strong> {{$user->email}}</p>
            <p class="card-text"><strong>Verified AT :</strong> {{$user->email_verified_at}}</p>
            <div>
                <a href="{{route('update',$user->id)}}"><button  class="btn btn-infos">update</button></a>
                <a href="{{route('delete',$user->id)}}"><button  class="btn btn-danger">delete</button></a>
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
@endsection
