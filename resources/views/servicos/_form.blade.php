@csrf
<div class="card">
    <div class="card-body">
        <fieldset>
            <h2>Identificação</h2>
            <div class="form-row">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input
                     type="text"
                     class="form-control"
                     id="nome"
                     placeholder="Nome do serviço"
                     name="nome"
                     value="{{ isset($servico->nome) ? $servico->nome : ''}}"
                    >
                </div>
                <div class="col">
                    <label for="icone">Ícone</label>
                     <select name="icone" id="icone" class="form-control">
                        <option value="">Selecione um icone</option>
                        <option value="twf-cleaning-1" {{
                         isset($servico) &&
                        $servico->icone === 'twf-cleaning-1' ? 'selected' : ''}}>Icone 1</option>
                        <option value="twf-cleaning-2"
                        {{
                        isset($servico) &&
                        $servico->icone === 'twf-cleaning-2' ? 'selected' : ''}}
                        >Icone 2</option>
                        <option value="twf-cleaning-3"
                        {{
                        isset($servico) &&
                        $servico->icone === 'twf-cleaning-3' ? 'selected' : ''}}
                        >Icone 3</option>
                     </select>
                </div>
                <div class="col">
                    <label for="posicao">Posição na plataforma</label>
                    <input
                    type="text"
                    class="form-control"
                    id="posicao"
                    placeholder="Posição do servoço na plataforma"
                    name="posicao"
                    value="{{ isset($servico->posicao) ? $servico->posicao : ''}}"
                    >
                </div>
            </div>
            <h2 class="mt-2">Globais</h2>
            <div class="form-row">
                <div class="col">
                    <label for="valor">Valor Mínimo</label>
                    <input
                     type="text"
                     class="form-control"
                     id="valor_minimo"
                     name="valor_minimo"
                     value="{{ isset($servico->valor_minimo) ? $servico->valor_minimo : ''}}"
                     placeholder="Valor mínimo do serviço">
                </div>
                <div class="col">
                    <label for="quantidade_horas">Quantidade Mínima de horas</label>
                    <input
                     type="text"
                     class="form-control" id="quantidade_horas" name="quantidade_horas"
                     value="{{ isset($servico->quantidade_horas) ? $servico->quantidade_horas : ''}}"
                     placeholder="Quantidade mínima de horas"
                     >
                </div>
                <div class="col">
                    <label for="porcentagem">Porcentagem de Comissão</label>
                    <input
                     type="text"
                     class="form-control"
                     id="porcentagem"
                    placeholder="Porcentagem de Comissão" name="porcentagem"
                    value="{{ isset($servico->porcentagem) ? $servico->porcentagem : ''}}"
                    >
                </div>
            </div>
            <h2 class="mt-2">Cômodos</h2>
            <div class="form-row">
                <div class="col">
                    <label for="valor_quarto">Valor por Quarto</label>
                    <input
                     type="text"
                     class="form-control"
                     id="valor_quarto"
                     name="valor_quarto"
                     placeholder="Valor por quarto"
                     value="{{ isset($servico->valor_quarto) ? $servico->valor_quarto : ''}}"
                     >
                </div>
                <div class="col">
                    <label for="horas_quarto">Quantidade de Horas por quarto</label>
                    <input
                    type="text"
                    class="form-control"
                    id="horas_quarto"
                    name="horas_quarto"
                    placeholder="Quantidade de Horas por quarto"
                    value="{{ isset($servico->horas_quarto) ? $servico->horas_quarto : ''}}"
                    >
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="valor_sala">Valor por Sala</label>
                    <input
                    type="text"
                    class="form-control"
                    id="valor_sala"
                    placeholder="Valor por sala" name="valor_sala"
                    value="{{ isset($servico->valor_sala) ? $servico->valor_sala : ''}}"
                    >
                </div>
                <div class="col">
                    <label for="horas_sala">Quantidade de Horas por sala</label>
                    <input
                    type="text"
                    class="form-control"
                    id="horas_sala" name="horas_sala"
                    placeholder="Quantidade de Horas por sala"
                    value="{{ isset($servico->horas_sala) ? $servico->horas_sala : ''}}"
                    >
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="valor_banheiro">Valor por Banheiro</label>
                    <input
                    type="text"
                    class="form-control"
                    id="valor_banheiro"
                    placeholder="Valor por banheiro" name="valor_banheiro"
                    value="{{ isset($servico->valor_banheiro) ? $servico->valor_banheiro : ''}}"
                    >
                </div>
                <div class="col">
                    <label for="horas_banheiro">Quantidade de Horas por Banheiro</label>
                    <input
                    type="text"
                    class="form-control"
                    id="horas_banheiro"
                    name="horas_banheiro"
                    placeholder="Quantidade de Horas por Banheiro"
                    value="{{ isset($servico->horas_banheiro) ? $servico->horas_banheiro : ''}}"
                    >
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="valor_cozinha">Valor por Cozinha</label>
                    <input
                    type="text"
                    class="form-control"
                    id="valor_cozinha"
                    placeholder="Valor por cozinha" name="valor_cozinha"
                    value="{{ isset($servico->valor_cozinha) ? $servico->valor_cozinha : ''}}"
                    >
                </div>
                <div class="col">
                    <label for="horas_cozinha">Quantidade de Horas por Cozinha</label>
                    <input
                    type="text"
                    class="form-control"
                    id="horas_cozinha"
                    placeholder="Quantidade de Horas por Cozinha"
                    name="horas_cozinha"
                    value="{{ isset($servico->horas_cozinha) ? $servico->horas_cozinha : ''}}"
                    >
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="valor_quintal">Valor por Quintal</label>
                    <input
                    type="text"
                    class="form-control"
                    id="valor_quintal"
                    placeholder="Valor por quintal" name="valor_quintal"
                    value="{{ isset($servico->valor_quintal) ? $servico->valor_quintal : ''}}"
                    >
                </div>
                <div class="col">
                    <label for="horas_quintal">Quantidade de Horas por Quintal</label>
                    <input
                    type="text"
                    class="form-control"
                    id="horas_quintal"
                    placeholder="Quantidade de Horas por quintal"
                    name="horas_quintal"
                    value="{{ isset($servico->horas_quintal) ? $servico->horas_quintal : ''}}"
                    >
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="valor_outros">Valor por outros tipos de cômodos</label>
                    <input
                     type="text"
                     class="form-control"
                     id="valor_outros"
                     name="valor_outros"
                     placeholder="Valor por outros"
                     value="{{ isset($servico->valor_outros) ? $servico->valor_outros : ''}}"
                    >
                </div>
                <div class="col">
                    <label for="horas_outros">Quantidade de Horas por outros tipos de cômodos</label>
                    <input
                    type="text"
                    class="form-control"
                    id="horas_outros"
                    name="horas_outros"
                    placeholder="Quantidade de Horas por outros"
                    value="{{ isset($servico->horas_outros) ? $servico->horas_outros : ''}}"
                    >
                </div>
            </div>
            <button class="btn btn-info mt-2">Salvar</button>
        </fieldset>
    </div>
</div>
