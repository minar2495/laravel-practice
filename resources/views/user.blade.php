<h1>user Form</h1>
{{-- @if ($errors->any())
    <div>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif --}}
<form action="userdata" method="post">
@csrf
Name : <br> 
<input type="text" name="name">
@error('name')
<span>{{$message}}</span>
@enderror
<br><br>
Address : <br>
 <input type="text" name="address">
<br><br>
<input type="submit" value="submit">
</form>