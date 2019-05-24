<?php

namespace Iplayfootball\Http\Controllers;

use Illuminate\Http\Request;
use Iplayfootball\User;
use Hash;
use Iplayfootball\Http\Requests\StoreUser;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public static function store(StoreUser $request)
    {
        $validated = $request->validated();
        $user = new User;
        $user->name =  $validated['name'];
        $user->phone = $validated['phone'];
        $user->email = $validated['email'];
        $user->state = $validated['state'];
        $user->role = $validated['role'];
        $user->status_id = $validated['status'];
        $user->password = Hash::make($validated['password']);
        $user->type = $validated['type'];
        if($user->save()){
            return true;
        }
        return false;

    }

    public function destroy(Request $request)
    {
        if(User::findOrFail($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }

    }

    public function academic()
    {
        return $this->hasOne('Iplayfootball\Academic');
    }
    
    public function usersByRole(Request $request)
    {
        if($request->ajax())
        {
            $users = $this->getUsersByRole($request->type_id);
            foreach($users as $user):?>
            <option value="<?php echo $user->id?>"> <?php echo $user->name?><small> (<?php echo $user->email ?>)</small></option>
        <?php endforeach;
        }
    }

    public function getUsersByRole(int $role)
    {
        switch ($role) {
            case 9:
                return $this->getAdmins();
                break;
            case 6:
                return $this->getTeams();
                break;
            case 8:
                return $this->getPlayers();
                break;
            case 5:
                return $this->getAcademies();
                break;
            case 7:
                return $this->getScouts();
                break;
            default:
                break;
                 
        }
    }

    public function getAdmins()
    {
        return User::where('role', 9)->get();
    }

    public function getPlayers()
    {
        return User::where('role', 8)->get();
    }

    public function getScouts()
    {
        return User::where('role', 7)->get();
    }

    public function getTeams()
    {
        return User::where('role', 6)->get();
    }

    public function getAcademies()
    {
        return User::where('role', 5)->get();
    }
}
