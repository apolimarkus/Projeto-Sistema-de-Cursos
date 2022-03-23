<div class="container mb-5">
    <h1 class="display-6">Escolha seu curso e comece a estudar!</h1><br>
    <form class="row g-3" action="<?php echo URL_BASE."curso/salvar"; ?>" method="POST">
        <div class="col-md-6">
            <label for="" class="form-label">Curso</label>
            <input type="text" class="form-control" name="nome" value="<?php echo isset($curso) ? $curso->nome: ""; ?>" placeholder="Informe o nome do curso">
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Instituição</label>
            <input type="text" class="form-control" name="instituicao" value="<?php echo isset($curso) ? $curso->instituicao: ""; ?>" placeholder="Instituição de Ensino">
        </div>
        <div class="col-3">
            <label for="" class="form-label">Area do Curso</label>
            <input type="text" class="form-control" name="area_curso" value="<?php  echo isset($curso) ? $curso->area_curso: ""; ?>" placeholder="Insira a area do curso">
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Carga Horária</label>
            <input type="text" class="form-control" name="carga_horaria" value="<?php echo isset($curso) ? $curso->carga_horaria: "" ?>" placeholder="CH total">
        </div>

        <div class="col-3">
            <label for="" class="form-label">Duração do Curso</label>
            <input type="text" class="form-control" name="duracao_curso" value="<?php echo isset($curso) ? $curso->duracao_curso: ""; ?>" placeholder="Tempo estimado">
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Data de Inicio</label>
            <input type="date" class="form-control" name="ano" value="<?php echo isset($curso) ? $curso->ano: ""; ?>">
        </div>

        <div class="col-md-3">
            <label for="" class="form-label">Valor do Curso</label>
            <input type="text" class="form-control" name="valor" value="<?php echo isset($curso) ? $curso->valor: ""; ?>" placeholder="Valor (R$)">
        </div>

        <div class="col-12">
            <input type="hidden" name="idcurso" value="<?php echo isset($curso) ? $curso->idcurso: null; ?>">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>