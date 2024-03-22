<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shopk</title>
</head>
<body>
    <div class = "container">
       <h2>List of clients</h2>
       <a class = "btn" href ="/myshop/create.php" role="button">New Client</a>
       <br>
       <table class="table">
         <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <tr>
                <td>3</td>
                <td>Siddeek</td>
                <td>sid@gmail.com</td>
                <td>0712345678</td>
                <td>Galle</td>
                <td>22/03/2024</td>
                <td>
                    <a class ="btn" href='/myshop/edit.php'>Edit</a>
                    <a class="btn" href='/myshop/delete.php'>Delete</a>
                </td>
            </tr>
         </tbody>
       </table>
    </div>
</body>
</html>