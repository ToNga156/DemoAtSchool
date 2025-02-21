<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính đơn giản</title>
    <link rel="stylesheet" href="assest/css/tong.css">
</head>
<body>

    <h2>Nhập hai số để tính tổng</h2>

    <form action="/tong" method="POST">
        @csrf
        <input type="number" name="a" placeholder="Nhập số a" value="{{ $a ?? '' }}" required>
        <input type="number" name="b" placeholder="Nhập số b" value="{{ $b ?? '' }}" required>
        <br>
        <button type="submit">Tính tổng</button>
    </form>

    @if(isset($sum))
        <h3>Kết quả: {{ $a }} + {{ $b }} = {{ $sum }}</h3>
    @endif

</body>
</html>
