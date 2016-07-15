<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
//ini_set('html_errors', 'On');

class workshopObj {
    protected $title;
    protected $workshop_id;
    protected $author_id;
    protected $short_description;
    protected $full_description;
    protected $publish_date;
    protected $location;
    protected $age; //days old; used later for sorting
    protected $tags = array();
    protected $tag_count;

    /* construtor */
    public function __construct(){
        //???
    }


    /* SET functions*/
    public function setTitle($val){
        if($val)
            $this->title = $val;
        else
            $this->username = "Workshop Title";
    }

    public function setWorkshopId($val){
        if($val)
            $this->workshop_id = $val;
        else
            $this->user_id = "656";
    }

    public function setAuthorId($val){
        if($val)
            $this->author_id = $val;
        else
            $this->author_id = "2003";
    }

    public function setShortDescription($val){
        if($val)
            $this->short_description = $val;
        else
            $this->short_description = "Workshop short description...";
    }

    public function setFullDescription($val){
        if($val)
            $this->full_description = $val;
        else
            $this->full_description = "Workshop full description...";
    }

    public function setLocation($val){
        if($val)
            $this->location = $val;
        else
            $this->location = "65401";
    }

    public function setPublishDate($val){
        $this->publish_date = $val;
    }

    public function setAge($val){
        $this->age = $val;
    }

    public function setTag($index, $val)
    {
        $this->tags[$index] = $val;
    }


    public function setTagCount(){
        $this->tag_count = count($this->tags);
    }


    /* GET functions*/
    public function getTitle(){
        return $this->title;
    }

    public function getWorkshopId(){
        return $this->workshop_id;
    }

    public function getAuthorId(){
        return $this->author_id;
    }

    public function getShortDescription(){
        return $this->short_description;
    }

    public function getFullDescription(){
       return $this->full_description;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getPublishDate(){
        return $this->publish_date;
    }

    public function getAge(){
        return $this->age;
    }

    public function getTag($index){
        return $this->tags[$index];
    }

    public function getTagCount(){
        return $this->tag_count;
    }
}
?>