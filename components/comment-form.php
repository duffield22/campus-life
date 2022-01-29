<?php require('head.inc.php'); ?>
<?php include('action.inc.php'); ?>


<div class=" container">
  <div class="row justify-content-center">
    <div class=" col-lg-8 bg-light rounded mt-2 mb-2">
      <h4 class="text-center p-4">Write your comment!</h4>
      <form id="cmt" class="p-2" action="<?php echo $_SERVER['PHP_SELF']; ?>#cmt" method="POST">
        <input type="hidden" name="id" value="<?= $u_id; ?>">
        <div class="form-group p-2">
          <input type="text" name="name" class="form-control" placeholder="Enter your name" required value="<?= $u_name; ?>">
        </div>
        <div class="form-group p-2">
          <textarea name="comment" class="form-control" placeholder="Write your comment here" required><?= $u_comment; ?></textarea>
        </div>
        <div class="form-group p-2">
          <?php if($update==true){ ?>
            <input type="submit" name="update" class="btn btn-success" value="Update Comment">
          <?php } else{ ?>
          <input type="submit" name="submit" class="login2 btn btn-success" value="Post Comment">
        <?php } ?>
          <h5 class="float-end text-success p-2"><?= $msg;  ?></h5>
        </div>
      </form>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-8 rounded bg-light p-3">
      <?php
        $sql="SELECT * FROM comment_table ORDER BY id DESC";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
        ?>
        <div class="card mb-2 border-secondary">
          <div class="card-header bg-secondary py-1 text-light">
            <span class="font-italic">Posted By : <?= $row['name'] ?></span>
            <span class="float-end font-italic">On : <?= $row['cur_date'] ?></span>
          </div>
          <div class="card-body py-2">
            <p class="card-text"><?= $row['comment'] ?></p>
          </div>
          <div class="card-footer py-2">
            <div class="float-end">
              <a href="components/action.inc.php?del=<?= $row['id'] ?>" class="text-danger mr-2" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>
              <a href="<?php $_SERVER['PHP_SELF']; ?>?edit=<?= $row['id'] ?>#cmt" class="text-success" title="Edit"><i class="fas fa-edit"></i></a>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</div>
