<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="row mt-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">fill this form</h5>
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="my-input">Names</label>
                            <input id="my-input" class="form-control" type="text" name="names" required>
                        </div>
                        <div class="form-group">
                            <label for="my-input">USERNAME</label>
                            <input id="my-input" class="form-control" type="text" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="my-input">EMAIL</label>
                            <input id="my-input" class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="my-input">PASSWORD</label>
                            <input id="my-input" class="form-control" type="password" name="password" required minlength="5">
                        </div>
                        <div class="form-group">
                            <label for="my-input">CONFIRM</label>
                            <input id="my-input" class="form-control" type="password" name="cpassword" required minlength="5">
                        </div>
                       

                        <div class="card-footer d-flex justify-content-center"  >
                        <input type="submit" value="CREATE" name="submit" class="btn btn-primary" style="width:20% ;">
                        <input type="reset"value="cancel" class="btn btn-primary" style="width:20% ;">
                    </div>
                    </form>
                </div>
                
                    
                </div>
            </div>

        </div>
        <div class="col-sm-3"></div>

    </div>
</body>
</html>