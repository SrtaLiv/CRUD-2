<?php
require_once './template/form_combos.php';

?>

<table>
    <tr>
        <th>Combo</th>
        <th>Precio</th>
        <?php foreach ($combos as $combo) : ?>
    <tr>
        <td><?= $combo->name ?></td>
        <td><?= $combo->price ?></td>
    </tr>




<?php endforeach ?>
</table>