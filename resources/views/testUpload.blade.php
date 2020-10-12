<form method="post" enctype="multipart/form-data">
@csrf

    <!-- поле для загрузки файла -->
    <input type="file" name="userfile">

    <input type="submit">
</form>

<hr>

<form method="post" action="/testUpload2"
      enctype="multipart/form-data"
>
    @csrf

    <input type="file" name="filename">

    <input type="submit" value="submit">
</form>

<a href="/storage/avatars/ukHB6QKYtUZZrR4ui0SL2DUf0KTP2UZZRZfp7QfL.pdf">Ссылка</a>
<a href="/storage/avatars/BObRQ4GNDy69RFQT5IWPhKVRHI6z4wCxeVhz89uN.xlsx">Ссылка XLSX</a>
