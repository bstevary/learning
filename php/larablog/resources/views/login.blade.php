<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<!------account------->
   <div class="account-page">
            <div class="container">
                <div class="row">
                <div class="col-2">
                    <img src="GettyImages-1354846583.webp" width="100%">
                </div>
                <div class="col-2">
                <div class="form-container">
                  <div class="form-btn">
                    <span onclick="login()">Login</span>
                    <span onclick="register()">Register</span>
                    <hr  id="Indicator">
                  </div>
                    <form  id="LoginForm">
                      <input type="text" placeholder="username/Email">
                      <input type="password" placeholder="password">
                      <button   type="submit" class="btn">Login</button>
                       <a href="">  Forgot password</a> 
                    </form>

                    <form  id="RegForm">
                      <input type="text" placeholder="Username">
                      <input type="email" placeholder="Email">
                  <input type="password" placeholder="password">
                      <button   type="submit" class="btn">Register</button>
                
                    </form>
                  
                         
                </div>
                </div>

                </div>

            </div>
        </div>

    
</body>
</html>