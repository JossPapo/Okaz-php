<div class="col-md-4 my-2 d-flex">
    <div class="card w-100">
        <img src="/uploads/listings/<?= $listing["image"] ?>" class="card-img-top" alt="<?= $listing["title"] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $listing["title"] ?></h5>
            <p class="card-text"><?= $listing["price"] ?> €</p>
            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
        </div>
    </div>
</div>