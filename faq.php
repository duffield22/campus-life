<?php
// Initialize the session
session_start();
?>
<?php

    // connect with database
    $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");

    // fetch all FAQs from database
    $sql = "SELECT * FROM faqs";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $faqs = $statement->fetchAll();

?>


<?php include('components/head.inc.php'); ?>

<?php include('components/navbar.inc.php'); ?>


<!-- show all FAQs in a panel -->
<div class ="container" style="margin-top: 50px;">
  <h2 class="header-colorize">Frequently Asked Questions</h2>
</div>
<div class="container bg-grey" style="margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-12 accordion_one">
            <div class="panel-group">
                <?php foreach ($faqs as $faq): ?>
                    <div class="panel panel-default">

                        <!-- button to show the question -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-<?php echo $faq['id']; ?>" aria-expanded="false" class="collapsed">
                                    <?php echo $faq['question']; ?>
                                </a>
                            </h4>
                        </div>

                        <!-- accordion for answer -->
                        <div id="faq-<?php echo $faq['id']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                            <div class="panel-body">
                                <div class="text-accordion">
                                    <?php echo $faq['answer']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require('components/comment-form.php'); ?>
<?php require('components/footer.inc.php'); ?>
