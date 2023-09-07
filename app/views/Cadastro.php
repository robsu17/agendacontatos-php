<div class="conteudo">
    <section class="mt-4">
        <div class="titulo h5 mb-0"><h2><?php echo isset($contato) ? "Editar cadastro" : "Formulario de cadastro"?></h2></div>
        <div class="base-form">
            <div class="caixa-form">
                <form action="<?php echo isset($contato) ? URL_BASE . "contato/editarContato/" . $contato->id_contato : URL_BASE . "contato/salvar"?>" method="POST">
                    <div class="rows">
                        <div class="col-12 d-flex text-justify-center">
                            <span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
                            <span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>

                        </div>
                    </div>
                    <div class="rows msg-form">
                        <div class="col-3 position-relative">
                            <img src="<?php echo URL_BASE?>assets/img/img-usuario.png" class="img-fluido foto">
                            <div  class="foto-file">
                                <input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
                            </div>
                            <small class="d-block text-center pt-1 pb-2"><b>nome_do_arquivo.jpg</b></small>
                        </div>

                        <div class="col-9">
                            <div class="rows">
                                <div class="col-8">
                                    <label>Nome</label>
                                    <input name="nome" value="<?php echo isset($contato) ? $contato->nome : ""?>" type="text" placeholder="Insira um nome" class="form-campo" autocomplete="off">
                                </div>
                                <div class="col-4">
                                    <label>CPF</label>
                                    <input name="cpf" value="<?php echo isset($contato) ? $contato->cpf : ""?>" type="text" placeholder="Insira seu CPF" class="form-campo">
                                </div>
                                <div class="col-3">
                                    <label>Nascimento</label>
                                    <input name="nascimento" value="<?php echo isset($contato) ? $contato->nascimento : ""?>" type="date" placeholder="Insira seu nascimento" class="form-campo">
                                </div>

                                <div class="col-3">
                                    <label>Celular</label>
                                    <input name="celular" value="<?php echo isset($contato) ? $contato->celular : ""?>" type="text" placeholder="Insira seu celular" class="form-campo">
                                </div>

                                <div class="col-6">
                                    <label>Email</label>
                                    <input name="email" value="<?php echo isset($contato) ? $contato->email : ""?>" type="text" placeholder="Insira seu Email" class="form-campo" autocomplete="off">
                                </div>
                                <div class="col-3">
                                    <label>Cep</label>
                                    <input name="cep" value="<?php echo isset($contato) ? $contato->cep : ""?>" type="text" placeholder="Insira seu cep" class="form-campo">
                                </div>

                                <div class="col-9">
                                    <label>Endereço</label>
                                    <input name="endereco" value="<?php echo isset($contato) ? $contato->endereco : ""?>" type="text" placeholder="Insira seu endereço" class="form-campo">
                                </div>
                                <div class="col-6">
                                    <label>Complemento</label>
                                    <input name="complemento" value="<?php echo isset($contato) ? $contato->complemento : ""?>" type="text" placeholder="Insira um complemento" class="form-campo">
                                </div>
                                <div class="col-3">
                                    <label>Número</label>
                                    <input name="numero" value="<?php echo isset($contato) ? $contato->numero : ""?>" type="text" placeholder="Insira um Número" class="form-campo">
                                </div>

                                <div class="col-3">
                                    <label>UF</label>
                                    <input name="uf" value="<?php echo isset($contato) ? $contato->uf : ""?>" type="text" placeholder="Insira sua UF" class="form-campo">
                                </div>
                                <div class="col-6">
                                    <label>Bairro</label>
                                    <input name="bairro" value="<?php echo isset($contato) ? $contato->bairro : ""?>" type="text" placeholder="Insira seu bairro" class="form-campo">
                                </div>

                                <div class="col-6">
                                    <label>Cidade</label>
                                    <input name="cidade" value="<?php echo isset($contato) ? $contato->cidade : ""?>" type="text" placeholder="Insira sua cidade" class="form-campo">
                                </div>



                                <div class="col-4 m-auto">
                                    <input type="hidden" name="id_cliente" value="" />
                                    <input type="submit" value="<?php echo isset($contato) ? "atualizar" : "cadastrar"?>" class="btn btn-verde width-100">
                                </div>

                            </div>
                        </div>

                </form>
            </div>
        </div>
</div>
</div>
</div>