<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joke</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer>
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarText">

                <a class="nav-link active mx-3" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link active mx-3" aria-current="page" href="{{ route('joke') }}">non mi piace</a>


            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div>
            <h3 class="mt-3"> dillo a</h3>

            <h2 class="text-danger ">
                {{$lista[$randomInd1]}}
            </h2>
            <h3 class="mt-3"> dillo a</h3>

            <h2 class="text-danger ">
                {{$lista[$randomInd2]}}
            </h2>
        </div>
    </div>
</body>

</html>