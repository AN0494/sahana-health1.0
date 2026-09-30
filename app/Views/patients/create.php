<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sahana Health - Add Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="container" style="max-width: 500px;">

        <h2>Add New Patient</h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="/patients/store" method="post">
            <?= csrf_field() ?>
            <!-- security files in the browser -->

            <div class="mb-3">
                <label class="form-label">Patient Name</label>
                <input type="text" name="patient_name" class="form-control" value="<?= old('patient_name') ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Contact Number</label>
                <input type="text" name="patient_contact" class="form-control" value="<?= old('patient_contact') ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" value="<?= old('status') ?>">
            </div>

            <button type="submit" class="btn btn-success">Save Patient</button>
            <a href="/patients" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
</body>

</html>