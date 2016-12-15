<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
//ini_set('html_errors', 'On');

class userObj
{
    protected $username;
    protected $user_id;
    protected $first_name;
    protected $last_name;
    protected $full_name;
    protected $location;
    protected $description;
    protected $profile_picture;
    protected $about;
    protected $email;
    protected $phone;
    protected $linkedin;
    protected $dob;
    protected $age;
    protected $workshops = array();
    protected $tags = array();
    protected $favoritesIDs = array();

    /* construtor */
    public function __construct()
    {
        //???
    }


    /* SET functions*/
    public function setUsername($val)
    {
        if ($val)
            $this->username = $val;
        else
            $this->username = "joeMnr";
    }

    public function setUserId($val)
    {
        if ($val)
            $this->user_id = $val;
        else
            $this->user_id = "2003";
    }

    public function setFirstName($val)
    {
        if ($val)
            $this->first_name = $val;
        else
            $this->first_name = "Joe";
    }

    public function setLastName($val)
    {
        if ($val)
            $this->last_name = $val;
        else
            $this->last_name = "Miner";
    }

    public function setFullName($first, $last)
    {
        $this->full_name = $first . " " . $last;
    }

    public function setLocation($val)
    {
        if ($val)
            $this->location = $val;
        else
            $this->location = "65401";
    }

    public function setDescription($val)
    {
        $this->description = $val;
    }

    public function setAbout($val)
    {
        $this->about = $val;
    }

    public function setProfilePicture($val)
    {
        $this->profile_picture = $val;
    }

    public function setEmail($val)
    {
        $this->email = $val;
    }

    public function setPhone($val)
    {
        $this->phone = $val;
    }

    public function setLinkedIn($val)
    {
        $this->linkedin = $val;
    }

    public function setDOB($val)
    {
        $this->dob = $val;
    }

    public function setAge($val)
    {
        $this->age = $val;
    }

    public function setWorkshop($index, $val)
    {
        $this->workshops[$index] = $val;
    }

    public function setTag($index, $val)
    {
        $this->tags[$index] = $val;
    }

    public function setFavorite($index, $val){
        $this->favoritesIDs[$index] = $val;
    }

    /* GET functions*/
    public function getUsername(){
        return $this->username;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getFullName(){
        return $this->full_name;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getAbout(){
        return $this->about;
    }

    public function getProfilePicture(){
        return $this->profile_picture;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getLinkedIn(){
        return $this->linkedin;
    }

    public function getDOB(){
        return $this->dob;
    }

    public function getAge(){
        return $this->age;
    }

    public function getWorkshopCount(){
        return count($this->workshops);
    }

    public function getWorkshopId($index){
        return $this->workshops[$index];
    }

    public function getTag($index){
        return $this->tags[$index];
    }

    public function getTagCount(){
        return count($this->tags);
    }

    public function getFavoriteCount(){
        return count($this->favoritesIDs);
    }

    public function getFavoriteID($val){
        return $this->favoritesIDs[$val];
    }

}
?>