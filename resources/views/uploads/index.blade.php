@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="container">
                <h1>jQuery File Upload Demo</h1>
                <h2 class="lead">Basic Plus UI version</h2>
                <br>
                <blockquote>
                    <p>File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery.<br>
                    Supports cross-domain, chunked and resumable file uploads and client-side image resizing.<br>
                    Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</p>
                </blockquote>
                <br>
                <div class="row fileupload-buttonbar">
                    <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <a type="button" href="/photos/upload" class="btn btn-primary start">
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>上傳檔案</span>
                        </a>
                    </div>
                    <!-- The global progress state -->
                    <div class="col-lg-5 fileupload-progress fade">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <table role="presentation" class="table table-striped">
                    <tbody class="files">
                    <tr class="template-download fade in">
                        <td>
                            <span class="preview">
                                <img src="/uploads/basic/1456349139-CYR-Screen Shot 2016-02-23 at 12.13.00 PM.png" width="80" height="80">
                            </span>
                        </td>
                        <td>
                            <p class="name">
                                <a href="/uploads/basic/1456349139-CYR-Screen Shot 2016-02-23 at 12.13.00 PM.png">/uploads/basic/1456349139-CYR-Screen Shot 2016-02-23 at 12.13.00 PM.png</a>
                            </p>
                        </td>
                        <td>
                            <span class="size"></span>
                        </td>
                        <td>
                            
                                <button class="btn btn-danger delete">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete</span>
                                </button>
                            
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Demo Notes</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>The maximum file size for uploads in this demo is <strong>999 KB</strong> (default file size is unlimited).</li>
                            <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                            <li>Uploaded files will be deleted automatically after <strong>5 minutes or less</strong> (demo files are stored in memory).</li>
                            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                            <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                            <li>Built with the <a href="http://getbootstrap.com/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                        </ul>
                    </div>
                </div>
            </div>




        </div>
    </div>

@endsection

@section('javascripts')

    <script src="/bower_compoents/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>

    <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

    <script src="/bower_compoents/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
    <script src="/bower_compoents/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>


@endsection