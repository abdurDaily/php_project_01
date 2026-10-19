<pre>
    <?php
    include __DIR__ . '/../env.php';

    $fetchData = "SELECT * FROM home";

    $result = mysqli_query($conn, $fetchData);

    $info = mysqli_fetch_all($result, MYSQLI_ASSOC);

    ?>

    <table border="1" width="100%">
        <tr>
            <th>Sn</th>
            <th>Name</th>
            <th>Title</th>
            <th>Image </th>
            <th>Action</th>
        </tr>

        <?php

        foreach ($info as $key => $data) {
        ?>
       <tr align="center">
            <td> <?= ++$key ?> </td>
            <td> <?= $data['name'] ?> </td>
            <td> <?= $data['title'] ?></td>
             <td><img width="50px" src="<?= $data['image'] ?>" alt=""> </td>
            <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </td>
        </tr>

        <?php
        }


        ?>
    </table>