<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Adding Plupload Library -->
    <script src="{{ asset('plupload/js/plupload.full.min.js') }}"></script>

    <title>Hello, world!</title>
    <style>
        body {
            padding: 20vh 32px;
            font-size: 14px;
            background: #eee;
        }

        .container h1 {
            font-size: 40px;
            font-weight: bold;
            text-align: center;
        }

        .wrapper {
            width: 800px;
            border: 1px solid #bebebe;
            border-radius: 10px;
            margin: 30px auto;
            padding: 20px;
        }

        #statusResponse p {
            font-weight: 500;
            font-size: 18px;
        }

        .file-input {
            display: inline-block;
            text-align: left;
            background: #bebebe;
            padding: 16px;
            width: 100%;
            position: relative;
            border-radius: 3px;
        }

        .file-input>[type='file'] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 10;
            cursor: pointer;
        }

        .file-input>.button {
            display: inline-block;
            cursor: pointer;
            background: #eee;
            padding: 8px 16px;
            border-radius: 2px;
            margin-right: 8px;
        }

        .file-input:hover>.button {
            background: #28a745;
            color: white;
        }

        .file-input>.label {
            color: #f3f2f2;
            white-space: nowrap;
        }

        .file-input.-chosen>.label {
            opacity: 1;
        }

        #fileList div {
            padding: 10px;
            border: 1px solid #bebebe;
            margin-bottom: 10px;
        }

        .progress-bar {
            background: #28a745;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- <h1>PHP Chunk File Upload using JavaScript & PHP</h1> -->
        <div class="wrapper">
            <div class="col-md-12">
                <div id="statusResponse"></div>
                <!-- File Uplaod -->
                <div class='file-input form-group'>
                    <input type='file' id="fileInput">
                    <span class='button'>Choose</span>
                    <span class='label' data-js-label>Select File</label>
                </div>
                <div id="fileList"></div>
                <!-- Upload Button -->
                <div class="form-group">
                    <a href="javascript:;" id="uploadBtn" class="btn btn-success">Upload</a>
                </div>
                <!-- File Progress Bar -->
                <div class="progress"></div>
            </div>
        </div>
    </div>

    <script>
        
        var uploader = new plupload.Uploader({
            runtimes: 'html5,flash,silverlight,html4',
            browse_button: 'fileInput',
            url: '{{ route("upload-video") }}',
            flash_swf_url: '{{ asset("plupload/js/Moxie.swf") }}',
            silverlight_xap_url: '{{ asset("plupload/js/Moxie.xap") }}',
            multi_selection: true,
            chunk_size: '1mb',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            filters: {
                max_file_size: '3gb',
                mime_types: [
                    { title: "Video files", extensions: "mp4,avi,mpeg,mpg,mov,wmv" },
                ]
            },

            init: {
                PostInit: function () {
                    document.getElementById('fileList').innerHTML = '';

                    document.getElementById('uploadBtn').onclick = function () {
                        if (uploader.files.length < 1) {
                            document.getElementById('statusResponse').innerHTML = '<p style="color:#EA4335;">Please select a file to upload.</p>';
                            return false;
                        } else {
                            uploader.start();
                            return false;
                        }
                    };
                },

                FilesAdded: function (up, files) {
                    plupload.each(files, function (file) {
                        document.getElementById('fileList').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                    });
                },

                UploadProgress: function (up, file) {
                    // document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
                    document.querySelector(".progress").innerHTML = '<div class="progress-bar" style="width: ' + file.percent + '%;">' + file.percent + '%</div>';
                },

                FileUploaded: function (up, file, result) {
                    var responseData = result.response.replace('"{', '{').replace('}"', '}');
                    var objResponse = JSON.parse(responseData);
                    document.getElementById('statusResponse').innerHTML = '<p style="color:#198754;">' + objResponse.result.message + '</p>';
                },

                Error: function (up, err) {
                    document.getElementById('statusResponse').innerHTML = '<p style="color:#EA4335;">Error #' + err.code + ': ' + err.message + '</p>';
                }
            }
        });

        // Initialize Plupload uploader
        uploader.init();
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>