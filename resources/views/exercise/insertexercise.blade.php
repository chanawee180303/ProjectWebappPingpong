<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>เพิ่มข้อมูลการออกกำลังกายของคุณ</h3>
    <form method="POST" action="{{ route('exercise.insert') }}">
        @csrf
        <label>วันที่ออกกำลังกาย:</label>
        <input type="date" id="date" name="date" required><br>

        <label>เวลาที่ออกกำลังกาย:</label>
        <input type="number" id="time" name="time" required><br>

        <label>แคลอลี่:</label>
        <input type="number" id="calories" name="calories" required><br>

        <label>ประเภทการออกกำลังกาย:</label>
        <select id="type" name="type" required>
            <option value="Weight Training">Weight Training</option>
            <option value="Stretching">Stretching</option>
            <option value="Cardio">Cardio</option>
        </select><br>

        <button type="submit">เพิ่มข้อมูล</button>
    </form>
</body>
</html>
