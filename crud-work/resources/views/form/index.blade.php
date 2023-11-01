<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Verileri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: rgb(245,245,245); margin-top:50px;">
    <div class="container">
        <h1 class="mt-3">Kullanıcı Bilgileri</h1>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        <div style="text-align:right">
            <a class="btn-lg btn-success" href="{{route('form.create')}}">Yeni Kullanıcı Ekle</a>
        </div>
        <div id="table-container" style="text-align: center; margin-top: 30px;" >
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>Email</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                @foreach($form as $form)
                    <tr>
                        <td>{{$form->id}}</td>
                        <td>{{$form->name}}</td>
                        <td>{{$form->surname}}</td>
                        <td>{{$form->email}}</td>
                        <td style="display:flex; align-items:center; justify-content:center;">
                        <a class="btn-sm btn-primary" style="margin-right:10px"  href="{{route('form.edit', ['form' => $form])}}">Düzenle</a>
                        <form method="post" action="{{route('form.destroy', ['form' => $form])}}">
                            @csrf
                            @method('delete')
                            <input class="btn-sm btn-danger" style="margin-left:10px" type="submit" value="Sil">
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
