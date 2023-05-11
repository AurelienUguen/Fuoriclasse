<!-- <div class="d-flex flex-column align-items-center workinprogress">
    <h1>Work in progress</h1>
    <p>This page is not available yet</p>
</div> -->

<?php

$riders = RiderRepository::findAll();

?>

<div class="list container">
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Nationality</th>
        <th scope="col">Pro since</th>
        <th scope="col">Team</th>
        <th scope="col">Ranking</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($riders as $rider) { ?>
        <tr>
        <td><?php echo $rider->getRiderName(); ?></td>
        <td><?php echo $rider->getRiderNationality(); ?></td>
        <td><?php echo $rider->getProSince(); ?></td>
        <td><?php echo $rider->getTeam()->getTeamName(); ?></td>
        <td><?php echo $rider->getRiderRanking(); ?></td>
        <?php } ?>
        </tr>
    </table>
</div>