<h3 class="mt-3 text-primary">Cliente</h3>

<div class="card shadow mt-3">
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">
            Nome
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Nome" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">
            Email
        </label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" name="btnsalvar" value="Cadastrar">
        </div>
        
        <a href="?p=clientes" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>