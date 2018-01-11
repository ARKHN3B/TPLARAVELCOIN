<?php

namespace Laracoin\Http\Controllers;

use Illuminate\{
    Http\Request, Support\Facades\Auth
};
use Laracoin\Repositories\UserProfileRepository;
use Laracoin\Users_profiles;
use function view;
use function array_flip;

class ProfileController extends Controller
{
    protected $_userprofileRepo;

    public function __construct(UserProfileRepository $UPR)
    {
        $this->_userprofileRepo = $UPR;
    }

    public function getProfile()
    {
        $user = Auth::user();
        $userEmail = $user->email;
        $userID = $user->id;
        $userdatas = $this->_userprofileRepo->getUserProfileByID($userID);
        $userdatas = $userdatas[0];

        return view('profile')->with('userdatas', $userdatas)
                                    ->with('userEmail', $userEmail);
    }

    public function getChangeProfile()
    {
        return view('change_profile')->with('datas_profile', array(

        ));
    }

    public function postChangeProfile()
    {

    }
}
