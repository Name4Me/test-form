<HR>
@foreach($users as $user)
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">{{$user->name}}</div>
        <div class="col-md-3">{{$user->email}}</div>
        <div class="col-md-4">{{$user->country}}</div>
        <form onsubmit="if(confirm('Delete?')){ return true } else { return false }"
              action="{{route('user.destroy', $user)}}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
            <button type="submit" class="btn"  title="Delete"><i class="fas fa-trash-alt"></i></button>
            <a href="{{route('user.edit',$user)}}"  title="Edit"
               class="btn btn-primary pull-right"><i class="far fa-edit"></i></a>
        </form>
    </div>
@endforeach