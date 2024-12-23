<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maktabgacha Ta'lim</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin-bottom: 60px;
        }
        .header-bg {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 80px 0;
            text-align: center;
            border-bottom: 5px solid #fff;
        }
        .header-bg h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .header-bg p {
            font-size: 1.5em;
        }
        .card-group .card {
            margin-top: 20px;
            transition: transform 0.3s;
        }
        .card-group .card:hover {
            transform: scale(1.05);
        }
        .card-header {
            background-color: #2575fc;
            color: white;
            font-size: 1.2em;
            text-align: center;
            padding: 15px;
        }
        .card-body {
            background-color: #f9f9f9;
            padding: 30px;
        }
        .card-footer {
            background-color: #2575fc;
            color: white;
            text-align: center;
            padding: 10px;
            cursor: pointer;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .section-title {
            font-size: 2em;
            margin-bottom: 30px;
            color: #2575fc;
        }
        .list-group-item {
            background-color: #f0f8ff;
            border: none;
            padding: 15px;
            text-align: center;
            font-size: 1.2em;
        }
        .list-group-item:hover {
            background-color: #2575fc;
            color: white;
        }
        .team-section {
            background-color: #f9f9f9;
            padding: 50px 0;
        }
        .team-section .team-title {
            margin-bottom: 30px;
            color: #2575fc;
            text-align: center;
        }
        .team-section img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .footer {
            background-color: #2575fc;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="container text-center header-bg">
    <h1>Maktabgacha Ta'lim</h1>
    <p>Yangi avlod uchun eng yaxshi ta'lim!</p>
</div>

<!-- Ta'lim Bo'limlari -->
<div class="container section">
    <h2 class="text-center section-title">Ta'lim Bo'limlari</h2>
    <div class="card-group">
        <div class="card">
            <div class="card-header">Darslar</div>
            <div class="card-body">
                <img src="https://via.placeholder.com/150" alt="Darslar" class="img-fluid mb-3">
                <p>Yangi darslar va o'qituvchilar haqida ma'lumot.</p>
            </div>
            <div class="card-footer">Boshlash</div>
        </div>
        <div class="card">
            <div class="card-header">O'quv Materiallari</div>
            <div class="card-body">
                <img src="https://via.placeholder.com/150" alt="Materiallar" class="img-fluid mb-3">
                <p>O'quv materiallari va qo'llanmalar.</p>
            </div>
            <div class="card-footer">Ko'rish</div>
        </div>
        <div class="card">
            <div class="card-header">Takliflar</div>
            <div class="card-body">
                <img src="https://via.placeholder.com/150" alt="Takliflar" class="img-fluid mb-3">
                <p>Fikr va takliflaringizni yozing.</p>
            </div>
            <div class="card-footer">Yuborish</div>
        </div>
    </div>
</div>

<!-- So'nggi Yangiliklar -->
<div class="container section" id="news">
    <h2 class="text-center section-title">So'nggi Yangiliklar</h2>
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Yangilik 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Yangi darslar boshlanadi</h5>
                    <p>Yangi mavzularni o'rganish uchun tayyorlaning!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Yangilik 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ochiq darslar haftaligi</h5>
                    <p>Mart oyida o'qituvchilarimiz tomonidan ochiq darslar tashkil etiladi.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Oldinga</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Orqaga</span>
        </button>
    </div>
</div>

<!-- Jamoa Bo'limi -->
<div class="container team-section">
    <h2 class="team-title">Bizning Jamoamiz</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <img src="https://via.placeholder.com/120" alt="Jamoa a'zosi">
            <h5>O'qituvchi A</h5>
            <p>Matematika fani bo'yicha mutaxassis.</p>
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/120" alt="Jamoa a'zosi">
            <h5>O'qituvchi B</h5>
            <p>Ingliz tili o'qituvchisi.</p>
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/120" alt="Jamoa a'zosi">
            <h5>O'qituvchi C</h5>
            <p>Fizika va informatika fanlari.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; Maktabgacha ta'lim muassasasi</p>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
