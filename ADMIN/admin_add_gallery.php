<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/add_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Add Gallery | Fitness Hub Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/fancyBox/source/jquery.fancybox8cbb.css?v=2.1.5" rel="stylesheet" />
    <link type="text/css" href="vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.css?v=1.0.5" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/jQuery-File-Upload/css/jquery.fileupload.css" />
    <link rel="stylesheet" href="vendors/jQuery-File-Upload/css/jquery.fileupload-ui.css" />
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!--end of page level css-->
</head>
<body>
<?php include('admin_masterpage.php');?>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Add Gallery</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href="admin_add_gallery.php">Add Gallery</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- First Basic Table strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-fw fa-picture-o"></i>Add Gallery
                                </h3>
                            </div>
                            <div class="panel-body" style="border:1px solid #65a800;padding:30px">
                                <div class="row">
                                    
                                    <form id="fileupload" action="../services/upload_img_vd.php" method="POST" enctype="multipart/form-data">
                                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                        <noscript>
                                            <input type="hidden" name="redirect" value="">
                                        </noscript>
                                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                        <div class="row fileupload-buttonbar">
                                            <div class="col-lg-7">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Image</label>
                                                    <div class="col-md-7 text-center">
                                                        <div class="input-group">
                                                           <!-- <form action="../services/upload_img_vd.php" method="POST"> -->
                                                            <input type="file" name="img"/>
                                                            <input type="submit" class="btn btn-success" value="Upload" name="">
                                                           <!-- </form> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 
                            
                                                <button type="reset" class="btn btn-warning cancel">
                                                    <i class="fa fa-fw fa-times"></i>
                                                    <span>Cancel upload</span>
                                                </button>
                                                <button type="button" class="btn btn-danger delete">
                                                    <i class="fa fa-trash-o"></i>
                                                    <span>Delete</span>
                                                </button> -->
                                                
                                                <!-- The global file processing state -->
                                                <span class="fileupload-process"></span>
                                            </div>
                                            <!-- The global progress state -->
                                            <div class="col-lg-5 fileupload-progress fade">
                                                <!-- The global progress bar -->
                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-primary" style="width:0;"></div>
                                                </div>
                                                <!-- The extended global progress state -->
                                                <div class="progress-extended">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- The table listing the files available for upload/download -->
                                        <table role="presentation" class="table table-striped">
                                            <tbody class="files">
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </aside>
    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/jQuery-File-Upload/js/main.js"></script>
    <script src="vendors/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="vendors/jQuery-File-Upload/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="vendors/jQuery-File-Upload/js/load-image.min.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-ui.js"></script>
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-validate.js"></script>
    <script src="vendors/fancyBox/source/jquery.fancybox.pack8cbb.js?v=2.1.5" type="text/javascript"></script>
    <script src="vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.js?v=1.0.5" type="text/javascript"></script>   

    <script src="js/custom_js/add_gallery.js" type="text/javascript"></script>
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
                {% } %} {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                    <span>{%=file.name%}</span> {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>    
    <script src="js/custom_js/backstretch.js"></script>
    <!-- end of global level js -->
    <script src="vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <script src="vendors/countUp/countUp.js" type="text/javascript"></script>    
    <script src="vendors/moment/min/moment.min.js" type="text/javascript"></script>

    <!-- end of page level js -->
</body>
</html>
