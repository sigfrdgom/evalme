<nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
    <a class="navbar-brand" href="<?= base_url()?>">EVALUAME &star;</a>
    <button class="navbar-toggler d-lg-none font-weight-bold" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-label="Toggle navigation">&equiv;</button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('preguntas')?>">Preguntas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('respuestas')?>">Respuestas</a>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mantenimientos</a>
                <div class="dropdown-menu bg-dark " aria-labelledby="dropdownId">
                    <a class="dropdown-item text-white bg-dark" onclick="mostrarCategorias()">Categorias</a>
                    <!-- href="<?= base_url('categorias')?>" -->
                    <a class="dropdown-item text-white bg-dark" onclick="mostrarDocentes()">Docentes</a>
                    <!-- href="<?= base_url('docente')?>" -->
                    <a class="dropdown-item text-white bg-dark" onclick="mostrarEspecialidades()">Especialidades</a>
                    <!-- href="<?= base_url('especialidades')?>" -->
                    <a class="dropdown-item text-white bg-dark" onclick="mostrarInstituciones()">Instituciones</a>
                    <!-- href="<?= base_url('instituciones')?>" -->
                    <a class="dropdown-item text-white bg-dark" onclick="mostrarPreguntas()">Preguntas</a>
                    <!-- href="<?= base_url('preguntas')?>" -->
                    <a class="dropdown-item text-white bg-dark"onclick="mostrarRespuestas()" >Respuestas</a>
                    <!-- href="<?= base_url('respuestas')?>" -->
                </div>
            </li>
        </ul>
    </div>
</nav>