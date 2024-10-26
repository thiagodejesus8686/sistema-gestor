<style>
    #sectionAuthForm{
        max-width: 450px;
        height: 100%;
        margin: 0 auto;
        overflow-y: auto;
    }
    #sectionAuthForm .card{
        width: 100%;
    }
    #sectionAuthForm h1{
        font-weight: 600;
        color: var(--bs-gray);
        text-align: center;
    }
</style>

<section id="sectionAuthForm" class="d-flex flex-column align-items-center justify-content-center">
    <div class="card border-0">
        <div class="card-header border-0">
            <h1 class="h3">Efetue seu login</h1>
        </div>
        <div class="card-body shadow">
            <form
                action="<?= $this->baseUrl('?auth=validate'); ?>" 
                method="POST"
                name="form"
                id="form"
            >
                <div class="mb-3">
                    <label for="user" class="form-label">Usuário</label>
                    <input type="text" class="form-control" name="user" id="user" aria-describedby="userHelp">
                    <div id="userHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Senha</label>
                    <div class="input-group">
                        <input type="password" name="pass" class="form-control" id="pass">
                        <span class="btn btn-primary" onclick="togglePasswordViewer()"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar</label>
                </div>
                <button type="submit" class="btn btn-primary">
                    Logar <i class="fa fa-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</section>

<script>
    function togglePasswordViewer(){
        const pass=document.getElementById("pass")
        return pass.type=="password" ? pass.type="text" : pass.type="password"
    }
</script>