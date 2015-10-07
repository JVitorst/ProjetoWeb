<?php include("cabecalho.php"); ?>

<h1>Formulário de fornecedor</h1>

<form action="adiciona-fornecedor.php" id="fornecedorForm">
    <div class="form-group">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <label class="control-label">Nome/Razão Social</label>
                <input type="text" class="form-control" name="razao_social" />
            </div>
            <div class="col-md-2 col-sm-6" selectContainer>
             <label class="control-label" >Tipo</label>
             <select class="form-control" name="tipo_pessoa">
                <option value="fisica">Fisica</option>
                <option value="juridica">Juridica</option>

            </select>
        </div>


        <div class="col-md-3 col-sm-3">
            <label class="control-label">Nome Fantasia</label>
            <input type="text" class="form-control" name="nome_fantasia" />
        </div>
        <div class="col-md-2 col-sm-2">
            <label class="control-label">CNPJ/CPF</label>
            <input type="text" class="form-control" name="cpf_cnpj" />
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-5 col-sm-5">
            <label class="control-label">Endereço ( Rua, Número)</label>
            <input type="text" class="form-control" name="endereco" />
        </div>
        
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <label class="control-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" />
        </div>
        <div class="col-md-1 col-sm-1">
            <label class="control-label">Estado</label>
            <input type="text" class="form-control" name="estado" />
        </div>
        <div class="col-md-3 col-sm-3">
            <label class="control-label">Contato - Email</label>
            <input type="text" class="form-control" name="email_contato" />
        </div>
        <div class="col-md-2 col-sm-2">
            <label class="control-label">Telefone (Fixo)</label>
            <input type="text" class="form-control" name="telefone" />
        </div>
        <div class="col-md-2 col-sm-2">
            <label class="control-label">Celular</label>
            <input type="text" class="form-control" name="celular" />
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label">Obersações</label>
    <textarea class="form-control" name="obs" rows="6"></textarea>
</div>


<button type="submit" class="btn btn-default">Validate</button>
</form>



<?php include("rodape.php"); ?>