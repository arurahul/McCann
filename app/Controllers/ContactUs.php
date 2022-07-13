<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ContactUsModel;
class ContactUs extends Controller
{
    public function index()
    {
        return view('contactUs');
    }

    public function submit()
    {
        helper(['form']);
        $data=array();
        $rules=[
            'fullName'=>'required',
            'emailID'=>'required|valid_email',
            'comments'=>'required'
        ];
        
		$errors = [
			'fullName' => 'Please enter your Full Name',
            'emailID'=>'Please enter your Email - ID',
            'comments'=>'Please enter rquired Comments'
			
		];
        if($this->validate($rules,$errors)==TRUE)
        {
            //Calling Model Class
            $model=new ContactUsModel();
            $fullName= $this->request->getVar('fullName');
            $emailID= $this->request->getVar('emailID');
            $comments= $this->request->getVar('comments');
            $data= array(
                'fullName' => $fullName,
                'emailID' =>$emailID,
                'commentsProvided'=>$comments,
            );

            //Calling Function in Model Class to Save Contact Details Submitted
            $model->saveContactDetails($data);
            $data["success"]="Thanks for submitting yout details.We will contact you for further discussions.";

        }
        else{
            $data["validation"]=$this->validator;
        }
        return view('contactUs',$data);

    } 

} 