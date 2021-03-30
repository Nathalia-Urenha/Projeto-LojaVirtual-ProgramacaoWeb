<h4>Dados Pessoais:</h4>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="nome" class="control-label">Nome</label>
            <input type="text"
                name="nome"
                id="nome"
                value="{{isset($registro->nome ? $registro->nome : '')}}"
                class="form-control"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="e-mail" class="control-label">E-mail</label>
            <input type="text"
                name="e-mail"
                id="e-mail"
                value="{{isset($registro->email ? $registro->email : '')}}"
                class="form-control"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="senha" class="control-label">Senha</label>
            <input type="text"
                name="senha"
                id="senha"
                value="{{isset($registro->senha ? $registro->senha : '')}}"
                class="form-control"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="senha" class="control-label">Telefone</label>
            <input type="text"
                name="telefone"
                id="telefone"
                value="{{isset($registro->telefone ? $registro->telefone : '')}}"
                class="form-control"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="senha" class="control-label">CPF</label>
            <input type="text"
                name="cpf"
                id="cpf"
                value="{{isset($registro->cpf ? $registro->cpf : '')}}"
                class="form-control"/>
        </div>
    </div>
</div>


