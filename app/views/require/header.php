<header id="header">
    
    <a href="<?= $this->baseUrl(); ?>" id="brand">
        <span>Sistema</span>
        <span>Gestor</span>
    </a>

    <div id="headerContent" class="d-flex align-items-center justify-content-between">
        <?php if($this->verifyUserAuthenticated()){ ?>
        <div>
            <button class="btn" onclick="toggleCollapseMenu()">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Action</a></li>
                        <li><hr class="dropdown-separator" /></li>
                        <li><a href="<?= $this->baseUrl('?auth=logout'); ?>" class="dropdown-item">Sair</a></li>
                    </ul>
                </li>
            </ul>
            <button class="btn btn-sm">
                <i class="fa fa-sliders"></i>
            </button>
        </div>
        <?php } ?>
    </div>

</header>

<script>
    function toggleCollapseMenu(){
        return document.getElementById("main").classList.toggle("collapsed")
    }
</script>