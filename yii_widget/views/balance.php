<div class="container main-border">
    <h1 class="center">Баланс пользователя</h1>
    <h3 class="main-balance">Текущий баланс = <?=$data[0]->value; ?></h3>
    <?php unset($data[0]);
    $i = 1;
    ?>
    <h3>История</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Balance</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $datum): ?>
            <tr>
                <th scope="row"><?=$i; $i++?></th>
                <td><?=$datum->balance?></td>
                <td><?=$datum->created_at?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>


<style>
    .main-balance{
        font-style: italic;
        border-bottom: 1px solid grey;
        display: inline-block;
        margin-bottom: 10px;
    }
   .main-border{
       margin: 50px 0;
       width: 100%;
    }
</style>