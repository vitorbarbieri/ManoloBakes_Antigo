<!-- Modal -->
<div class="modal" id="modalFormFuncao" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nova Função</h5>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="formFuncao" name="formFuncao">
                            <div class="mb-3">
                                <label class="form-label"><span style="color: red;">*</span> Campos obrigatórios</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nome<span style="color: red;"> *</span></label>
                                <input class="form-control" id="txtNome" name="txtNome" type="text" tabindex="1" placeholder="Nome da função">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descrição<span style="color: red;"> *</span></label>
                                <textarea class="form-control" id="txtDescricao" name="txtDescricao" rows="2" tabindex="2" placeholder="Descrição da função"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Estado<span style="color: red;"> *</span></label>
                                <select class="form-control" id="listStatus" name="listStatus" tabindex="3">
                                    <option value="0">-- Selecionar --</option>
                                    <option value="1">Ativo</option>
                                    <option value="2">Inativo</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" accesskey="s" tabindex="4">
                                    <i class="fa-solid fa-circle-check"></i>&nbsp;
                                    <u>S</u>alvar
                                </button>
                                <button type="button" class="btn btn-secondary" accesskey="c" data-bs-dismiss="modal" tabindex="5">
                                    <i class="fa-solid fa-circle-xmark"></i>&nbsp;
                                    <u>C</u>ancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>