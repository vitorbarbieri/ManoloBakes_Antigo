<?= headerAdmin($data); ?>
<?= navAdmin($data); ?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="bi bi-speedometer"></i>&nbsp;
                <?= $data['page_title'] ?>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url() . '/' . $data['page_name']; ?>"><?= $data['page_name']; ?></a></li>
        </ul>
    </div>
    
</main>

<?= footerAdmin($data); ?>