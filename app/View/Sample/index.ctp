<h1>Index Page</h1>
<p>this is test View.</p>
<p><?php echo $result; ?></p>
<p>
  <?php
    echo $this->Form->create(null,
      array('type'=>'post','action'=>'.')); // 2.1では、null→false
    echo $this->Form->text('text1');
    echo $this->Form->end("送信");
  ?>
</p>
</div>
