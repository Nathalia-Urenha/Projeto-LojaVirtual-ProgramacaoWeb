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
                    class="form-control"
                    required/>
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
                $("#uf").val(resposta.uf);
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
                    class="form-control"
                    required/>
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
                    class="form-control"
                    required/>
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
                    class="form-control"
                    required/>
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
                    class="form-control"
                    required/>
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
                    class="form-control"
                    required/>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
            <div class="form-group">
                <label for="uf" class="control-label">Estado</label>
                <select id="uf" class="form-control">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>
    </div>
