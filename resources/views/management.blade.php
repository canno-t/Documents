<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/menag.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <h2 style="color:white">Repozytorium</h2>
        </nav>
        <div class="container">
        <div class="container">
            <div class="row"style="height:10%">

            </div>
            <div class="row">
                <div class="col-3">
                    <input type="text"id='user'>
                    <input type="passwd" id='setpasswd'>
                    <select id='types'>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                    <button type="submit"id='sub'>
                </div>
                <div class="col-6">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">User</th>
                                <th scope="col">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item=>$key)
                                <tr>
                                    <th scope="col">{{$item}}</th>
                                    <td>{{$key}}</td>
                                    <td><button type="submit"id={{$item}} class="btn btn-danger users">delete</button>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </body>
</html>