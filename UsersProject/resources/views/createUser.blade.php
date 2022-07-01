<html>
<body>
	<form action="/CreateUser" Method="post" enctype="multipart/form-data">
		@csrf
		<table border="3" cellpadding="5">
			<tr>
				<th colspan="2">User Creation Form</th>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Country</td>
				<td><input type="text" name="country"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Uploaded File</td>
				<td><input type="file" name="file"></td>
			</tr>
			<tr>
				<th align="center" colspan="2">
					<input type="submit" name="createuser" value="Create New User"> </th>
			</tr>
		</table>
	</form>
<br>
<div align="Left">
    <a href="{{route('logout')}}"class="btn btn-success btn-sm">Logout</a>
</div>

</body>
</html>