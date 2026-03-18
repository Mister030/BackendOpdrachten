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
            <form action="<?php echo URLROOT; ?>/HorlogeController/update/<?php echo $data['horloge']->Id; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $data['horloge']->Id; ?>">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $data['horloge']->Merk; ?>">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="<?php echo $data['horloge']->Model; ?>">
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input type="number" step="0.01" class="form-control" id="prijs" name="prijs" value="<?php echo $data['horloge']->Prijs; ?>">
                </div>
                <div class="mb-3">
                    <label for="materiaal" class="form-label">Materiaal</label>
                    <input type="text" class="form-control" id="materiaal" name="materiaal" value="<?php echo $data['horloge']->Materiaal; ?>">
                </div>
                <div class="mb-3">
                    <label for="gewicht" class="form-label">Gewicht (g)</label>
                    <input type="number" step="0.01" class="form-control" id="gewicht" name="gewicht" value="<?php echo $data['horloge']->Gewicht; ?>">
                </div>
                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input type="date" class="form-control" id="releasedatum" name="releasedatum" value="<?php echo $data['horloge']->Releasedatum; ?>">
                </div>
                <button type="submit" class="btn btn-success">Opslaan</button>
                <a href="<?php echo URLROOT; ?>/HorlogeController/index" class="btn btn-secondary">Annuleren</a>
            </form>
        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
