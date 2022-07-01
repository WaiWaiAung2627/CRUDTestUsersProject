<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<center>
		<!-- validation required fields -->
			@if(count($errors)>0 )
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
		<form action="/login" method="post">

			@csrf
			<table border="3" cellpadding="5">
				<tr>
					<th colspan="2">Login Form</th>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="Submit query" value="Login">	
					</td>
				</tr>			
			</table>
		</form>
	</center>
</body>
</html>