<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h2 class="text-center">Add category</h2>
    <form action="{{ url('/') }}/cat " method="POST" class=" col-4 m-auto mt-5 border border-primary" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3 px-3 pt-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Category ID</span>
            <input type="text" class="form-control" name="category_id" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 px-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Category Name</span>
            <input type="text" class="form-control" name="category_name" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group px-3 mb-3">
            <span class="input-group-text">Category Description</span>
            <textarea class="form-control" name="cat_description" aria-label="With textarea"></textarea>
        </div>
        <div class="input-group mb-3 px-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control" name="cat_image" id="inputGroupFile01">
        </div>
        <button type="submit" class="btn btn-primary  col-12 mt-3 mb-3">Submit</button>
    </form>
</body>

</html>
