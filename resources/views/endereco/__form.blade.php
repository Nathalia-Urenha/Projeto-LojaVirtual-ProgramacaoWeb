@include('layouts.validacao')
<h4>Dados do Endereço:</h4>
<!--Formulário-->
<form>
   
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
            <div class="form-group">
                <label for="cep" class="control-label">CEP</label>
                <input type="text"
                    name="cep"
                    id="cep"
                    value="{{isset($registro->cep) ? $registro->cep : ''}}"
                    class="form-control @error('cep') is-invalid @enderror"/>
                    @error('cep')
                    <div class="invalid-feedback">
                        <span ><strong>{{ $message }}</strong></span>
                    </div>
                    @enderror
            </div>
        </div>
    </div>

<!--Importando Script Jquery-->
<script type="text/javascript" src="{{ asset('lib/bootstrap/js/jquery-3.2.1.min.js') }}"></script>

<script type="text/javascript">
    $("#cep").focusout(function(){
        //Início do Comando AJAX
        $.ajax({
            //O campo URL diz o caminho de onde virá os dados
            //É importante concatenar o valor digitado no CEP
            url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
            //Aqui você deve preencher o tipo de dados que será lido,
            //no caso, estamos lendo JSON.
            dataType: 'json',
            //SUCESS é referente a função que será executada caso
            //ele consiga ler a fonte de dados com sucesso.
            //O parâmetro dentro da função se refere ao nome da variável
            //que você vai dar para ler esse objeto.
            success: function(resposta){
                //Agora basta definir os valores que você deseja preencher
                //automaticamente nos campos acima.
                $("#logradouro").val(resposta.logradouro);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#estado").val(resposta.uf);
                //Vamos incluir para que o Número seja focado automaticamente
                //melhorando a experiência do usuário
                $("#numero").focus();
            }
        });
    });
</script>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
            <div class="form-group">
                <label for="logradouro" class="control-label">Logradouro</label>
                <input type="text"
                    name="logradouro"
                    id="logradouro"
                    value="{{isset($registro->logradouro) ? $registro->logradouro : ''}}"
                    class="form-control @error('logradouro') is-invalid @enderror"/>
                    @error('logradouro')
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
                <label for="numero" class="control-label">Número</label>
                <input type="text"
                    name="numero"
                    id="numero"
                    value="{{isset($registro->numero) ? $registro->numero : ''}}"
                    class="form-control @error('numero') is-invalid @enderror"/>
                    @error('numero')
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
                <label for="complemento" class="control-label">Complemento</label>
                <input type="text"
                    name="complemento"
                    id="complemento"
                    value="{{isset($registro->complemento) ? $registro->complemento : ''}}"
                    class="form-control @error('complemento') is-invalid @enderror"/>
                    @error('complemento')
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
                <label for="bairro" class="control-label">Bairro</label>
                <input type="text"
                    name="bairro"
                    id="bairro"
                    value="{{isset($registro->bairro) ? $registro->bairro : ''}}"
                    class="form-control @error('bairro') is-invalid @enderror"/>
                    @error('bairro')
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
                <label for="cidade" class="control-label">Cidade</label>
                <input type="text"
                    name="cidade"
                    id="cidade"
                    value="{{isset($registro->cidade) ? $registro->cidade : ''}}"
                    class="form-control @error('cidade') is-invalid @enderror"/>
                    @error('cidade')
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
                <label for="estado" class="control-label">Estado</label>
                <select name="estado" 
                        id="estado"
                        class="form-control">
                    <option value="AC"<?php  if(isset($registro->estado)){echo selected( 'AC', $registro->estado );}?>>Acre</option>
                    <option value="SP"<?php  if(isset($registro->estado)){echo selected( 'SP', $registro->estado );}?>>São Paulo</option>
                </select>
            </div>
        </div>
    </div>

<?php
function selected( $value, $selected ){
    return $value==$selected ? ' selected="selected"' : '';
}