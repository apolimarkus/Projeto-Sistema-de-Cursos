<div class="container mb-5">

    <h1>Escolas Cadastradas no Sistema</h1>
    <br>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Nome da Escola</th>
                <th scope="col">telefone</th>
                <th scope="col">Email</th>
                <th scope="col">CNPJ</th>
                <th scope="cols" collspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $escola) { ?>
                <tr>


                    <td>
                        <?php echo $escola->idescola; ?>
                    </td>
                    <td>
                        <?php echo $escola->nome; ?>
                    </td>
                    <td>
                        <?php echo $escola->telefone; ?>
                    </td>
                    <td>
                        <?php echo $escola->email ?>
                    </td>
                    <td>
                        <?php echo $escola->cnpj; ?>
                    </td>
                    <td>
                        <a href="<?php echo URL_BASE . "escola/edit/" . $escola->idescola; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="<?php echo URL_BASE . "escola/excluir/" . $escola->idescola; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>