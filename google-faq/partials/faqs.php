<div class="faqs">
  <?php
  foreach ($faqs as $faq) {
  ?>
    <div class="faq">
      <h2 class="question"><?php echo $faq['question']; ?></h2>
      <div class="answer">
        <?php echo $faq['answer']; ?>
      </div>
    </div>

  <?php
  }
  ?>
</div>