<h1>Login Form</h1>
<form action="login" method="POST">
    @csrf
    Username : <br>
    <input type="text" name="username"><br><br>
    Password : <br>
    <input type="password" name ="password"><br><br>
    <button type="submit">Login</button>
</form>