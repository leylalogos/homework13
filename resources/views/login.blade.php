<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ورود</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card card-header" style="background: greenyellow">
                    صفحه ورود
                </div>
                <form action="{{ route('dologin') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>نام</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>پسورد</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <input type="submit" value="send" class="form-control btn btn-warning mt-2">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
