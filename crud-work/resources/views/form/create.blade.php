<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Kayıt Sayfası</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>
<body style="background-color: darkblue; color: white;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{route('form.store')}}">
            @csrf
            @method('post')
                <h1 class="text-center" style="margin-top:50px">Kullanıcı Kayıt Formu</h1>
                <div class="row" style="margin-top:50px">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ad" class="form-label">Ad</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Adınızı girin" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="soyad" class="form-label">Soyad</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Soyadınızı girin" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-posta</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-posta adresinizi girin" required>
                </div>
                <div class="mb-3">
                    <label for="sifre" class="form-label">Şifre</label>
                    <input type="password" class="form-control" id="sifre" placeholder="Şifrenizi girin" required>
                </div>
                <div class="mb-3">
                    <label for="sifreTekrar" class="form-label">Şifre Tekrar</label>
                    <input type="password" class="form-control" id="sifreTekrar" placeholder="Şifrenizi teyit edin" required>
                </div>
                <div class="text-end"><button type="submit" class="btn btn-success">Kayıt Ol</button></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
