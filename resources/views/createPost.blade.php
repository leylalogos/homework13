<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <div class="card card-header" style="background: greenyellow">
                    ایجاد مطلب
                </div>
                <form action="{{ route('post.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="editor1">
                            عنوان
                        </label>
                        <input type="text" name="title" class="form-control" placeholder="عنوان را وارد کنید">
                    </div>
                    <div class="form-group mt-2">
                        <label for="editor2">
                            محتوا پست:
                        </label>
                        <textarea name="content" id="editor2" rows="4" cols="30" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="ایجاد مطلب" class="btn btn-success mt-3">
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.

                        CKEDITOR.replace('editor2');
                    </script>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
