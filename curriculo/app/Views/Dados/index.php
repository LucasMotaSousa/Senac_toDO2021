<section id='dadosPessoais'>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <div class="container row-align-items-center need-validation">
            <form method="post" aria-current="page">
                <div class="mb-4 col-md-7 col-lg-8">
                    <div class="needs-validation">
                        <div class="row g-3">
                            <div class="col-sm-6">
                            <label for="name">Nome:</label>
                            <input type="text" placeholder="Coloque seu nome" name="nome" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-md-7 col-lg-8">
                    <div class="needs-validation">
                        <div class="row g-3">
                            <div class="col-sm-6">
                            <label for="nacimento">Data de Nacimento:</label>
                            <input type="date" name="nacimento" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-md-7 col-lg-8">
                    <div class="needs-validation">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="sexo">Genero:</label>
                                <select name="sexo" required>
                                    <option></option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-md-7 col-lg-8">
                    <div class="needs-validation">
                        <div class="row g-3">
                            <div class="col-sm-6">
                            <label for="civil">Estado Civil:</label>
                            <select name="civil" required>
                                <option></option>
                                <option value="solteiro">Solteiro(a)</option>
                                <option value="casado">Casado(a)</option>
                                <option value="divorciado">Divorciado(a)</option>
                                <option value="viuvo">Viuvo(a)</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Proximo</button>
            </form>
        </div>
    </div>
</section>
</main>