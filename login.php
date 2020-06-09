<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="A">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-5" style="background-color:lightblue">
           <h2 class="a">Login Form</h2>
         <form action="validation.php" method="post">
           <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" class="form-control" autocomplete="off">
           </div>
             <br>
           <div class="form-group">
             <label>Password</label>
             <input type="Password" name="password" class="form-control" autocomplte="off">
           </div>

           <button type="submit" class ="btn btn-success">Login</button>
         
         </form>
         
        </div>

        <div class="col-lg-5" style="background-color:#33FFBD">
           <h2 class="b">SignUp Form</h2>
         <form action="registeration.php" method="post" onsubmit="return validation()" class="bg-light">
           <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" class="form-control" id="user" autocomplete="off">
             <span id="user_span" class="text-danger font-weight-bold"></span>
           </div>
             <br>
           <div class="form-group">
             <label>Password</label>
             <input type="Password" name="password" class="form-control" id="password" autocomplete="off">
             <span id="pass_span" class="text-danger font-weight-bold"></span>
           </div>
              <br>
           <div class="form-group">
             <label>Email</label>
             <input type="text" name="email" class="form-control" id="email" autocomplete="off">
             <span id="email_span" class="text-danger font-weight-bold"></span>
           </div>
             <br>
           <label>Birthday:</label>
              <input type="date" name="bday" id="dob" autocomplete="off">
              <span id="dob_span" class="text-danger font-weight-bold"></span>
              <br>
              <br>

           <label>Gender  </label>
           <input type="radio" name="gender" value="male" id="gender_Male"> Male
           <input type="radio" name="gender" value="female" id="gender_Female"> Female
           <input type="radio" name="gender" value="other" id="gender_Other"> Other
           <span id="gender_span" class="text-danger font-weight-bold"></span>
           <br>
           <br>
           <button type="submit" class ="btn btn-primary">SignIn</button>
         
         </form>
         
        </div>

      </div>
    
    </div>

    <script type="text/javascript">

      function validation(){
        var user=document.getElementById('user').value;
        var pass=document.getElementById('password').value;
        var email=document.getElementById('email').value;
        var dob=document.getElementById('dob').value;

        if(!isNaN(user)){
          document.getElementById('user_span').innerHTML="** Username should not contain only number";
          return false;
        }
        else if(pass.length<8){
          document.getElementById('pass_span').innerHTML="** Password should have minimum eight characters";
          return false;
        }
        else if(email==""&&(email.charAt(email.length-4)!='.'||email.charAt(email.length-3)!='.')){
          document.getElementById('email_span').innerHTML="** Email should not start from @ and it should be proper";
          return false;
        }
        else if(dob==null || dob==''){
          document.getElementById('dob_span').innerHTML="** Please select date of birth";
          return false;
        }
        else if(!(document.getElementById('gender_Male').checked || document.getElementById('gender_Female').checked || document.getElementById('gender_Other').checked)){
          document.getElementById('gender_span').innerHTML="** Please select a gender";
          return false;
        }
        return true;
      }
    
    </script>
    
</body>
</html>