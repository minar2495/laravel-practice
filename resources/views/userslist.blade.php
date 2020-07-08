<style>
    table tr{
        background-color:burlywood;
    }
    li{
        list-style: none;
        display: inline;
    }
</style>
<h1>Users</h1>
<table>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    @foreach ($data as $item)
        <tr>
            <td style="text-align: center">{{$item->name}}</td>
            <td style="text-align: center">{{$item->email}}</td>
            <td style="text-align: center">{{$item->password}}</td>
        </tr>     
    @endforeach
</table> 
{{$data->links()}}
