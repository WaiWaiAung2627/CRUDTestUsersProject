<html>
<style type="text/css">
	input{
		border: none;
	}
	input:focous{
		outline: none;
	}
</style>
<div align="Left">
    <a href="createUser"class="btn btn-success btn-sm">Create Users</a>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<table border="3" cellpadding="5">
	@csrf
 <tr>
  <th width="10%">Id</th>
  <th width="10%">Name</th>
  <th width="10%">Email</th>
  <th width="10%">Country</th>
  <th width="10%">Phone No</th>
  <th width="10%">Uploaded File</th>
  <th width="40%">Action</th>

 </tr>
 @foreach($TestUsers as $tUser)
  <tr>
   <td>{{ $tUser->id }}</td>
   <td>{{ $tUser->name }}</td>
   <td>{{ $tUser->email }}</td>
   <td>{{ $tUser->country }}</td>
   <td>{{ $tUser->phone }}</td>
   <td><a href ="{{asset('public/uploadesFiles/'.$tUser->file)}}">{{ $tUser->file }}</a></td>
   <td>
       <a href="{{ route('users.edit',[$tUser->id]) }}" class="btn btn-warning">Edit</a>
       <a href="{{ route('users.delete',$tUser->id) }}" class="btn btn-sm btn-danger">Delete</a>
   </td>
  </tr>
 @endforeach
</table>
<br>
<div align="Left">
    <a href="{{route('logout')}}"class="btn btn-success btn-sm">Logout</a>
</div>
</html>