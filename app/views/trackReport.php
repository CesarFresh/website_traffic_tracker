<?php
$title = 'Track Report';
ob_start();
?>
<h1>Track Report</h1>
<form method='GET'>
    <label>From: <input class='form-control' type='date' name='from' value="<?= $_GET['from'] ?? '' ?>"></label>
    <label>To: <input class='form-control' type='date' name='to' value="<?= $_GET['to'] ?? '' ?>"></label>
    <input type='submit' value='Filter' class='btn btn-primary'>
    <?php if($data['error']) { ?>
        <p style="color: red;"><?= $data['message'] ?></p>
    <?php } ?>
</form>

<?php if(count($data['report']) > 0) { ?>
    <table class="table">
        <tr>
            <th scope="col">Page</th>
            <th scope="col">Date</th>
            <th scope="col">Total Unique Visits</th>
        </tr>
    <?php foreach ($data['report'] as $reports) { ?>
        <tr>
            <td><?= $reports['url'] ?></td>
            <td><?= $reports['visit_date'] ?></td>
            <td><?= $reports['unique_visits'] ?></td>
        </tr>
    <?php } ?>
    </table>
<?php } ?>

<?php

$content = ob_get_clean();
include __DIR__ . '/Main.php';
