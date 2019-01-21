<form class="form-horizontal" action="{{ route('notices.update', ['id' => $notice->id])}}" method="post">
    <fieldset>
    @method('PATCH')
    @csrf
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Notice title</label>
            <input type="text" name="notice_title" placeholder="Notice title" value="{{$notice->notice_title}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Publish date</label>
            <input type="date" name="notice_publishdate" value="{{strftime('%Y-%m-%d',
  strtotime($notice->notice_publishdate))}}" placeholder="Notice title" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Start date</label>
            <input type="date" name="notice_startdate" value="{{strftime('%Y-%m-%d',
  strtotime($notice->notice_startdate))}}" placeholder="Notice title" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">End date</label>
            <input type="date" name="notice_enddate" value="{{strftime('%Y-%m-%d',
  strtotime($notice->notice_enddate))}}" placeholder="Notice title" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">description</label>
            <textarea class="form-control" row="3" name="notice_desc">{{$notice->notice_desc}}
            </textarea>
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">status</label>
            <select name="notice_status" class="form-control">
                <option value="1">Pending</option>
                <option value="2">Publish</option>
                <option value="3">Delay</option>
            </select>
        </div>
        <div class="col-md-12 form-group">
            <label>Notice Visible To:</label>
            <select name="notice_visibility" class="form-control">
                <option value="4">Everyone</option>
                <option value="5">Academies</option>
                <option value="6">Team</option>
                <option value="7">Scout</option>
                <option value="8">Player</option>
                <option value="9">Admin</option>
            </select>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="col-md-12 form-group user-form-group">
            <div class="pull-right">
                <button type="button" data-dismiss="modal" class="btn btn-danger btn-sm">Cancel</button>
                <button type="submit" data-id="{{$notice->id}}" id="update" class="btn btn-add btn-sm">Update</button>
            </div>
        </div>
    </fieldset>
</form>