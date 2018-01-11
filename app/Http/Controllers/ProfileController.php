<?php

namespace Laracoin\Http\Controllers;

use App\Repositories\UserProfileRepository;
use Illuminate\{
    Http\Request, Support\Facades\Auth
};
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
        $userID = Auth::user();
        $userID = $userID->id;
//        $userdatas = $this->_userprofileRepo->getUserProfileByID();

        return view('profile')->with('userdatas', $userID);
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
