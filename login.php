<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container mt-4">
        <h2>login</h2><br>
            <form action="proses_login.php" method="POST">

            <div class="form-outline mb-4 col-4">
                <label class="form-laber" for="form2Example1">username</label>
                <input type="text" id="username" name="username" class="form-control" />
</div>
           <div class="form-outline mb-4 col-4">
            <label class="form-label" for="form2Example2">password</label>
            <input type="password" id="password" name="password" class="form-control"/>
        
</div>
          <div class="form-outline mb-4 col-4">
            <button type="submit" class="btn btn-primary btn-block mb-4">sign in</button>
</div>
</div>
</form> 
</body>
</html>