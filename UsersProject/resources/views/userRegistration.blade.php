<html>
<body>
	<form action="/Registration" Method="post">
		@csrf
		<table border="3" cellpadding="5">
			<tr>
				<th colspan="2">User Registration Form</th>
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
					<td>Password</td>
					<td><input type="Password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="confirmpassword" value="{{old('confirmpassword')}}"></td>
				</tr>
			<tr>
				<th align="center" colspan="2">
					<input type="submit" name="Register" value="Register"> 
				</th>
			</tr>
		</table>
	</form>
</body>
</html>