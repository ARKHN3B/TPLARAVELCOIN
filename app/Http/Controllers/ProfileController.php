<?php

namespace Laracoin\Http\Controllers;

use function dump;
use Illuminate\{
    Http\Request, Support\Facades\Auth
};
use Laracoin\{
    Http\Requests\UserProfileRequest, Repositories\UserProfileRepository, Users_profiles
};
use function view;
use function array_flip;

class ProfileController extends Controller
{
    protected $_userprofileRepo;

    public function __construct(UserProfileRepository $UPR)
    {
        $this->_userprofileRepo = $UPR;
        $this->middleware('auth');
    }

    public function userInfos()
    {
        $user = Auth::user();
        return array(
            'user_id' => $user->id,
            'user_email' => $user->email
        );
    }

    public function getProfile()
    {
        $datas = $this->userInfos();
        $userdatas = $this->_userprofileRepo->getUserProfileByID($datas['user_id']);
        $userdatas = $userdatas[0];

        return view('profile')->with('userdatas', $userdatas)
                                    ->with('userEmail', $datas['user_email']);
    }

    public function getChangeProfile()
    {
        $datas = $this->userInfos();
        $userdatas = $this->_userprofileRepo->getUserProfileByID($datas['user_id']);
        $userdatas = $userdatas[0];
        return view('change_profile')->with('userdatas', $userdatas)
                                           ->with('userEmail', $datas['user_email']);
    }

    public function postchangeprofile(UserProfileRequest $request)
    {
        $post = $request->all();
        $datas = $this->userInfos();
        $parameters = array(
            'firstname' => $post['firstname'],
            'lastname' => $post['lastname'],
            'birth' => $post['birth'],
            'image' => '',
            'gender' => $post['gender'],
            'address' => $post['address'],
            'phone' => $post['phone'],
            'user_id' => $datas['user_id']
        );

        $this->_userprofileRepo->update($parameters);
        return $this->getProfile();
    }
}
