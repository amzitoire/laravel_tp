@extends('..//layouts.base')
@section('title')
@endsection
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-6 mx-auto" >les personnes</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Email verified at</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>

                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <td>
                            <a href="{{route('users.show',$user->id)}}"><button  class="btn btn-primary">show</button></a>
                            <a href="{{route('users.edit',$user->id)}}"><button  class="btn btn-infos">update</button></a>
                            <a href="{{route('users.delete',$user->id)}}"><button  class="btn btn-danger">delete</button></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-6 mx-auto">
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
