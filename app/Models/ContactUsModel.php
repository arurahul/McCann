<?php 
namespace App\Models;
use CodeIgniter\Model;
class ContactUsModel extends Model{
    public $table="contactslist";
    protected $allowedFields = ['id','fullName','emailID','commentsProvided','date&time'];

    //inserts Contact Form Details
    function saveContactDetails($data)
    {
        $this->save($data);
    }
}