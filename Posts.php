<?php


class Posts
{
    protected $posts = array(
        1 => array("title" => "This is post 1 title.",
            "status" => "Published",
            "content" => "Post 1 content.",
            "user_id" => 1),
        2 => array("title" => "This is post 2 title.",
            "status" => "Unpublished",
            "content" => "Post 2 content.",
            "user_id" => 2),
        11 => array("title" => "This is post 11 title.",
            "status" => "Published",
            "content" => "Post 11 content.",
            "user_id" => 11)
    );

    /**
     * Get all the comments we know about
     *
     * @return array The collection of comments
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Fetch the detail for a single comment
     * * @param int $comment_id The identifier of the comment
     * * @return array The comment data
     */
    public function getPostById($post_id)
    {
        if (isset($this->posts[$post_id])) {
            return $this->posts[$post_id];
        } else {
            throw new Exception("Post not found");
        }
    }

    /**
     * Fetch the detail for a single comment
     * * @param int $comment_id The identifier of the comment
     * * @return array The comment data
     */
    public function getPostByUserId($post_id)
    {
        if (isset($this->posts[$post_id])) {
            return $this->events[$post_id];
        } else {
            throw new Exception("Post not found");
        }
    }
}