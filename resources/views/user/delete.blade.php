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
                    <input type="submit" name="Submit" onclick="return confirm('Are you sure?')" value="Delete">
                </td>
            </tr>
            </table>
        </form>
    </body>
</html>