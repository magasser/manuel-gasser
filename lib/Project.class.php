<?php

class Project {
    private $id;
    private $name;
    private $thumbnail;
    private $start_date;
    private $end_date;
    private $descriptions;
    private $participants;
    private $tags;
    private $github_link;
    private $download_link;
    private $media_folder;

    function __construct($id, $name, $thumbnail, $start_date, $end_date, $descriptions, $participants, $tags, $media_folder, $github_link = '', $download_link = '') {
        $this->id = $id;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->descriptions = $descriptions;
        $this->participants = $participants;
        $this->tags = $tags;
        $this->github_link;
        $this->download_link;
        $this->media_folder = $media_folder;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function getGithubLink()
    {
        return $this->github_link;
    }

    /**
     * @return string
     */
    public function getDownloadLink()
    {
        return $this->download_link;
    }

    /**
     * @return string
     */
    public function getMediaFolder()
    {
        return $this->media_folder;
    }

    /**
     * Renders a short overview of the project
     * @param string where the image should go
     * @param string language
     */
    public function render_short($side, $lang) {
        $html = "<section class='project'>
                    <img class='thumbnail {$side}' src='" . $_SERVER['DOCUMENT_ROOT'] . "/images/projects/{$this->media_folder}/{$this->thumbnail}" . "' alt=''>
                    <p class='name'>{$this->name}</p>
                    <p class='description'>{$this->descriptions[$lang]}</p>
                </section>";
    }
}
