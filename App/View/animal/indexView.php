

<div class="affichage mt-5 justify-content-around">

    <?php foreach ($animals as $animal) : ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $animal->nom ?></h5>
                <div class="card-text">
                    <p>Type: <?= $animal->type ?></p>
                    <p>Race: <?= $animal->race ?></p>
                    <p>Taille: <?= $animal->taille ?>cm</p>
                    <p>Poid: <?= $animal->poid ?>kg</p>
                    <p>Age: <?= $animal->age ?>an(s)</p>

                </div>
                <a href="index.php?page=singleAnimal&id=<?= $animal->id ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
