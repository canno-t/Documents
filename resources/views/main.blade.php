<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    </head>
    <body>
        {{-- <h1>Loged in {{$type}} account, <br>Welcome {{$name}}!</h1> --}}
        {{-- {{$privileges}} --}}
        <nav class="navbar navbar-dark bg-dark">
            <h2 style="color:white">Repozytorium</h2>
            <button type="button"class="btn btn-dark"id="new">Add File</button>
        </nav>
        <div class="container">
            <div class="row"style="height:10%">

            </div>
            <div class="row">
                <div class="col-2">
                    <div id="newuser">
                    <form action="/uploadfile"method='post'enctype="multipart/form-data">
                        <input type="file"id='file'name='file'>
                        <button class="btn btn-warning btn-block" style="width:100%"type="submit"id="submit">send</button>
                        </form>
                    </div>
                </div>
                <div class="col-7">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>User</th>
                                <th>File</th>
                                <th>Download</th>
                                @if ($type=='admin')
                                        <th>Management</button></th>
                                    @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $key=>$value)
                                <tr>
                                    <th><span class="material-icons-outlined">
                                        account_circle
                                        </span> {{$value['user']}} </th>
                                    <td><a href={{$value['link']}}>{{basename($value['link'])}}</a></td>
                                    <td><a style="text-decoration:none;color:black;"href={{$value['link']}} download><span class="material-icons-outlined">
                                        file_download
                                        </span></a></td>
                                    @if ($type=='admin')
                                        <td><button class="btn btn-danger delete"id={{$key}}>Delete</button></td>
                                    @endif
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