<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="/js/log.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <h2 style="color:white">Repozytorium</h2>
        </nav>
        <div class="container">
            <div class="row h-25">

            </div>
            <div class="row justify-content-center h-50">
                <div class="col-5 border border-dark">
                    <i><h2 class="align-center"style="text-align:center;">Repozytorium</h2></i>
                    <div style="vertical-align: bottom">
                        @if (!empty($login))
                            <p style="text-align:center;color:red">Incorrect password or login</p>
                        @endif
                    <form action="/main" method="post">
                    <input type="text" class="form-control mb-3 inp"placeholder="Login"id="login"name="login"@if (!empty($login))
                            value={{$login}}
                    @endif>
                    <input type="password" class="form-control mb-3 inp"placeholder="password"id="passwd"name="passwd">
                    <button type="submit" class="btn btn-block btn-outline-warning mb-3 inp" style="width: 100%" id="sub">Log in</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    <body>
</html>