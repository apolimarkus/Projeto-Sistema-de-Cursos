<div class="container mb-5">

    <h1>Cursos Cadastrados no Sistema</h1>
    <br>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Nome do Curso</th>
                <th scope="col">Instituição</th>
                <th scope="col">Carga Horária</th>
                <th scope="col">Valor</th>
                <th scope="cols" collspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $curso) { ?>
                <tr>


                    <td>
                        <?php echo $curso->idcurso; ?>
                    </td>
                    <td>
                        <?php echo $curso->nome; ?>
                    </td>
                    <td>
                        <?php echo $curso->instituicao; ?>
                    </td>
                    <td>
                        <?php echo $curso->carga_horaria ?>
                    </td>
                    <td>
                        <?php echo $curso->valor; ?>
                    </td>
                    <td>
                        <a href="<?php echo URL_BASE . "curso/edit/" . $curso->idcurso; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="<?php echo URL_BASE . "curso/excluir/" . $curso->idcurso; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>