<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body class="antialiased">
    <div class="container">
        <div class=" row mb-5 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h4>upload file</h4>
                </div>
                <div class="card-body">
                    <form action="/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">file imgage</label>
                            <input class="form-control" type="file" name="img" id="img">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="submit">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="table mb-3">
            <table class="table">
                <thead class="table-dark" align="center">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ไฟล์</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($spost as $item)
                        <tr>
                            <td align="center">{{ $item->id }}</td>
                            <td>
                                <a class="btn btn-secondary" href="images/{{ $item->img }}"
                                    target="_blank">{{ $item->img }}</a>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
