<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	
	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>User Details</h2>

    <form enctype="multipart/form-data" method="post">
	@csrf
        <table >
            <tr>
                <td>ID</td>
                <td> :</td>
                <td>{{$user['id']}}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td> :</td>
                <td>{{$user['name']}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td> :</td>
                <td>{{$user['email']}}</td>
            </tr>
            <tr>
			<td></td>
            <td> </td>
			<td>
                <input type="submit" name="Submit" value="Delete">
                <a href="#" class="btn btn-danger" onclick="return myFunction(); data-confirm="Are you sure?"> Delete</a>
            </td>
		</tr>
        </table>
	</form>
</body>
</html>

<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>