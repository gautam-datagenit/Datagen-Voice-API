<?php include('../inc/style.php')?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>DataGen SMS API</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <?php include('../inc/style.php')?>
    
    <style type="text/css">
      html {
  scroll-behavior: smooth;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="../img/logo.png"></a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <button class="btn btn-sm btn-outline-light">Sign Up Now </button>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>SMS Documentation</span> 
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span> 
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
  





<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         #1 Upload Voice API
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="">
                    <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Overview Voice API
                </a>
              </li>
             
        <li class="nav-item">
                <a class="nav-link" href="#Authentication-Key">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Generate Auth Key
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#Create-Campaign-API">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Create Campaign API
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Response">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Response
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Sample-Codes">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Sample Codes
                </a>
              </li>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          #2 Start Campaign API
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="">
           <div class="">
                    <li class="nav-item">
                <a class="nav-link" href="#2">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Overview Campaign
 Voice API
                </a>
              </li>
             
      

              <li class="nav-item">
                <a class="nav-link" href="#2Create-Campaign-API">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Create Campaign API
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#2Response">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Response
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#2Sample-Codes">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Sample Codes
                </a>
              </li>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible  #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche
      </div>
    </div>
  </div>
</div>


                          <li class="nav-item">
                <a class="nav-link" href="#Need-Help">
                  <span data-feather="file-text"><i class="fas fa-question-circle"></i> </span> 
                  Need Support
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Voice API</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Generate Key</button>
              </div>
            </div>
          </div>
          <div class="api-section">
            <h5>Overview</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="Authentication-Key" class="api-section">
            <h5>Authentication Key</h5>
            <p> HTTP requests to the APIs are protected with user-based authentication key authkey. For every request, you would be needing this key. Please visit here for more info. </p>
          </div>
          
          <div id="Authentication-Key" class="api-section">
            <h5>Upload Voice API</h5>
            <div class="table-responsive">
              <table class="table table-striped table-bordered ">
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Value</th>
                    <th>Explanation</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>auth</td>
                    <td>user auth key</td>
                    <td>This is the authkey which you generate from HTTP API</td>
                  </tr>
                  <tr>
                    <td>voice</td>
                    <td>file type value</td>
                    <td>this is post type value for audio file and will be .mp3 or .wav</td>
                  </tr>
          
                </tbody>
              </table>
            </div>
          </div>






<div id="Create-Campaign-API" class="api-section">
  <div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">   <strong>NOTE :</strong> Only upload .mp3 or .wav file
</div>
<code>
  <pre>
  
NOTE : Only upload .mp3 or .wav file
https://voice.datagenit.com/API/upload_voice.php?auth=XXXX
Parameter POST: 'voice'  
  
  </pre>
</code>
</div>


   <div id="Response" class="api-section">
            <h5>Response</h5>
<pre>
{"status":"success","code":100,"ts":"2018-11-20 16:00:09","voiceid":105}
{"status":"failure","code":401,"desc":"No Auth","ts":"2018-11-20 08:34:04"}
{"status":"failure","code":402,"desc":"Invalid Auth","ts":"2018-11-20 13:03:48"}
{"status":"failure","code":403,"desc":"Pass Valid Voice File","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":405,"desc":"Incorrect Audio Format","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":406,"desc":"Blank Audio","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":407,"desc":"You Don't have HTTP API permission","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":408,"desc":"Invalid file","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":409,"desc":"Invalid file extension","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":410,"desc":"Please Retry","ts":"2018-11-20 12:56:45"}
</pre>
</div>



   <div id="Sample-Codes" class="api-section">
            <h5>Sample Codes</h5>


<div class="api">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class=""><a href="#tab1" class="nav-link active" data-toggle="tab">PHP</a></li>
                             
                            </ul>
                            <!-- Tab panels -->
                            <div class="tab-content">
                                <div class="tab-pane  active" id="tab1">
                                    <div class="panel-body">
<pre>$audio="full path of your audio file";
$target_url='https://voice.datagenit.com/API/upload_voice.php?auth=XXXX';
if (function_exists('curl_file_create')) { // php 5.5+
$cFile = curl_file_create($audio);
} else { // 
$cFile = '@' . realpath($audio);
}
$post = array('voice'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response=curl_exec($ch);

$err = curl_error($ch);
curl_close($ch);
if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
}  
</pre>
                                    </div>
                                </div>
                                       

                                            </div>
                                        </div>
                                        
        

          
        </main>

























  <main role="main" id="2" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Start Campaign API</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Generate Key</button>
              </div>
            </div>
          </div>
          <div class="api-section">
            <h5>Overview</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        
          
          <div id="2Authentication-Key" class="api-section">
            <h5>Upload Voice API</h5>
            <div class="table-responsive">
              <table class="table table-striped table-bordered ">
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Value</th>
                    <th>Explanation</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>auth</td>
                    <td>user auth key</td>
                    <td>This is the authkey which you generate from HTTP API</td>
                  </tr>
                  <tr>
                    <td>voiceid</td>
                    <td>105</td>
                    <td>pass your voice id which you get from voice upload api</td>
                  </tr>

                  <tr>
                    <td>msisdn</td>
                    <td>9XXXXXXXXX,9XXXXXXXXX,8XXXXXXXXX</td>
                    <td>You may have multiple numbers by comma separaited</td>
                  </tr>

                  <tr>
                    <td>type</td>
                    <td>1</td>
                    <td>1 for normal obd with voiceid and 2 for template with templateid</td>
                  </tr>

                  <tr>
                    <td>retry</td>
                    <td>0 default</td>
                    <td>you can pass 0 to 3 (optional)</td>
                  </tr>

                  <tr>
                    <td>templateid</td>
                    <td>The tempate id approved previouslly

 </td>
                    <td>optional either voice id or template id.

</td>
                  </tr>
                  <tr>
                    <td>keypress</td>
                    <td>value will be either 0 (disable) or 1 (enable).</td>
                    <td>optional for use this parameter first enable it from admin</td>
                  </tr>




          
                </tbody>
              </table>
            </div>
          </div>






<div id="2Create-Campaign-API" class="api-section">
  <div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">   <strong>NOTE :</strong> NOTE : pass either voiceid or templateid
</div>
<code>
  <pre>
  
https://voice.datagenit.com/API/start_campaign.php?auth=XXX&voiceid=105&msisdn=xxxxxx,xxxxxx,xxxxx&type=1&retry=3 
Parameters 
auth=XXX //your auth key
voiceid=105 // voice id which you want to play //required if type=1
msisdn=9971XXXXXX,9971XXXXXX //this is comma separated 10 digit mobile numbers without country code (max 100)
retry=0 // default 0 you can pass 0 to 3
type=1 // required
1 for normal obd with voiceid 
2 for template with templateid

templateid= 1 default 1 for sample obd// optional either voice id or template id //required if type=2
keypress=1 for enable key press and 0 for disable // optional for use this parameter first enable it from admin 
  
  </pre>
</code>
</div>


   <div id="2Response" class="api-section">
            <h5>Response</h5>
<pre>
{"status":"success","validcnt":1,"campg_id":22,"code":"100","ts":"2018-11-21 13:23:19"} 
{"status":"failure","code":401,"desc":"No Auth","ts":"2018-11-20 08:34:04"} 
{"status":"failure","code":402,"desc":"Invalid Auth","ts":"2018-11-20 13:03:48"} 
{"status":"failure","code":403,"desc":"No Call Flow","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":405,"desc":"missing type parameter","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":406,"desc":"Voice ID Not Passed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":407,"desc":"You Don't have HTTP API permission","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":408,"desc":"Invalid Voice ID","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":409,"desc":"Template ID Not Passed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":410,"desc":"Msisdn Not Passed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":411,"desc":"MSISDN Limit Exceed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":412,"desc":"Insufficient Balance!","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":413,"desc":"Invalid Template ID","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":414,"desc":"Retry Not enable for this user","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":415,"desc":"you have allow max retry value 3","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":416,"desc":"you don't have permission for keypress","ts":"2019-02-13 13:34:27"}
{"status":"failure","code":417,"desc":"keypress value is empty","ts":"2019-02-13 13:34:27"}
{"status":"failure","code":418,"desc":"keypress parameter value is invalid","ts":"2019-02-13 13:34:27"}
</pre>
</div>



   <div id="2Sample-Codes" class="api-section">
            <h5>Sample Codes</h5>


<div class="api">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class=""><a href="#tab1" class="nav-link active" data-toggle="tab">PHP</a></li>
                             
                            </ul>
                            <!-- Tab panels -->
                            <div class="tab-content">
                                <div class="tab-pane  active" id="tab1">
                                    <div class="panel-body">
<pre>$target_url="https://voice.datagenit.com/API/start_campaign.php?auth=XXXXX";
$postData = array(
'voiceid' => 105,
'msisdn' => 9971XXXXXX,9071XXXXXX,
'type'=>1,
'retry'=>3
);

$ch = curl_init($target_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);

echo $json;
</pre>
                                    </div>
                                </div>
                                       

                                            </div>
                                        </div>
                                        
                                       
           <div id="Need-Help" class="api-section">
            <h5>Need Help</h5>
            <p>If you need any help related to the API integration then mail us on : 
              <strong> Support@datagenit.com </strong> or call us : <strong> +91-9999-706-864 </strong> </p>
              <p>Our Team Will Help you related to your concern.</p>
          </div>                                  
                                        
                                        
                                        
        <a href="<?php echo $baseurl ?>"> Home </a> . <a href="<?php echo $baseurl ?>/terms-of-use.php"> Terms of use </a> . <a href="<?php echo $baseurl ?>/privacy-policy.php">  Privacy policy </a>                              
                                        
                            </div>
                        </div>

          
        </main>

























      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
  </body>
</html>