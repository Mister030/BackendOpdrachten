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
            <form action="<?php echo URLROOT; ?>/SmartphoneController/create" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model">
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input type="number" step="0.01" class="form-control" id="prijs" name="prijs">
                </div>
                <div class="mb-3">
                    <label for="geheugen" class="form-label">Geheugen (GB)</label>
                    <input type="number" class="form-control" id="geheugen" name="geheugen">
                </div>
                <div class="mb-3">
                    <label for="besturingssysteem" class="form-label">Besturingssysteem</label>
                    <input type="text" class="form-control" id="besturingssysteem" name="besturingssysteem">
                </div>
                <div class="mb-3">
                    <label for="schermgrootte" class="form-label">Schermgrootte (inch)</label>
                    <input type="number" step="0.1" class="form-control" id="schermgrootte" name="schermgrootte">
                </div>
                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input type="date" class="form-control" id="releasedatum" name="releasedatum">
                </div>
                <div class="mb-3">
                    <label for="megapixels" class="form-label">MegaPixels</label>
                    <input type="number" class="form-control" id="megapixels" name="megapixels">
                </div>
                <button type="submit" class="btn btn-success">Opslaan</button>
                <a href="<?php echo URLROOT; ?>/SmartphoneController/index" class="btn btn-secondary">Annuleren</a>
            </form>
        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
