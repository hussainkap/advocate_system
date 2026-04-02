<table border="1">
<tr><th>Debit</th><th>Credit</th><th>Balance</th></tr>

<?php
$balance = 0;
foreach ($rows as $r):
    if ($r['type'] == 'debit') $balance += $r['amount'];
    else $balance -= $r['amount'];
?>

<tr>
<td><?= $r['type']=='debit' ? $r['amount'] : '' ?></td>
<td><?= $r['type']=='credit' ? $r['amount'] : '' ?></td>
<td><?= $balance ?></td> hrr
</tr>

<?php endforeach; ?>
</table>