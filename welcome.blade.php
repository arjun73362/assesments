<!DOCTYPE HTML>  
<html>
    <head>
        <title>form</title>
        <style>
            table{
                width:80%;
                border:1px solid red;
                text-align: center;
                margin: 0 auto;
                background-color: green;
            }
        </style>
    </head>
<body>
        <form action="{{URL::to('/search')}}" method="GET" role="search">
            {{ csrf_field() }}
            <input type="text" name="q">
            <button type="submit">Gender | Education | Department</button>
        </form>
        @if(isset($details))
            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>Department</th>
                </tr>
                @foreach($details as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->education }}</td>
                        <td>{{ $user->department }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </body>
</html>
