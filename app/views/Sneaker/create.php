<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <h3><?php echo $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center" style="display: <?php echo $data['display']; ?>;">
        <div class="col-10">
            <div class="alert alert-info" role="alert">
                <?php echo $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <form action="<?php echo URLROOT; ?>/SneakerController/create" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input type="number" step="0.01" class="form-control" id="prijs" name="prijs">
                </div>
                <div class="mb-3">
                    <label for="materiaal" class="form-label">Materiaal</label>
                    <input type="text" class="form-control" id="materiaal" name="materiaal">
                </div>
                <div class="mb-3">
                    <label for="gewicht" class="form-label">Gewicht (kg)</label>
                    <input type="number" step="0.001" class="form-control" id="gewicht" name="gewicht">
                </div>
                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input type="date" class="form-control" id="releasedatum" name="releasedatum">
                </div>
                <button type="submit" class="btn btn-success">Opslaan</button>
                <a href="<?php echo URLROOT; ?>/SneakerController/index" class="btn btn-secondary">Annuleren</a>
            </form>
        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
