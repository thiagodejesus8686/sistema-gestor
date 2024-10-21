<header id="header">
    
    <a href="" id="brand">
        <span>Sistema</span>
        <span>Gestor</span>
    </a>

    <div id="headerContent">

        <button class="btn btn-primary"
            onclick="toggleCollapseMenu()"
        >
            <i class="fa fa-bars"></i>
        </button>

    </div>

</header>

<script>
    function toggleCollapseMenu(){
        return document.getElementById("main").classList.toggle("collapsed")
    }
</script>