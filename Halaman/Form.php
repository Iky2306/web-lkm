<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            display: block;
        }
        input[type="text"] {
            margin-bottom: 10px;
            width: 300px;
            padding: 8px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="halaman/Cek.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="umur">Umur:</label>
        <input type="text" id="umur" name="umur">
        <br>
        <input type="submit" value="Submit">
    </form>
<script>
    window.onload = function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const nama = document.getElementById('nama').value;
            const umur = document.getElementById('umur').value;
            alert(`Nama: ${nama}\nUmur: ${umur}`);
        });
    }
</script>
</body>
</html>

