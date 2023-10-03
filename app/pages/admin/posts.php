<?php if($action == 'add'):?>
    <div class="col-md-6 mx-auto">
        <form method="post" enctype="multipart/form-data">
        <h1 class="h3 mb-3 fw-normal text-center">Create a post</h1>
        <?php if(!empty($errors)) :?>
        <div class="alert alert-danger"><?=$errors['image'];?></div>
        <?php endif; ?>
        <div class="my-2">
                <label class="d-block">
                <img class="d-block mx-auto image-preview-edit" src="<?=get_image('')?>" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;"/>
                <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none"/>
                </label>
                <?php if(!empty($errors['image'])):?>
		            <div class="text-danger"><?=$errors['image']?></div>
		        <?php endif;?>
                <script src="<?=ROOT?>/assets/js/index.js"></script>
        </div>
        <div class="form-floating">
        <input value="<?=old_value('title')?>" name="title" type="text" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput">Title</label>
        </div>
        <?php if(!empty($errors['title'])) :?>
        <div class="text-danger"><?=$errors['title']?></div>
        <?php endif; ?>

        <div>
        <textarea rows="8" name="content" type="content" class="form-control" id="floatingInput" placeholder="Post content"><?=old_value('content')?></textarea>
        </div>
        <?php if(!empty($errors['content'])) :?>
        <div class="text-danger"><?=$errors['content']?></div>
        <?php endif; ?>

        <div class="form-floating">
        <select name="category" class="form-select">
            <?php
                 $query = "select * from categories order by id desc";
                 $categories = query($query);
            ?>
            <option value="">---select---</option>
            <?php if(!empty($categories)) : ?>
                <?php foreach($categories as $cat) : ?>
                    <option value="<?=$cat['id']?>"><?=$cat['category']?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <label for="floatingInput">Category</label>
        </div>
        <?php if(!empty($errors['category'])) :?>
        <div class="text-danger"><?=$errors['category']?></div>
        <?php endif; ?>
        <button class="mt-4 btn btn-primary w-100 py-2" type="submit">Create</button>
        </form>
    </div>
    <?php elseif($action == 'edit'):?>
            <div class="col-md-6 mx-auto">
            <form method="post" enctype="multipart/form-data">
            <h1 class="h3 mb-3 fw-normal">Edit post</h1>
            <?php if(!empty($row)) :?>
            <?php if(!empty($errors)) :?>
            <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>
            <div class="my-2">
                <label class="d-block">
                <img class="d-block mx-auto image-preview-edit" src="<?=get_image($row['image'])?>" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;"/>
                <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none"/>
                </label>
                <?php if(!empty($errors['image'])):?>
		            <div class="text-danger"><?=$errors['image']?></div>
                <?php endif;?>
                <script src="<?=ROOT?>/assets/js/index.js"></script>
            </div>
            <div class="form-floating">
            <input value="<?=old_value('username', $row['username'])?>" name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
            </div>
            <?php if(!empty($errors['username'])) :?>
            <div class="text-danger"><?=$errors['username']?></div>
            <?php endif; ?>

            <div class="form-floating">
            <input value="<?=old_value('email', $row['email'])?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <?php if(!empty($errors['email'])) :?>
            <div class="text-danger"><?=$errors['email']?></div>
            <?php endif; ?>

                <div class="form-floating">
            <select name="role" class="form-select">
                <option <?=old_select('role', 'user', $row['role'])?> value="user">User</option>
                <option <?=old_select('role', 'admin', $row['role'])?> value="admin">Admin</option>
            </select>
            </div>
            <?php if(!empty($errors['role'])) :?>
            <div class="text-danger"><?=$errors['role']?></div>
            <?php endif; ?>

            <div class="form-floating">
            <input  value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
            <?php if(!empty($errors['password'])) :?>
            <div class="text-danger"><?=$errors['password']?></div>
            <?php endif; ?>

            <div class="form-floating">
            <input  value="<?=old_value('retype_password')?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
            </div>
            <button class="mt-4 btn btn-primary py-2" type="submit">Save</button>
            <a href="<?=ROOT?>/admin/posts">
            <button class="mt-4 btn btn-primary py-2 float-end" type="button">Back</button>
            </a>
            <?php endif;?>
            </form>
        </div>        
<?php else:?>
<div>
<h4>Posts</h4>
<a href="<?=ROOT?>/admin/posts/add">
<button class="btn btn-primary mb-2">Add New</button>
</a>
</div>

<div class="table-responsive">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Slug</th>
            <th>image</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;

            $query = "select * from posts order by id desc limit $limit offset $offset";
            $rows = query($query);
        ?>

        <?php if(!empty($rows)) :?>
            <?php foreach($rows as $row) :?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=esc($row['title'])?></td>
            <td><?=$row['slug']?></td>
            <td>
                <img src="<?=get_image($row['image'])?>" style="width: 100px;height: 100px;object-fit: cover;"/>
            </td>
            <td><?=date("jS M, Y", strtotime($row['date']))?></td>
            <td>
                <a href="<?=ROOT?>/admin/posts/edit/<?=$row['id']?>">
                <button class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </button>
                </a>
                <a href="<?=ROOT?>/admin/posts/delete/<?=$row['id']?>">
                <button class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
                </button>
                </a>
            </td>
        </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <div class="col-md-12 mb-4">
        <a href="<?=$PAGE['first-link'] ?>">
        <button class="btn btn-primary">First Page</button>
        </a>
        <a href="<?=$PAGE['prev-link'] ?>">
        <button class="btn btn-primary">Previous Page</button>
        </a>
        <a href="<?=$PAGE['next-link'] ?>">
        <button class="btn btn-primary float-end">Next Page</button>
        </a> 
    </div>
</div>

<?php endif;?>