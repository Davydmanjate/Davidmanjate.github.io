<?php $__env->startSection('content'); ?>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
			<h4><i>Bem vindo a Plataforma de Requisiçã do Defensor</i></h4>
                <strong>Caro Cidadão!</strong> Introduza seus dados válidos para facilitar o contactar com a nossa
                equipa.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">Campo de Cadastro</h4>

                    <form class="row g-3">
                        <div class="col-md-7">
                            <label for="inputpnome" class="form-label">Primeiro Nome</label>
                            <input type="text" class="form-control" id="inputpnome" autofocus>
                        </div>
                        <div class="col-md-5">
                            <label for="inputapelido" class="form-label">Apelido</label>
                            <input type="text" class="form-control" id="inputapelido">
                        </div>
                        <div class="col-8">
                            <label for="inputEmail" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com">
                        </div>
                        <div class="col-md-4">
                            <label for="inputWhatspp" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="inputWhatspp" placeholder="82xxxxxxx">
                        </div>
						<div class="col-md-4">
                            <label for="inputProv" class="form-label">Provincia</label>
                            <select id="inputEstado" class="form-select">
                                <option selected>Escolher ...</option>
                                <option>Maputo</option>
								<option>Maputo-Cidade</option>
                                <option>Gaza</option>
                                <option>Inhambane</option>
                                <option>Manica</option>
								<option>Sofala</option>
								<option>Zambézia</option>
								<option>Nampula</option>
								<option>Tete</option>
								<option>Niassa</option>
								<option>Cabo Delgado</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputDistrit" class="form-label">Distrito</label>
                            <input type="text" class="form-control" id="inputDistrit">
                        </div>
                        <div class="col-md-4">
                            <label for="inputCidad" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="inputCidad">
                        </div>
                        <div class="col-md-4">
                            <label for="inputContact" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="inputContact" placeholder="84xxxxxxx">
                        </div>
                        <div class="col-md-4">
                            <label for="inputDate" class="form-label">Data de Audiência</label>
                            <input type="date" class="form-control" id="inputDate" value="2023-05-24">
                        </div>
							  
                        <div class="col-md-2">
                            <label for="inputEstado" class="form-label">Estado Civil</label>
                            <select id="inputEstado" class="form-select">
                                <option selected>Escolher ...</option>
                                <option>Solteiro/a</option>
                                <option>Casado/a</option>
                                <option>Divorciado/a</option>
                                <option>Viúvo/a</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputIdade" class="form-label">Idade</label>
                            <input type="number" class="form-control" id="inputIdade">
                        </div>

                        <div class="col-md-4">
                            <label for="inputEstado" class="form-label">Selecione o Assunto</label>
                            <select id="inputEstado" class="form-select">
                                <option selected> .....</option>
                                <option>Requisição de um Defensor</option>
                                <option>Pedido de Assessoria</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="inputContact" class="form-label">Escolhe um Advogado</label>
                            <input type="text" class="form-control" id="inputContact" placeholder="Advogado">
                        </div>

                        <div class="col-md-4">
                            <label for="inputContact" class="form-label">Confirma Nome</label>
                            <input type="text" class="form-control" id="inputContact" placeholder="Cliente">
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Digite aqui sua mensagem" id="floatingTextarea"
                                style="height: 200px;"></textarea>
                            <label for="floatingTextarea">Mensagem</label>
                        </div>

                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>



        </form>
    </div>
    <!-- Form End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base1.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAMs\resources\views/form.blade.php ENDPATH**/ ?>