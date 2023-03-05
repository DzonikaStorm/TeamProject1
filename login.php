

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login_register.css">
    <link rel="stylesheet" href="alert.css">
    
</head>
<body>
        
    <?php if (!empty($_GET['error'])){
        ?>
    
    <div class="col-sm-12">
            <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
                <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                <strong class="font__weight-semibold">Warning!</strong> <?php echo $_GET['error']; ?>
            </div>
      </div> 

      <?php }?>
    
    <div class="login-page">
        <div class="form">
            <h1>Login</h1>
                <form class="login-form" method="POST" action="index.php">
                    <input type="text" name="userName" placeholder="Username"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <button>login</button>
                    <p class="message">Not registered? <a href="register.php">Create an account</a></p>
                </form>
        </div>
    </div>
</body>
</html>
