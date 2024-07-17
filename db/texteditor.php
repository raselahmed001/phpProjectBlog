<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <title>Text editor</title>
</head>
<body>
    <form action="">
    <textarea id="myTextarea"></textarea>

    </form>
    <script>
ClassicEditor
    .create(document.querySelector("#myTextarea"))
    .catch(error => {
        console.error( error );
    } );
</script>

</body>
</html>