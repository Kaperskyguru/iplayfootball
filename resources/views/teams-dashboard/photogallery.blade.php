@extends('teams-dashboard.layouts.app') 
@section('styles')
<style>
    #files {
        overflow-y: scroll !important;
        min-height: 320px;
    }

    @media (min-width: 768px) {
        #files {
            min-height: 0;
        }
    }

    #debug {
        overflow-y: scroll !important;
        height: 180px;
    }

    .dm-uploader {
        border: 0.25rem dashed #A5A5C7;
        text-align: center;
    }

    .dm-uploader.active {
        border-color: red;
        border-style: solid;
    }

    .dm-uploader {
        cursor: default;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .dm-uploader .btn {
        position: relative;
        overflow: hidden
    }

    .dm-uploader .btn input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        border: solid transparent;
        width: 100%;
        opacity: 0;
        cursor: pointer
    }

    .card-headerr {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }
</style>
@endsection
 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-file-photo-o"></i>
    </div>
    <div class="header-title">
        <h1>Photo Gallery</h1>
        <small>Add your Photos here</small>
    </div>
</section>
@endsection
 
@section('maincontent')
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Form controls -->
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group" id="buttonlist">
                        <strong>Photo Upload</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="col-sm-6">
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control" rows="2" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tags:</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div id="drag-and-drop-zone" class="dm-uploader p-5">
                                <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop Photo here</h3>

                                <div class="btn btn-primary btn-block mb-5">
                                    <span>Open the file Browser</span>
                                    <input type="file" title='Click to add Files' />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card h-100">
                                <div class="card-headerr">
                                    File List
                                </div>

                                <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                                    <li class="text-muted text-center empty">No photos uploaded.</li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group" id="buttonlist">
                        <strong>Photo Gallery</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <!-- Default Panel -->
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-body">
                                <p>
                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-responsive" alt="user">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
 
@section('scripts')
<!-- jQuery -->
{{--
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script> --}}

<script>
    /*
         * dmUploader - jQuery Ajax File Uploader Widget
         * https://github.com/danielm/uploader
         *
         * Copyright Daniel Morales <daniel85mg@gmail.com>
         * Released under the MIT license.
         * https://github.com/danielm/uploader/blob/master/LICENSE.txt
         *
         * @preserve
         */
        ! function(e) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(window.jQuery)
        }(function(e) {
            "use strict";
            var t = "dmUploader",
                n = 0,
                i = 1,
                s = 2,
                o = 3,
                r = 4,
                u = {
                    auto: !0,
                    queue: !0,
                    dnd: !0,
                    hookDocument: !0,
                    multiple: !0,
                    url: document.URL,
                    method: "POST",
                    extraData: {},
                    headers: {},
                    dataType: null,
                    fieldName: "file",
                    maxFileSize: 0,
                    allowedTypes: "*",
                    extFilter: null,
                    onInit: function() {},
                    onComplete: function() {},
                    onFallbackMode: function() {},
                    onNewFile: function() {},
                    onBeforeUpload: function() {},
                    onUploadProgress: function() {},
                    onUploadSuccess: function() {},
                    onUploadCanceled: function() {},
                    onUploadError: function() {},
                    onUploadComplete: function() {},
                    onFileTypeError: function() {},
                    onFileSizeError: function() {},
                    onFileExtError: function() {},
                    onDragEnter: function() {},
                    onDragLeave: function() {},
                    onDocumentDragEnter: function() {},
                    onDocumentDragLeave: function() {}
                },
                a = function(e, t) {
                    this.data = e, this.widget = t, this.jqXHR = null, this.status = n, this.id = Math.random().toString(36).substr(2)
                };
            a.prototype.upload = function() {
                var t = this;
                if (!t.canUpload()) return t.widget.queueRunning && t.status !== i && t.widget.processQueue(), !1;
                var n = new FormData;
                n.append(t.widget.settings.fieldName, t.data);
                var s = t.widget.settings.extraData;
                return "function" == typeof s && (s = s.call(t.widget.element, t.id)), e.each(s, function(e, t) {
                    n.append(e, t)
                }), t.status = i, t.widget.activeFiles++, t.widget.settings.onBeforeUpload.call(t.widget.element, t.id), t.jqXHR = e.ajax({
                    url: t.widget.settings.url,
                    type: t.widget.settings.method,
                    dataType: t.widget.settings.dataType,
                    data: n,
                    headers: t.widget.settings.headers,
                    cache: !1,
                    contentType: !1,
                    processData: !1,
                    forceSync: !1,
                    xhr: function() {
                        return t.getXhr()
                    },
                    success: function(e) {
                        t.onSuccess(e)
                    },
                    error: function(e, n, i) {
                        t.onError(e, n, i)
                    },
                    complete: function() {
                        t.onComplete()
                    }
                }), !0
            }, a.prototype.onSuccess = function(e) {
                this.status = s, this.widget.settings.onUploadSuccess.call(this.widget.element, this.id, e)
            }, a.prototype.onError = function(e, t, n) {
                this.status !== r && (this.status = o, this.widget.settings.onUploadError.call(this.widget.element, this.id, e, t, n))
            }, a.prototype.onComplete = function() {
                this.widget.activeFiles--, this.status !== r && this.widget.settings.onUploadComplete.call(this.widget.element, this.id), this.widget.queueRunning ? this.widget.processQueue() : this.widget.settings.queue && 0 === this.widget.activeFiles && this.widget.settings.onComplete.call(this.element)
            }, a.prototype.getXhr = function() {
                var t = this,
                    n = e.ajaxSettings.xhr();
                return n.upload && n.upload.addEventListener("progress", function(e) {
                    var n = 0,
                        i = e.loaded || e.position,
                        s = e.total || e.totalSize;
                    e.lengthComputable && (n = Math.ceil(i / s * 100)), t.widget.settings.onUploadProgress.call(t.widget.element, t.id, n)
                }, !1), n
            }, a.prototype.cancel = function(e) {
                e = void 0 !== e && e;
                var t = this.status;
                return !!(t === i || e && t === n) && (this.status = r, this.widget.settings.onUploadCanceled.call(this.widget.element, this.id), t === i && this.jqXHR.abort(), !0)
            }, a.prototype.canUpload = function() {
                return this.status === n || this.status === o
            };
            var l = function(t, n) {
                return this.element = e(t), this.settings = e.extend({}, u, n), this.checkSupport() ? (this.init(), this) : (e.error("Browser not supported by jQuery.dmUploader"), this.settings.onFallbackMode.call(this.element), !1)
            };
            l.prototype.checkSupport = function() {
                if (void 0 === window.FormData) return !1;
                return !new RegExp("/(Android (1.0|1.1|1.5|1.6|2.0|2.1))|(Windows Phone (OS 7|8.0))|(XBLWP)|(ZuneWP)|(w(eb)?OSBrowser)|(webOS)|(Kindle/(1.0|2.0|2.5|3.0))/").test(window.navigator.userAgent) && !e('<input type="file" />').prop("disabled")
            }, l.prototype.init = function() {
                var n = this;
                this.queue = [], this.queuePos = -1, this.queueRunning = !1, this.activeFiles = 0, this.draggingOver = 0, this.draggingOverDoc = 0;
                var i = n.element.is("input[type=file]") ? n.element : n.element.find("input[type=file]");
                return i.length > 0 && (i.prop("multiple", this.settings.multiple), i.on("change." + t, function(t) {
                    var i = t.target && t.target.files;
                    i && i.length && (n.addFiles(i), e(this).val(""))
                })), this.settings.dnd && this.initDnD(), 0 !== i.length || this.settings.dnd ? (this.settings.onInit.call(this.element), this) : (e.error("Markup error found by jQuery.dmUploader"), null)
            }, l.prototype.initDnD = function() {
                var n = this;
                n.element.on("drop." + t, function(e) {
                    e.preventDefault(), n.draggingOver > 0 && (n.draggingOver = 0, n.settings.onDragLeave.call(n.element));
                    var t = e.originalEvent && e.originalEvent.dataTransfer;
                    if (t && t.files && t.files.length) {
                        var i = [];
                        n.settings.multiple ? i = t.files : i.push(t.files[0]), n.addFiles(i)
                    }
                }), n.element.on("dragenter." + t, function(e) {
                    e.preventDefault(), 0 === n.draggingOver && n.settings.onDragEnter.call(n.element), n.draggingOver++
                }), n.element.on("dragleave." + t, function(e) {
                    e.preventDefault(), n.draggingOver--, 0 === n.draggingOver && n.settings.onDragLeave.call(n.element)
                }), n.settings.hookDocument && (e(document).off("drop." + t).on("drop." + t, function(e) {
                    e.preventDefault(), n.draggingOverDoc > 0 && (n.draggingOverDoc = 0, n.settings.onDocumentDragLeave.call(n.element))
                }), e(document).off("dragenter." + t).on("dragenter." + t, function(e) {
                    e.preventDefault(), 0 === n.draggingOverDoc && n.settings.onDocumentDragEnter.call(n.element), n.draggingOverDoc++
                }), e(document).off("dragleave." + t).on("dragleave." + t, function(e) {
                    e.preventDefault(), n.draggingOverDoc--, 0 === n.draggingOverDoc && n.settings.onDocumentDragLeave.call(n.element)
                }), e(document).off("dragover." + t).on("dragover." + t, function(e) {
                    e.preventDefault()
                }))
            }, l.prototype.releaseEvents = function() {
                this.element.off("." + t), this.element.find("input[type=file]").off("." + t), this.settings.hookDocument && e(document).off("." + t)
            }, l.prototype.validateFile = function(t) {
                if (this.settings.maxFileSize > 0 && t.size > this.settings.maxFileSize) return this.settings.onFileSizeError.call(this.element, t), !1;
                if ("*" !== this.settings.allowedTypes && !t.type.match(this.settings.allowedTypes)) return this.settings.onFileTypeError.call(this.element, t), !1;
                if (null !== this.settings.extFilter) {
                    var n = t.name.toLowerCase().split(".").pop();
                    if (e.inArray(n, this.settings.extFilter) < 0) return this.settings.onFileExtError.call(this.element, t), !1
                }
                return new a(t, this)
            }, l.prototype.addFiles = function(e) {
                for (var t = 0, n = 0; n < e.length; n++) {
                    var i = this.validateFile(e[n]);
                    if (i) {
                        !1 !== this.settings.onNewFile.call(this.element, i.id, i.data) && (this.settings.auto && !this.settings.queue && i.upload(), this.queue.push(i), t++)
                    }
                }
                return 0 === t ? this : (this.settings.auto && this.settings.queue && !this.queueRunning && this.processQueue(), this)
            }, l.prototype.processQueue = function() {
                return this.queuePos++, this.queuePos >= this.queue.length ? (0 === this.activeFiles && this.settings.onComplete.call(this.element), this.queuePos = this.queue.length - 1, this.queueRunning = !1, !1) : (this.queueRunning = !0, this.queue[this.queuePos].upload())
            }, l.prototype.restartQueue = function() {
                this.queuePos = -1, this.queueRunning = !1, this.processQueue()
            }, l.prototype.findById = function(e) {
                for (var t = !1, n = 0; n < this.queue.length; n++)
                    if (this.queue[n].id === e) {
                        t = this.queue[n];
                        break
                    }
                return t
            }, l.prototype.cancelAll = function() {
                var e = this.queueRunning;
                this.queueRunning = !1;
                for (var t = 0; t < this.queue.length; t++) this.queue[t].cancel();
                e && this.settings.onComplete.call(this.element)
            }, l.prototype.startAll = function() {
                if (this.settings.queue) this.restartQueue();
                else
                    for (var e = 0; e < this.queue.length; e++) this.queue[e].upload()
            }, l.prototype.methods = {
                start: function(t) {
                    if (this.queueRunning) return !1;
                    var i = !1;
                    return void 0 === t || (i = this.findById(t)) ? i ? (i.status === r && (i.status = n), i.upload()) : (this.startAll(), !0) : (e.error("File not found in jQuery.dmUploader"), !1)
                },
                cancel: function(t) {
                    var n = !1;
                    return void 0 === t || (n = this.findById(t)) ? n ? n.cancel(!0) : (this.cancelAll(), !0) : (e.error("File not found in jQuery.dmUploader"), !1)
                },
                reset: function() {
                    return this.cancelAll(), this.queue = [], this.queuePos = -1, this.activeFiles = 0, !0
                },
                destroy: function() {
                    this.cancelAll(), this.releaseEvents(), this.element.removeData(t)
                }
            }, e.fn.dmUploader = function(n) {
                var i = arguments;
                if ("string" != typeof n) return this.each(function() {
                    e.data(this, t) || e.data(this, t, new l(this, n))
                });
                this.each(function() {
                    var s = e.data(this, t);
                    s instanceof l ? "function" == typeof s.methods[n] ? s.methods[n].apply(s, Array.prototype.slice.call(i, 1)) : e.error("Method " + n + " does not exist in jQuery.dmUploader") : e.error("Unknown plugin data found by jQuery.dmUploader")
                })
            }
        });

</script>
<!-- demo-ui.js -->
<script>
    /*
         * Some helper functions to work with our UI and keep our code cleaner
         */

        // Adds an entry to our debug area
        function ui_add_log(message, color) {
            var d = new Date();

            var dateString = (('0' + d.getHours())).slice(-2) + ':' +
                (('0' + d.getMinutes())).slice(-2) + ':' +
                (('0' + d.getSeconds())).slice(-2);

            color = (typeof color === 'undefined' ? 'muted' : color);

            var template = $('#debug-template').text();
            template = template.replace('%%date%%', dateString);
            template = template.replace('%%message%%', message);
            template = template.replace('%%color%%', color);

            $('#debug').find('li.empty').fadeOut(); // remove the 'no messages yet'
            $('#debug').prepend(template);
        }

        // Creates a new file and add it to our list
        function ui_multi_add_file(id, file) {
            var template = $('#files-template').text();
            template = template.replace('%%filename%%', file.name);

            template = $(template);
            template.prop('id', 'uploaderFile' + id);
            template.data('file-id', id);

            $('#files').find('li.empty').fadeOut(); // remove the 'no files yet'
            $('#files').prepend(template);
        }

        // Changes the status messages on our list
        function ui_multi_update_file_status(id, status, message) {
            $('#uploaderFile' + id).find('span').html(message).prop('class', 'status text-' + status);
        }

        // Updates a file progress, depending on the parameters it may animate it or change the color.
        function ui_multi_update_file_progress(id, percent, color, active) {
            color = (typeof color === 'undefined' ? false : color);
            active = (typeof active === 'undefined' ? true : active);

            var bar = $('#uploaderFile' + id).find('div.progress-bar');

            bar.width(percent + '%').attr('aria-valuenow', percent);
            bar.toggleClass('progress-bar-striped progress-bar-animated', active);

            if (percent === 0) {
                bar.html('');
            } else {
                bar.html(percent + '%');
            }

            if (color !== false) {
                bar.removeClass('bg-success bg-info bg-warning bg-danger');
                bar.addClass('bg-' + color);
            }
        }

</script>
<!-- demo-config.js -->
<script>
    $(function() {
            /*
             * For the sake keeping the code clean and the examples simple this file
             * contains only the plugin configuration & callbacks.
             * 
             * UI functions ui_* can be located in: demo-ui.js
             */
            $('#drag-and-drop-zone').dmUploader({ //
                url: 'backend/upload.php',
                maxFileSize: 3000000, // 3 Megs 
                onDragEnter: function() {
                    // Happens when dragging something over the DnD area
                    this.addClass('active');
                },
                onDragLeave: function() {
                    // Happens when dragging something OUT of the DnD area
                    this.removeClass('active');
                },
                onInit: function() {
                    // Plugin is ready to use
                    ui_add_log('Penguin initialized :)', 'info');
                },
                onComplete: function() {
                    // All files in the queue are processed (success or error)
                    ui_add_log('All pending tranfers finished');
                },
                onNewFile: function(id, file) {
                    // When a new file is added using the file selector or the DnD area
                    ui_add_log('New file added #' + id);
                    ui_multi_add_file(id, file);
                },
                onBeforeUpload: function(id) {
                    // about tho start uploading a file
                    ui_add_log('Starting the upload of #' + id);
                    ui_multi_update_file_status(id, 'uploading', 'Uploading...');
                    ui_multi_update_file_progress(id, 0, '', true);
                },
                onUploadCanceled: function(id) {
                    // Happens when a file is directly canceled by the user.
                    ui_multi_update_file_status(id, 'warning', 'Canceled by User');
                    ui_multi_update_file_progress(id, 0, 'warning', false);
                },
                onUploadProgress: function(id, percent) {
                    // Updating file progress
                    ui_multi_update_file_progress(id, percent);
                },
                onUploadSuccess: function(id, data) {
                    // A file was successfully uploaded
                    ui_add_log('Server Response for file #' + id + ': ' + JSON.stringify(data));
                    ui_add_log('Upload of file #' + id + ' COMPLETED', 'success');
                    ui_multi_update_file_status(id, 'success', 'Upload Complete');
                    ui_multi_update_file_progress(id, 100, 'success', false);
                },
                onUploadError: function(id, xhr, status, message) {
                    ui_multi_update_file_status(id, 'danger', message);
                    ui_multi_update_file_progress(id, 0, 'danger', false);
                },
                onFallbackMode: function() {
                    // When the browser doesn't support this plugin :(
                    ui_add_log('Plugin cant be used here, running Fallback callback', 'danger');
                },
                onFileSizeError: function(file) {
                    ui_add_log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
                }
            });
        });

</script>
<!-- File item template -->
<script type="text/html" id="files-template">
    <li class="media">
        <div class="media-body mb-1">
            <p class="mb-2">
                <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
            </p>
            <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <hr class="mt-1 mb-1" />
        </div>
    </li>
</script>

<!-- Debug item template -->
<script type="text/html" id="debug-template">
    <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
</script>
@endsection