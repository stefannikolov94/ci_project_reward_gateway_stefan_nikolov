<a href="<?= base_url()?>admin/admin/add">Add a User</a>

<table border="1">
    <tr>
        <td>username</td>
        <td>email</td>
        <td>gender</td>
        <td>registered</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php foreach ($users as $one):?>
         <tr>
            <td><?= $one['username'];?></td>
            <td><?= $one['email'];?></td>
            <td><?= $one['gender'];?></td>
            <td><?= $one['registered'];?></td>
             <td><a href="<?= base_url()?>admin/update<?=$one['id']?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>

</table>