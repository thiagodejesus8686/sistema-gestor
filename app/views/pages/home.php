<?php
    use Controller\Costumers;
    $customers=new Costumers;
?>

<style>
    #folders{
        display: flex;
        flex-flow: row;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        position: relative;
        width: 100%;
        overflow-y: auto;
        background: rgb(235 235 235);
    }
    #folders .folder{
        display: flex;
        flex-flow: column;
        align-items: center;
        justify-content: center;
        position: relative;
        background: rgb(255 255 255);
        width: auto;
        max-width: 400px;
        min-width: 250px;
        height: 150px;
        text-align: center;
        box-shadow: 3px 3px 10px rgb(0 0 0 / 15%);
        text-decoration: none;
        margin: 1rem;
    }
    #folders .folder i.fa{
        font-size: 2rem;
        color: rgb(145 145 145);
    }
    #folders .folder small{
        color: rgb(44 44 44);
    }
</style>

<section class="">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <h1>Gerenciar Projetos</h1>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-around" style="column-gap: 10px;">
                <a href="" class="btn btn-primary" title="Registrar cliente"><i class="fa fa-plus-circle"></i></a>
                <div class="btn-group">
                    <button class="btn btn-primary" title="Exibir cards"><i class="fa fa-th"></i></button>
                    <button class="btn btn-primary" title="Exibir lista"><i class="fa fa-list"></i></button>
                </div>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Digite o cliente aqui" />
                    <button class="btn btn-primary">
                        <i class="fa fa-search"></i> Pesquisar
                    </button>
                </div>
            </div>
            <hr />
            <br />
            <!-- criar módulos para visualizar clientes -->
            <div id="folders">
                <?php $customers->get(); ?>
            </div>
        </div>
    </div>
</section>