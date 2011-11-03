<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>File Upload Form</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
</head>
<body>
    <h1>File Upload Form Page</h1>

    <form method="POST" enctype="multipart/form-data" action="/upload_form_post.php">
       
        <input type="file" name="somearray[uploadfile]" id="somearray_uploadfile" />

        <input type="submit" value="Upload" />
    </form>
</body>
</html>