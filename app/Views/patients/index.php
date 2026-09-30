<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahana Health - Patients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<!-- terminal enter "php spark serve" 
 then use that localhost url with the foldername and filename-->

<body class="p-4">
    <div class="container">
        <h1> Registered Patients </h1>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <a href="/patient/create" class="btn btn-secondary mb-3">+ Add Patient</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($patients)): ?>
                    <tr>
                        <td colspan="5" class="text-center">No patients yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($patients as $patient): ?>
                        <tr>
                            <td>
                                <?= esc($patient['patient_id']) ?>
                            </td>
                            <td>
                                <?= esc($patient['patient_name']) ?>
                            </td>
                            <td>
                                <?= esc($patient['patient_contact']) ?>
                            </td>
                            <td>
                                <?= esc($patient['status']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

    </div>

</body>

</html>