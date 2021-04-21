@include('layouts.validacao')
<h4>Dados Pessoais:</h4>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="nome" class="control-label">Nome</label>
            <input type="text"
                name="nome"
                id="nome"
                value="{{isset($registro->nome) ? $registro->nome : ''}}"
                class="form-control @error('nome') is-invalid @enderror"/>
            @error('nome')
            <div class="invalid-feedback">
                <span ><strong>{{ $message }}</strong></span>
            </div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="email" class="control-label">E-mail</label>
            <input type="text"
                name="email"
                id="email"
                value="{{isset($registro->email) ? $registro->email : ''}}"
                class="form-control @error('email') is-invalid @enderror"/>

                @error('email')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror
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
                value="{{isset($registro->senha) ? $registro->senha : ''}}"
                class="form-control @error('senha') is-invalid @enderror"/>

                @error('senha')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="form-group">
            <label for="telefone" class="control-label">Telefone</label>
            <input type="text"
                name="telefone"
                id="telefone"
                value="{{isset($registro->telefone) ? $registro->telefone : ''}}"
                class="form-control @error('telefone') is-invalid @enderror"/>

                @error('telefone')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror
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
                value="{{isset($registro->cpf) ? $registro->cpf : ''}}"
                class="form-control @error('cpf') is-invalid @enderror"/>
                @error('cpf')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror
        </div>
    </div>
</div>




