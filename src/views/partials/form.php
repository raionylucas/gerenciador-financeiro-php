<section id="forms">
    <form action="<?= $base; ?>/novo" method="post">
        <label for="description">
            <input type="text" name="description" id="input_desc" placeholder="Descrição" required>
        </label>

        <label for="value">
            <input type="number" name="value" id="input_value" placeholder="R$0,00" required step="0.01">
        </label>

        <label for="date">

            <input type="date" name="date" id="input_date" required>
        </label>

        <label for="category">
            <select name="category" id="select_category" required>
                <option selected value="">Categoria</option>
                <option value="casa">Casa</option>
                <option value="mercado">Mercado</option>
                <option value="transporte">Transporte</option>
                <option value="saude">Saúde</option>
                <option value="alimentacao">Alimentação</option>
                <option value="estudo">Estudo</option>
                <option value="lazer">Lazer</option>
                <option value="passagem">Passagem</option>
                <option value="cosmeticos">Cosmeticos</option>
                <option value="vestuario">Vestuário</option>
                <option value="pagamento">Pagamento</option>
                <option value="investimento">Investimento</option>
                <option value="outros">Outros</option>
            </select>
        </label>

        <label for="type">

            <div class="input-type-content">
                <label class="label-input-type">
                    <input type="radio" name="type" value="entrada" required>
                    Entrada
                </label>
                <label class="label-input-type">
                    <input type="radio" name="type" value="saída" required>
                    Saída
                </label>
            </div>
        </label>

        <input type="submit" value="Adicionar">
    </form>
</section>