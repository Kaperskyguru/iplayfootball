<form class="form-horizontal">
        <fieldset>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">Notice title</label>
                <input type="text" readonly value="{{$notice->notice_title}}" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Publish date</label>
                <input type="date" readonly value="{{strftime('%Y-%m-%d', strtotime($notice->notice_publishdate))}}" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Start date</label>
                <input type="date" readonly value="{{strftime('%Y-%m-%d', strtotime($notice->notice_startdate))}}" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">End date</label>
                <input type="date" readonly value="{{strftime('%Y-%m-%d', strtotime($notice->notice_enddate))}}" class="form-control">
            </div>
            <div class="col-md-12 form-group">
                <label class="control-label">description</label>
                <textarea readonly class="form-control" rows="3" required>{{$notice->notice_desc}}</textarea>
            </div>
        </fieldset>
    </form>