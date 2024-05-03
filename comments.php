<div class="comments-list-wrap">
    <?php
    // Get comments
    $comments = get_comments(array(
        'status' => 'approve',
        'post_id' => get_the_ID(),

    $comment_count = count($comments);
    ?>

    <h3 class="comment-count-title"><?php echo sprintf(esc_html__('%d %s', 'text-domain'), $comment_count, _n('Comment', 'Comments', $comment_count, 'mexcluve21')); ?></h3>

    <div class="comment-list">
        <?php foreach ($comments as $comment) : ?>
            <div class="single-comment-body">
                <div class="comment-user-avatar">
                    <?php echo get_avatar($comment, 64); ?>
                </div>
                <div class="comment-text-body">
                    <h4>
                        <?php
                        // Display the parent comment's author if this is a reply
                        if ($comment->comment_parent) {
                            $parent_comment = get_comment($comment->comment_parent);
                            echo esc_html__('Reply to', 'text-domain') . ': ' . esc_html($parent_comment->comment_author);
                        } else {
                            echo esc_html($comment->comment_author);
                        }
                        ?>
                        <span class="comment-date"><?php echo esc_html(get_comment_date('F j, Y', $comment->comment_ID)); ?></span>
                        <a href="#" class="reply-link" data-comment-id="<?php echo esc_attr($comment->comment_ID); ?>"><?php _e('reply', 'mexcluve21'); ?></a>
                    </h4>
                    <p><?php echo esc_html($comment->comment_content); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="comment-template">
        <h4><?php esc_html_e('Leave a comment', 'text-domain'); ?></h4>
        <p><?php esc_html_e('If you have a comment, don\'t hesitate to send us your opinion.', 'text-domain'); ?></p>
        <?php
        comment_form(array(
            'title_reply' => 'Reply to: %s',  
            'comment_notes_before' => '', // Remove any additional comments before the comment fields
            'comment_notes_after' => '', // Remove any additional comments after the comment fields
            'class_form' => '', // Add a custom class to the comment form if needed
            'class_submit' => 'submit-btn', // Add a custom class to the submit button
            'label_submit' => esc_html__('Submit', 'text-domain'), // Change the submit button label
            'fields' => array(
                'author' => '<p><input type="text" placeholder="' . esc_attr__('Your Name', 'mexcluve21') . '" name="author" required></p>',
                'email' => '<p><input type="email" placeholder="' . esc_attr__('Your Email', 'mexcluve21') . '" name="email" required></p>'
            ),
            'comment_field' => '<p><textarea name="comment" id="comment" cols="30" rows="10" placeholder="' . esc_attr__('Your Message', 'mexcluve21') . '" required></textarea></p>',
            'logged_in_as' => '',
            'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
            'submit_field' => '<p class="form-submit">%1$s %2$s</p>',
        ));
        ?>
    </div>
</div>

<script>
    // Add event listener for reply links
    document.addEventListener('DOMContentLoaded', function() {
        var replyLinks = document.querySelectorAll('.reply-link');
        replyLinks.forEach(function(replyLink) {
            replyLink.addEventListener('click', function(e) {
                e.preventDefault();
                var commentId = replyLink.getAttribute('data-comment-id');
                var commentForm = document.getElementById('commentform');
                var parentCommentField = document.createElement('input');
                parentCommentField.type = 'hidden';
                parentCommentField.name = 'comment_parent';
                parentCommentField.value = commentId;
                commentForm.appendChild(parentCommentField);
                document.getElementById('comment').focus();
            });
        });
    });
</script>
