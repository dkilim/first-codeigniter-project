<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Validation\UserRoles;

$session = session();
class Home extends BaseController {

	/** LOGIN PAGE */
	
    public function index()
    {
        $data=[];
		helper(['form']);
		$model_user = new UserModel();

        if (session()->get('isLoggedIn')) {
            return redirect()->to('/profile');
        }

       

        if($this->request->getMethod()=='post'){
            // validation 

            $rules=[
                'username' => 'required|min_length[3]|max_length[30]', 
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',        
            ];

            // create custom validation "validateUser"  App\Validation\UserRules.php

            $errors = [
                'password' => [
                    'validateUser' => 'Incorect username or password'
                ]
            ];

            if ( ! $this->validate($rules, $errors)) {
                $data['validation']= $this->validator;
            }else {
               
                
                // sellect user from db and set user data in session
				$user = $model_user->where('username', $this->request->getVar('username'))->first();
                $this->setUserMethod($user);

                return redirect()->to('/profile');


            }

		}
		

		

        echo view('templates/header',$data);
        echo view('users/login');
        echo view('templates/footer');
        
    }
	/** METHOD FOR SET USER DATA IN SESSION */

    private function setUserMethod($user){
        // set user data in session

        $UserData = [
            'id' => $user['id'],
            'username' => $user['username'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],            
            'address' => $user['address'],
            'zip' => $user['zip'],
            'city' => $user['city'],
            'isLoggedIn' => true,
        ];

        session()->set($UserData);
    }
	
	/** ADD NEW USER */

    public function addUser(){
        $data=[];
        helper(['form']);

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        if($this->request->getMethod()=='post'){
            // validation 

            $rules=[
                'firstname' => 'required|min_length[3]|max_length[30]',
                'lastname' => 'required|min_length[3]|max_length[30]',
                'username' => 'required|min_length[3]|max_length[30]|is_unique[users.username]', 
                'address' => 'required|min_length[3]|max_length[50]',
                'zip' => 'required|min_length[5]|max_length[10]',
                'city' => 'required|min_length[3]|max_length[30]',
                'password' => 'required|min_length[8]|max_length[255]',
                'cpassword' => 'matches[password]'
            ];

            if ( ! $this->validate($rules)) {

				$data['validation']= $this->validator;
				
            }else {

                $model_user = new UserModel();
                $newUser=[
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'username' => $this->request->getVar('username'),
                    'address' => $this->request->getVar('address'),
                    'zip' => $this->request->getVar('zip'),
                    'city' => $this->request->getVar('city'),
                    'password' => $this->request->getVar('password'),
                    // 'cpassword' => $this->request->getVar('cpassword'),
                ];
                $model_user->save($newUser);
                                
                $session = session();
                $session->setFlashdata('success','Adding user was succesful!');
                
                $session->set('isLoggedIn', false);
                return redirect()->to('/');
                
            }

        }

        echo view('templates/headerWithNav',$data);
        echo view('users/register');
        echo view('templates/footer');
	}
	
	/** USER UPDATE */

    public function editUser(){
        $data=[];
		helper(['form']);
		$model_user = new UserModel();
		$session = session();

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
		}
		

		if($this->request->getMethod()=='post'){
            // validation 
			$errors=[];
			$path='/profile';

            $rules=[
                'firstname' => 'required|min_length[3]|max_length[30]',
                'lastname' => 'required|min_length[3]|max_length[30]',
                'address' => 'required|min_length[3]|max_length[50]',
                'zip' => 'required|min_length[5]|max_length[10]',
				'city' => 'required|min_length[3]|max_length[30]',			

			];
			
			if ($this->request->getPost('password') !='' || $this->request->getPost('opassword') !='' || $this->request->getPost('cpassword') !='') {
				$rules=[
					'opassword' => 'required|min_length[8]|max_length[255]|vaolidateOldPassword[opassword,username]',
					'password' => 'required|min_length[8]|max_length[255]',
					'cpassword' => 'matches[password]'
				];

				/** create validate for old password */
                $errors['opassword']=['vaolidateOldPassword' => 'Incorect old password!'];
                
				
			}


            if ( ! $this->validate($rules,$errors)) {
                $data['validation']= $this->validator;   
            }else {
                $newUser=[
					'id'  => session()->get('id'),
                    'firstname' => $this->request->getPost('firstname'),
                    'lastname' => $this->request->getPost('lastname'),
                    'address' => $this->request->getPost('address'),
                    'zip' => $this->request->getPost('zip'),
                    'city' => $this->request->getPost('city'),

				];

				if ($this->request->getPost('password') !='') {
                    $newUser['password']= $this->request->getPost('password');
                    $path='/';
                    $session->set('isLoggedIn', false);
				}
				

                $model_user->save($newUser);
              
                
                $session->setFlashdata('success','Successfuly Updated!');
                
                return redirect()->to($path);
                
            }

		}
		

        // $data['user'] = $model_user->where('id', session()->get('id'))->first();
        $data['user']=  $model_user->select(session()->get('id'));


        echo view('templates/headerWithNav',$data);
        echo view('users/update');
        echo view('templates/footer');
	}
	
	/** PROFILE */

    public function profile(){
        $data=[];
		helper(['form']);
		$model_user = new UserModel();

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
		}
		
        // $data['user'] = $model_user->where('id', session()->get('id'))->first();
        $data['user']=  $model_user->select(session()->get('id'));


        echo view('templates/headerWithNav',$data);
        echo view('users/profile');
		echo view('templates/footer');
		
		
	}
	

	/** LOGOUT  */

    public function logout(){

        session_destroy();        
        return redirect()->to('/');
    }

}

/* End of file Home.php */
