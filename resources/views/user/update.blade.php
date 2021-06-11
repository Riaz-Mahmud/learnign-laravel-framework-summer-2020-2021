<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<a href="/user/list"> Back to UserList</a> |
	<a href="/logout"> Logout </a> 

	<h2>Update User</h2>

	<form enctype="multipart/form-data" method="post">
	@csrf
	<table>
		<tr>
			<td>id</td>
			<td><input type="text" name="id" value={{$user['id']}} readonly></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" value={{$user['name']}} name="name"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" value={{$user['email']}} name="email"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Update"></td>
		</tr>
	</table>
	</form>
</body>
</html>