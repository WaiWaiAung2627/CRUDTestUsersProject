<html>
<style type="text/css">
	input{
		border: none;
		border-width: 0px;
	}
	input:focous{
		outline: none;
		border: none;
		border-width: 0px;
	}
</style>
<body>
	<form action="{{route('users.update',[$TUsers->id])}}" method="post" >
		@csrf
		<table border="3" cellpadding="5">
			<tr>
				<th colspan="2">User Update Form</th>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="name" value="{{old('name',$TUsers->name)}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{old('email',$TUsers->email)}}"></td>
			</tr>
			<tr>
					<td>Country</td>
				<td><input type="text" name="country" value="{{old('country',$TUsers->country)}}"></td>
				</tr>
				<tr>
					<td>Phone</td>
				<td><input type="text" name="phone" value="{{old('phone',$TUsers->phone)}}"></td>
				</tr>
			<tr>
			<tr>
				<td>Uploaded File</td>
				<td><input type="file" name="file" value="{{old('file',$TUsers->file)}}">
					Old File - <input type="text" name="filename" value="{{old('file',$TUsers->file)}}" readonly></td>
			</tr>	
				<th align="center" colspan="2">
					<input type="submit" name="editeuser" value="Update"> </th>
			</tr>
		</table>
	</form>
<br>
<div align="Left">
    <a href="{{route('logout')}}"class="btn btn-success btn-sm">Logout</a>
</div>
</body>
</html>