<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
</head>
<body>
    <h1>Form Gaji</h1>
    <form action="/gaji" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="jabatan">Jabatan:</label><br>
        <input type="text" id="jabatan" name="jabatan"><br>
        <label for="gaji">Gaji:</label><br>
        <input type="number" id="gaji" name="gaji"><br>
        <label for="pendidikan">Pendidikan:</label><br>
        <input type="text" id="pendidikan" name="pendidikan"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
