<form method="post" action="<?= site_url('ostoskori/lisaa/' . $tuote['id'])?>">
<div class="row">
    <div class="col-md-4">
    <img src="<?= base_url('img/' . $tuote['kuva']) ?>"></img>
    </div>
<div class="col-md-8">
    <h4><?=$tuote['nimi']?></h4>
    <p><?=$tuote['kuvaus']?></p>
    <p><?=$tuote['hinta']?> €</p>
    <button class="btn btn-primary">Osta</button>
</div>
</div>
</form>

