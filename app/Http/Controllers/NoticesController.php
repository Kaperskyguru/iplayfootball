<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StoreNotice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NoticesController extends Controller
{
    public function notices(int $limit = 0)
    {
       return $limit == 0 ? Notice::all() : Notice::take($limit)->orderBy('id', 'desc')->get();
    }

    public function store(StoreNotice $request)
    {
        $validated = $request->validated();
        
        $notice = new Notice;
        $notice->notice_title = $validated['title'];
        $notice->notice_desc = $validated['desc'];
        $notice->notice_enddate = $validated['notice_enddate'];
        $notice->notice_publishdate = $validated['notice_publishdate'];
        $notice->notice_startdate = $validated['notice_startdate'];
        $notice->notice_visibility_id = $validated['visibility_id'];
        $notice->notice_status_id = $validated['notice_status'];
        if($notice->save()){
            return redirect('admin/notices')->with('status', 'Notice Sent!');
        }
    }
    
    public function index($limit = 0)
    {
        $Notices = $limit == 0 ? Notice::all() : Notice::take($limit)->get();
        return view('admin-dashboard.notice')->with('Notices', $Notices);
    }


    public function delete(Request $request)
    {
        if(Notice::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        
        $notice = Notice::find($id);
        $notice->notice_title = $request->input('notice_title');
        $notice->notice_publishdate = $request->input('notice_publishdate');
        $notice->notice_startdate = $request->input('notice_startdate');
        $notice->notice_enddate = $request->input('notice_enddate');
        $notice->notice_desc = $request->input('notice_desc');
        $notice->notice_status_id = $request->input('notice_status');
        $notice->notice_visibility_id = $request->input('notice_visibility');
        if($notice->save()) {
            return redirect('admin/notices/')->with('status', 'Notice Updated!');
        }
        
    }

    public function view_delete_confirmation(Request $request)
    {
        if($request->ajax())
        {
            
            $notice = Notice::findOrFail($request->id);
            
            ?>
            <label class="control-label">Delete <?php echo $notice->notice_title ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $notice->id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
        }
    }

    public function view_update_box(Request $request)
    {
        if($request->ajax())
        {
            $notice = Notice::findOrFail($request->id);
            return view('admin-dashboard.includes.modals.noticeUpdateForm', compact('notice'))->render();
        }
    }

    public function adminReadNotice(Request $request)
    {
        if($request->ajax())
        {
            $notice = Notice::findOrFail($request->id);
            return view('admin-dashboard.includes.modals.noticeReadForm', compact('notice'))->render();
        }
    }

    public function playerNotices()
    {
        return view('players-dashboard.notices', ['notices' => Notice::where('notice_visibility_id', 8)->orderBy('id', 'desc')->get()]);
    }


    public function playerReadNotice(Request $request)
    {
        if($request->ajax())
        {
            $notice = Notice::findOrFail($request->id);
            return view('players-dashboard.includes.modals.noticeReadForm', compact('notice'))->render();
        }
    }

    public function teamNotices()
    {
        return view('teams-dashboard.notices', ['notices' => Notice::where('notice_visibility_id', 6)->orderBy('id', 'desc')->get()]);
    }

    public function teamReadNotice(Request $request)
    {
        if($request->ajax())
        {
            $notice = Notice::findOrFail($request->id);
            return view('teams-dashboard.includes.modals.noticeReadForm', compact('notice'))->render();
        }
    }
}
