
<table>
    <tr>
        <th>Team</th>
        <th>League</th>
        <th>City</th>
        <th>Last Time Champion</th>
        <th>Nickname</th>
        <th>Website</th>
    </tr>
    <?php foreach($teams as $teamName => $team): ?>
    <tr>
        <td><?php echo $teamName; ?></td>
        <td><?php echo $team['league']?></td>
        <td><?php echo $team['city']?></td>
        <td><?php echo $team['last-time-champions']?></td>
        <?php if (array_key_exists('nickname', $team)): ?> 
            <td><?php echo $team['nickname']; ?></td>
        <?php else: ?> 
            <td></td> 
        <?php endif; ?> 
        <td><a href="<?php $team['url'] ?>"><?php echo $teamName; ?></a></td>
    </tr>
    <?php endforeach ?>
</table> 
