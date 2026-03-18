<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <h3><?php echo $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center" style="display: <?php echo $data['display']; ?>;">
        <div class="col-10">
            <div class="alert alert-<?php echo $data['color']; ?>" role="alert">
                <?php echo $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">
            <form action="<?php echo URLROOT; ?>/SmartphoneController/update/<?php echo $data['smartphone']->Id; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $data['smartphone']->Id; ?>">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $data['smartphone']->Merk; ?>">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="<?php echo $data['smartphone']->Model; ?>">
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input type="number" step="0.01" class="form-control" id="prijs" name="prijs" value="<?php echo $data['smartphone']->Prijs; ?>">
                </div>
                <div class="mb-3">
                    <label for="geheugen" class="form-label">Geheugen (GB)</label>
                    <input type="number" class="form-control" id="geheugen" name="geheugen" value="<?php echo $data['smartphone']->Geheugen; ?>">
                </div>
                <div class="mb-3">
                    <label for="besturingssysteem" class="form-label">Besturingssysteem</label>
                    <input type="text" class="form-control" id="besturingssysteem" name="besturingssysteem" value="<?php echo $data['smartphone']->Besturingssysteem; ?>">
                </div>
                <div class="mb-3">
                    <label for="schermgrootte" class="form-label">Schermgrootte (inch)</label>
                    <input type="number" step="0.1" class="form-control" id="schermgrootte" name="schermgrootte" value="<?php echo $data['smartphone']->Schermgrootte; ?>">
                </div>
                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input type="date" class="form-control" id="releasedatum" name="releasedatum" value="<?php echo $data['smartphone']->Releasedatum; ?>">
                </div>
                <div class="mb-3">
                    <label for="megapixels" class="form-label">MegaPixels</label>
                    <input type="number" class="form-control" id="megapixels" name="megapixels" value="<?php echo $data['smartphone']->MegaPixels; ?>">
                </div>
                <button type="submit" class="btn btn-success">Opslaan</button>
                <a href="<?php echo URLROOT; ?>/SmartphoneController/index" class="btn btn-secondary">Annuleren</a>
            </form>
        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
