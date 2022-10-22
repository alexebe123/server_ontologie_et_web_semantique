<?php 
class ProfileModel {
  public  $name;
  public  $lastname;
  public  $id;
  public  $age;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}
?>