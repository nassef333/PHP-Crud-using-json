<style>
  .file-upload {
    margin: auto;
    height: 200px;
    width: 200px;
    border-radius: 100px;
    position: relative;

    display: flex;
    justify-content: center;
    align-items: center;

    border: 4px solid #ffffff;
    overflow: hidden;
    background-image: linear-gradient(to bottom, #2590eb 50%, #ffffff 50%);
    background-size: 100% 200%;
    transition: all 1s;
    color: #ffffff;
    font-size: 100px;
  }
    .fileico {
      height: 100px;
      width: 100px;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      cursor: pointer;
    }

    .file-upload:hover {
      background-position: 0 -100%;
      color: #2590eb;
    }
</style>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-light fs-5">
                <?php if ($user['id']): ?>
                    Update user <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                    <div class="text-center">
                    <h1 class=""> Sign Up</h1>
                </div>
                <?php endif ?>
        </div>
        <div class="card-body ">

            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>"
                           class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" value="<?php echo $user['password'] ?>"
                           class="form-control  <?php echo $errors['password'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['password'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>"
                           class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['phone'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Website(optional)</label>
                    <input name="website" value="<?php echo $user['website'] ?>"
                           class="form-control  <?php echo $errors['website'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['website'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" type="file" class="form-control-file">
                </div>


                    <!-- <div class="form-label mb-5">
                        <label for="">Upload Personal Image</label>
                        <div class="file-upload">
                            <input class="fileico" name="picture" type="file" class="form-control-file">
                            <i class="fa fa-arrow-up"></i>
                        </div>
                    </div> -->

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>