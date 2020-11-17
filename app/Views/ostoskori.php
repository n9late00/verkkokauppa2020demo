<h4>Ostoskori</h4>

<table class="table">
<?php foreach($tuotteet as $tuote): ?>
<tr>
    <td><?= $tuote['nimi']?></td>
</tr>
<?php endforeach; ?>
</table>

<?= anchor('ostoskori/tyhjenna','Tyhjennä')?>