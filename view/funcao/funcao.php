<?php
headerAdmin($data);
navAdmin($data);
getModal('modalFuncao', $data);
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="bi bi-speedometer"></i>&nbsp;
                <?= $data['page_title'] ?>&numsp;
                <button class="btn btn-primary" type="button" onclick="openModal();">
                    <i class="fa-solid fa-circle-plus"></i>
                    &nbsp;Novo
                </button>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url() . '/' . $data['page_name']; ?>"><?= $data['page_name']; ?></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Funções de Usuário</div>
            </div>
        </div>
    </div>
</main>

<?= footerAdmin($data); ?>