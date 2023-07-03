<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>


    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
        }

        input[type="email"],
        input[type="password"] {
            width: 300px;
            padding: 5px;
            margin: 5px 0;
        }

        button[type="submit"] {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        div {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div>
        <form method="POST" action="{{ route('user.login') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            

            <button type="submit">Login</button>
        </form>

    </div>
</body>
</html>