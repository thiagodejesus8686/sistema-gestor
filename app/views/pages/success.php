
<section class="py-5">
    <div class="card">
        <div class="card-body text-center">
            <?php
                $msg="Tudo certo por aqui!";
                if(isset($_SESSION['flashMessage'])){
                    $msg=$_SESSION['flashMessage'];
                    $this->removeFlashMessage();
                }
            ?>
            <h1><?= $msg; ?></h1>
            <br />
            <a href="<?= $this->baseUrl(); ?>" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i> voltar à página inicial
            </a>
        </div>
    </div>
</section>