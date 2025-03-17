<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
        <style>
            body { 
                display: flex; 
                justify-content: center; 
                align-items: center; 
                height: 100vh; 
                background: #f4f4f4; 
                font-family: 'Quicksand', sans-serif;
            }
            .login-container { 
                text-align: center; 
                background: white; 
                padding: 20px; 
                border-radius: 10px; 
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
                width: 300px;
            }
            .error-message {
                color: red;
                font-size: 12px;
                margin-top: 5px;
                text-align: left;
            }
            input, button { 
                display: block; 
                width: 100%;
                margin: 10px 0; 
                padding: 12px; 
                border: 1px solid #ccc; 
                border-radius: 5px;
                font-family: 'Quicksand', sans-serif;
                box-sizing: border-box;
            }
            button { 
                background: #1f305e; 
                color: white; 
                border: none; 
                cursor: pointer; 
                font-weight: 600;
            }
            button:hover {
                background: #4F72A3;
            }
        </style>
    </head>    
<body>
    <div class="login-container">
        <img src="{{ asset('logo-pos.png') }}" alt="POS Logo" width="100">
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            @error('login')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <button type="submit">Login</button>
        </form>
    </div>    
</body>
</html>
