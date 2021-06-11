<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }

    public function details($id){
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){
        $users = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);
        return view('user.list')->with('userList', $users);
    }

    public function edit($id){
        //find user by id from user list $user
        $users = $this->getUserList();

        foreach ($users as $key => $value){
            if ($value['id'] == $id) {
                
                $user = ['id'=>$id, 'name'=>$value['name'], 'email'=>$value['email']];
                // $userName = $value['name'];
                // $userEmail= $value['email'];
            }
        }

        // return view('user.update')->with('userId', $id)->with('userName', $userName)->with('userEmail', $userEmail);
        return view('user.update')->with('user', $user);

    }

    public function update(Request $req, $id){
        //craete new user array & add to list
        //new userList

        $users = $this->getUserList();

        foreach ($users as $key => $value){
            if ($value['id'] == $req->id) {
                $users[$key]['name']= $req->name;
                $users[$key]['email'] = $req->email;
            }
        }

        return view('user.list')->with('userList', $users);
    }

    public function delete( $id){
        //confirm window
        //find user by id $user
        
        $users = $this->getUserList();

        foreach ($users as $key => $value){
            if ($value['id'] == $id) {
                
                $user = ['id'=>$id, 'name'=>$value['name'], 'email'=>$value['email']];

            }
        }
        return view('user.delete')->with('user', $user);

    }

    public function destroy($id){
        //remove user form list
        //create new list & display

        $users = $this->getUserList();

        foreach ($users as $key => $value){
            if ($value['id'] == $id) {
                unset($users[$key]);
            }
        }

        return view('user.list')->with('userList', $users);
    }


    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'almain', 'email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
    }
}
