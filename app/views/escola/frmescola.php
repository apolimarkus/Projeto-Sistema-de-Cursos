<div class="container mb-5 mt-5">
    <h1 class="display-6">Cadastre sua escola!</h1><br>
    <form class="row g-3" action="<?php echo URL_BASE."escola/salvar"; ?>" method="POST">
        <div class="col-md-6">
            <label for="" class="form-label">Unidade de Ensino</label>
            <input type="text" class="form-control" name="nome" value="<?php echo isset($escola) ? $escola->nome: ""; ?>" placeholder="Nome da sua escola">
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Código INEP</label>
            <input type="text" class="form-control" name="codigo_inep" value="<?php echo isset($escola) ? $escola->codigo_inep: ""; ?>" placeholder="Código inep">
        </div>
        <div class="col-3">
            <label for="" class="form-label">CNPJ da Escola</label>
            <input type="text" class="form-control" name="cnpj" value="<?php  echo isset($escola) ? $escola->cnpj: ""; ?>" placeholder="CNPJ">
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo isset($escola) ? $escola->telefone: "" ?>" placeholder="Telefone">
        </div>

        <div class="col-3">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo isset($escola) ? $escola->email: ""; ?>" placeholder="Email">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" value="<?php echo isset($escola) ? $escola->endereco: ""; ?>" placeholder="Endereço Completo">
        </div>

        
        <div class="col-12">
            <input type="hidden" name="idescola" value="<?php echo isset($escola) ? $escola->idescola: null; ?>">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>