<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แก้ไขข้อมูล</title>
</head>

<body>
    <h3>แก้ไขข้อมูลร่างกายที่คุณเพิ่มล่าสุด</h3>
    <form action="{{ route('body.update', $body->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>ส่วนสูง:</label>
        <input type="number" name="height" value="{{ $body->height }}"><br>

        <label>น้ำหนัก:</label>
        <input type="number" name="weight" value="{{ $body->weight }}"><br>

        <label>รอบเอว:</label>
        <input type="number" name="waist" value="{{ $body->waist }}"><br>

        <label>รอบอก:</label>
        <input type="number" name="chest" value="{{ $body->chest }}"><br>

        <label>สะโพก:</label>
        <input type="number" name="hips" value="{{ $body->hips }}"><br>

        <button type="submit">บันทึกการแก้ไข</button>
    </form>


</body>

</html>
