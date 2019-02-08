{{-- <form class="form-horizontal"> --}}
        <fieldset>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">User Name</label>
                <input type="text" readonly value="{{$verified->user->name}}" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Account type</label>
                <input type="text" readonly value="{{$verified->verification_type}}" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Status </label>
                <input type="text" readonly value="{{$verified->status->status_text}}" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">File 1</label>
            <button id="downloadfile1" data-url="{{extractPathFromImage($verified->verification_firstfile_id)}}" class="btn btn-success">Download </button>
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">File 2</label>
            <button id="downloadfile1" data-url="{{extractPathFromImage($verified->verification_secondfile_id)}}" class="btn btn-success">Download </button>
            </div>
        </fieldset>
    {{-- </form> 'public/images/KpF50Gmi33JQCffHIWhCJgB6IKrITzGz8LoD8rPA.jpeg' --}}