<div id="new_message">
  <strong>
    <a href="#new_message_form" class="slide-toggle new_message"><span class="message icon"></span>Post a message</a>
  </strong>
  <form action="api/post_topic" method="post" id="new_message_form" class="message_form">
    <?php if (empty($grid->user->name)) { ?>
      <?php $this->partial('username_input'); ?>
    <?php } ?>
    <textarea name="content" class="content" placeholder="Your message"></textarea>
    <input type="submit" name="task" value="post" />
    <input type="button" name="task" value="preview" class="preview" />
    <?php if (!empty($grid->user->name)) { ?>
      <div class="posting_as">
        Posting as <a href="/account"><?php echo get_username($grid->user); ?></a>
      </div>
    <?php } ?>
    <a href="#new_message_form" class="cancel slide-toggle">Cancel</a>
    <br class="clear" />
  </form>
  <script>
  slide($('new_message_form'));
  </script>
</div>
