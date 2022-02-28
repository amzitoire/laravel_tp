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
                <a href="{{route('users.edit',$user->id)}}"><button  class="btn btn-infos">update</button></a>
                <a href="{{route('users.delete',$user->id)}}"><button  class="btn btn-danger">delete</button></a>
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-6 mx-auto" >les formationss</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($formations as $formation)
                    <tr>

                        <th scope="row">{{$formation->id}}</th>
                        <td>{{$formation->name}}</td>
                        <td>{{$formation->price}}</td>
                        <td>
                            <a href="{{route('formations.showFormation',$formation->id)}}"><button  class="btn btn-primary">show</button></a>
                            <a href="{{route('formations.editFormation',$formation->id)}}"><button  class="btn btn-infos">update</button></a>
                            <a href="{{route('formations.deleteFormation',$formation->id)}}"><button  class="btn btn-danger">delete</button></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
          {{--  <div class="col-6 mx-auto">
                {{$users->links()}}
            </div>--}}
        </div>
    </div>
@endsection
@section('js')
@endsection
