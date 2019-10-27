<?php


class Comments
{
    protected $comments = array(
        1 => array("comment" => "This is comment number 1.",
            "post_id" => 1,
            "user_id" => 1,
            "uri" => "comments/1"),
        2 => array("comment" => "This is comment number 2.",
            "post_id" => 2,
            "user_id" => 2,
            "uri" => "comments/2"),
        11 => array("comment" => "This is comment number 11.",
            "post_id" => 11,
            "user_id" => 11,
            "uri" => "comments/11")
    );

    /**
     * Get all the comments we know about
     *
     * @return array The collection of comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Fetch the detail for a single comment
     * * @param int $comment_id The identifier of the comment
     * * @return array The comment data
     */
    public function getCommentById($comment_id)
    {
        if (isset($this->comments[$comment_id])) {
            return $this->comments[$comment_id];
        } else {
            throw new Exception("Comment not found");
        }
    }
}