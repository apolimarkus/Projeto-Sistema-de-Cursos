<header class="mb-5">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">E-escolar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo URL_BASE ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "curso/frmcurso" ?>">Cadastrar Curso</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "curso" ?>">Listar Curso</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestor Escolar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "escola/frmescola" ?>">Escola</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "escola" ?>">Listar Escolas</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "#" ?>">Funcionários</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "#" ?>">Alunos</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "#" ?>">Disciplinas</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "#" ?>">Trumas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo URL_BASE . "./admin"; ?>">Admin</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Palavra-chave" aria-label="Search">
                    <button class="btn btn-danger btn-outline-light" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
</header>