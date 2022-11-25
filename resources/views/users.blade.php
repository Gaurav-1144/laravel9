<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Show:</h1>{{session('users')}}
    <form action="postsend" method="post">
        @csrf
        <!-- {{method_field('PUT')}}
        {{method_field('Delete')}}
        {{method_field('Head')}}
        {{method_field('Patch')}} -->
        <button type="submit">Sumit Data</button>
    </form>
    <table>
        <thead>
        <tr>Name</tr>
        <tr>Photo</tr>
        </thead>
        <tbody>
            <tr>
                @foreach($collection as $var)
                <td>{{$var['first_name']}} </td>
                <td><img src="{{$var['avatar']}}" alt="" srcset=""> </td>
                @endforeach
            </tr>
        </tbody>
        
    </table>
</body>
</html>