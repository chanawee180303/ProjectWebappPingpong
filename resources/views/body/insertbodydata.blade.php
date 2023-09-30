<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มข้อมูล</title>
</head>

<body>
    <h3>เพิ่มข้อมูลร่างกายของคุณ</h3>
    <form method="POST" action="{{ route('body.showinsert') }}">
        @csrf
        <label>ส่วนสูง:</label>
        <input type="number" id="height" name="height" required><br>

        <label>น้ำหนัก:</label>
        <input type="number" id="weight" name="weight" required><br>

        <label>รอบเอว:</label>
        <input type="number" id="waist" name="waist" required><br>

        <label>รอบอก:</label>
        <input type="number" id="chest" name="chest" required><br>

        <label>สะโพก:</label>
        <input type="number" id="hips" name="hips" required><br><br>

        <button type="submit">เพิ่มข้อมูล</button>
    </form>
</body>

</html>
