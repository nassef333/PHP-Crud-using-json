<?php
require 'users/users.php';

$users = getUsers();

include 'partials/header.php';
?>

<h1 class="page-title text-center p-2 text-white bg-primary">CRUD SYSTEM</h1>
<div class="container">
    <p><a class="btn btn-success w-25" href="create.php">Add User +</a></p>

    <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a target="_blank" href="https://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>
                <td >
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-primary w-100" style="width: 69px;"> View </a>
                    <br>
                    <a href="update.php?id=<?php echo $user['id'] ?> "class="btn btn-sm btn-warning mt-1 mb-1 w-100">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-danger w-100">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>

