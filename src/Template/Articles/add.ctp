<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Article</h1>
<form method="post" action="my_app_name/articles/add">
<?php
    echo $this->Form->create($article);
    // Hard code the user for now.
    
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>