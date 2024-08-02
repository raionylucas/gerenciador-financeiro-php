<section id="table">
    <table>
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td><?= ucfirst($item['description']); ?></td>
                <td>R$<?= number_format($item['value'], 2, ",", "."); ?></td>
                <td><?= date('d-m-Y', strtotime($item['date'])); ?></td>
                <td><?= ucfirst($item['category']); ?></td>
                <td><?= ucfirst($item['type']); ?></td>
                <td>
                    <a class="edit-button" href="<?= $base ?>/item/<?= $item['id'] ?>/editar">Editar</a>
                    <a class="delete-button" href="<?= $base ?>/item/<?= $item['id'] ?>/excluir" onclick="return confirm('Deseja mesmo excluir esse item?')">Deletar</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</section>
</main>