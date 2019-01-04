<?php

namespace App\src\model;

class Comment
{
    private $id;
    
    private $pseudo;
    
    private $content;
    
    private $dateAdded;

    private $billetId;

    private $commentReported;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @param mixed $dateAdded
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * @return mixed
     */
    public function getBilletId()
    {
        return $this->billetId;
    }

    /**
     * @param mixed $billetId
     */
    public function setBilletId($billetId)
    {
        $this->billetId = $billetId;
    }

    /**
     * @return mixed
     */
    public function getCommentReported()
    {
        return $this->commentReported;
    }

    /**
     * @param mixed $commentReported
     */
    public function setCommentReported($commentReported)
    {
        $this->commentReported = $commentReported;
    }
}