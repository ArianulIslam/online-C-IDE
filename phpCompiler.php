<?php

 $answer ="";
 $inputCode ="";
if (!empty($_POST)){
	$inputCode = $_POST['inputCode']; 
     $ext = ".".$_POST['taskOption'];
     $file = "probId".$ext; 
     file_put_contents($file,$inputCode);
     putenv("PATH=C:\TDM-GCC-64\bin"); //  give path where gcc compiler installed
    
     shell_exec("g++ probId".$ext." -o probId.exe");
     $answer = shell_exec("probId.exe");
  
 
	
}

?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Php Compiler</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>
        
                #textarea {
                  width: 700px;
                  height: 300px;
                }
            footer{
                
                
                text-align: center;
            }
            .panel-footer{
                background-color:black;
                border-color: #337ab7;
                color: #FFFFFF;
                padding: 40px;
                margin: 10px;

             }
            .dark{
                  background-color:black;
                  color: aliceblue;
                  margin: 0;
                  padding: 0;
            }
            
        </style>
	</head>
	<body>
        <div class="container">
		<h1 class="dark text-white text-center">Run C/CPP Program</h1>
          <form action="phpCompiler.php" method="POST" role="form">
                <legend class="text-center">Input</legend>    
                    <div class="form-group">
                     <label for="textarea" class="col-sm-2 control-label">Enter You code Here:</label>
                     <div class="col-sm-10">
                            <textarea name="inputCode" id="textarea" class="form-control" rows="3" required="required"><?php echo  $inputCode;?></textarea>
                     </div>
 

                     </div>
              
    
          
                      
              <legend class="text-center">Output</legend>    
                    <div class="form-group">
                     <label for="textarea" class="col-sm-2 control-label">Result :</label>
                     <div class="col-sm-10">
                            <textarea name="" id="textarea" class="form-control" placeholder=""><?php echo  $answer;?></textarea>
                     </div>
 

                     </div>
               

               <legend class="text-center">Submit & Run</legend>    
                   <div class="row row-centered">
                       <div class="col-md-4">
                               <select  name="taskOption" id="input" class="form-control" required="required">
                                  <option value="">Select Language</option>
                                   <option value="c">C</option>
                                   <option value="cpp">Cpp</option>
                               </select>

                       </div>
                       <div class="col-md-1 pull-right">
                      <div class="form-group">
                      <button type="submit" class="pull-right btn btn-primary glyphicon glyphicon-cog">Run</button>  

                     </div>
                    </div>
                 </div> 
           </form>
<footer class="panel-footer text-center my-4"><p>Developed by Ariyan &copy 2017</p></footer>

        </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
