<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300&family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">   

</head>
<body>
    <h1 id="titulo" class="col-8 text-secondary">Formulario Cadastro</h1>
    <form id="form" class="row g-3" style="margin-top: 20px;">
        <div class="row g-2 col-10" style="margin:auto;">
            <div class="col-5">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control verify" id="inputName" placeholder="Digite seu nome!" required>
            </div>
            <div class="col-4">
                <label for="inputLastName" class="form-label">Sobrenome</label>
                <input type="text" name="lastname" class="form-control verify" id="inputLastName" placeholder="Digite seu sobrenome!" required>
            </div>
            <div class="col-3">
                <label for="inputDate" class="form-label">Nascimento</label>
                <input type="date" name="date" class="form-control verify" id="inputDate" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control verify" id="inputEmail" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control verify" id="inputPassword" required>
            </div>
            <div class="col-3">
                <label for="inputCep" class="form-label">Cep</label>
                <input type="text" name="cep" class="form-control verify" id="inputCep" placeholder="99999-999" required>
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" name="address" class="form-control verify" id="inputAddress" placeholder="Rua São caetano" required>
            </div>
            <div class="col-3">
                <label for="inputNumber" class="form-label">Numero</label>
                <input type="text" name="number" class="form-control verify" id="inputNumber" placeholder="27" required>
            </div>
            <div class="col-2">
                <label for="inputComplement" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputComplement" placeholder="303">
            </div>
            <div class="col-md-1">
                <label for="inputState" class="form-label">UF</label>
                <select id="inputState" name="state" class="form-select verify" required>
                <option selected>Escolha</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" name="city" class="form-control verify" id="inputCity" placeholder="Rio de Janeiro" required>
            </div>
            <div class="col-md-4">
                <label for="inputPhoto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="inputPhoto">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="js/validaCampos.js"></script>
</body>
</html>