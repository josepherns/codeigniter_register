<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fcb7ae;
            overflow: hidden;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 350px;
            background-color: rgba(65, 105, 225, 1);
            padding: 50px;
            border-radius: 20px;
            position: relative;
            box-shadow: 10px 5px 5px gray;
        }

        .title {
            font-size: 28px;
            color: #fcb7ae;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0;
        }

        .message, .signin {
            color: black;
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: blue;
        }

        .signin a:hover {
            text-decoration: underline royalblue;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 6px;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;
            background: rgba(252, 183, 174,1);
        }

        .form label .input + span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input:placeholder-shown + span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus + span,.form label .input:valid + span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input:valid + span {
            color: green;
        }

        #submit {
            background-color: skyblue;
            padding: 10px;
            border-radius: 10px;
            color: black;
            font-weight: 600;
            font-size: 16px;
            transform: .3s ease;
            width: 212px;
            cursor: pointer
        }

        #submit:hover {
            background-color: rgb(56, 90, 194);
        }

    </style>
</head>
<body>
    <div>
        <form class="form">
            <p class="title">Login</p>
            <div class="flex">
                <label>
                    <input id="username" required="" placeholder="" type="text" class="input">
                    <span>Username</span>
                </label>
            </div>  
            <div class="flex"> 
                <label>
                    <input id="password" required="" placeholder="" type="password" class="input">
                    <span>Password</span>
                </label>
            </div> 
            <div class="flex">   
                <button onclick="login()" id="submit">Submit</button>
            </div>
            <p class="signin">Don't have an acount ? <a href="#">Register</a> </p>
        </form>
    </div>
    <script>
        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            var validUsername = "user";
            var validPassword = "pass";

            if (username === validUsername && password === validPassword) {
                alert("Login successful!");
            } else {
                alert("Wrong Password!");
            }
        }
    </script>
</body>
</html>
