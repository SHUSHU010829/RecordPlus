<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Record Plus.</title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
      <link rel="stylesheet" type="text/css" href="css/home.css">
      <link rel="stylesheet" type="text/css" href="css/task.css">   
   </head>
   <body>
      <div id="search-results" style="display: none;">
         My Score.
      </div>
      <nav class="topnav">
         <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.php" class="hidden-sm">
               <h1>Record Plus</h1>
            </a>
         </div>
         <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
               <input type="text" name="search" id="search" placeholder="Search...">
               <i class="fa fa-search"></i>
            </form>
            <div>
               <a href="#"><i class="fa fa-user"></i> Esther Yu </a>
               <a href="/web/login.php"><i class="fa fa-power-off"></i></a>
            </div>
         </div>
      </nav>
      <aside class="sidenav hidden-sm hidden-md" id="nav">
         <div class="list">
            <a href="<?php echo 'home.php'; ?>"><i class="fa fa-home"></i> HOME</a>
            <a href="<?php echo 'homework.php'; ?>"><i class="fa fa-book"></i> HOMEWORK +</a>
            <a href="<?php echo 'testplus.php'; ?>"><i class="fa fa-check"></i> TEST +</a>
            <a href="<?php echo '#'; ?>" class="active"><i class="fa fa-award"></i> ALL PASS TOOL</a>
            <a href="<?php echo 'point.php'; ?>"><i class="fa fa-cookie-bite"></i> POINT PLUS</a>
         </div>
      </aside>
      <main class="content">
         <div class="grid">
            <div class="mini-reports bg-blue">
               <div class="l">
                  <span>10</span>
                  <span>Tasks</span>
               </div>
               <div class="r">
                  <i class="fa fa-bars c-blue"></i>
               </div>
            </div>
            <div class="mini-reports bg-green">
               <div class="l">
                  <span>3</span>
                  <span>待辦課業</span>
               </div>
               <div class="r">
                  <i class="fa fa-book c-green"></i>
               </div>
            </div>
            <div class="mini-reports bg-orange">
               <div class="l">
                  <span>5</span>
                  <span>考試行程</span>
               </div>
               <div class="r">
                  <i class="fa fa-check c-orange"></i>
               </div>
            </div>
            <div class="mini-reports bg-red">
               <div class="l">
                  <span>2</span>
                  <span>危險科目</span>
               </div>
               <div class="r">
                  <i class="fa fa-user c-red"></i>
               </div>
            </div>
         </div>
         <div class="grid">
            <div class="painel">
               <div class="painel-header">
                  <h4 class="painel-title"> 成績登入</h4>
               </div>
               <div class="painel-body">
                  <div class="alert alert-danger">要確實的登入喔!</div>
                  <form action="" class="inline-form" method="post">
                     <div class="group">
                        <label for="#"> 科目</label>
                        <select name="subject" id="">
                           <option value="System Analysis">系統分析</option>
                           <option value="Database">資料庫</option>
                           <option value="System Programming">系統程式</option>
                           <option value="Combinatorial Mathematics">組合數學</option>
                           <option value="Probability and Statistics">機率與統計</option>
                        </select>
                     </div>
                     <div class="group">
                        <label for="#"> 成績登入</label>
                        <select name="s_type" id="">
                           <option value="Usual">平時分數</option>
                           <option value="Quiz">小考成績</option>
                           <option value="Midterm">期中成績</option>
                           <option value="Final">期末成績</option>
                        </select>
                     </div>
                     <div class="group">
                        <label for="#">成績輸入</label>
                        <input type="number" name="score" placeholder="score">
                     </div>
                     <div class="group">
                        <p>&nbsp;</p>
                        <input type="submit" class="btn btn-green" style="width: 40%;" value="確定">
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            if(!empty($_POST['s_type'])){
               $type = $_POST["s_type"];
               $score = $_POST["score"];
               $course = $_POST["subject"];
               $pns = "Probability and Statistics";
               $sa = "System Analysis";
               $sp = "System Programming";
               $cm = "Combinatorial Mathematics";
               $db = "Database";
               $quiz = 'Quiz';
               $usual = 'Usual';
               $mid  = 'Midterm';
               $final = 'Final';
               if($type == $quiz){
                  if($course == $db){
                     $sql = "UPDATE course SET Quiz =$score WHERE CID=1377";
                  }
                  if($course == $pns){
                     $sql = "UPDATE course SET Quiz =$score WHERE CID=1378";
                  }
                  if($course == $sa){
                     $sql = "UPDATE course SET Quiz =$score WHERE CID=1379";
                  }
                  if($course == $sp){
                     $sql = "UPDATE course SET Quiz =$score WHERE CID=1380";
                  }
                  if($course == $cm){
                     $sql = "UPDATE course SET Quiz =$score WHERE CID=1381";
                  }
               }
               if($type == $usual){
                  if($course == $db){
                     $sql = "UPDATE course SET Usual =$score WHERE CID=1377";
                  }
                  if($course == $pns){
                     $sql = "UPDATE course SET Usual =$score WHERE CID=1378";
                  }
                  if($course == $sa){
                     $sql = "UPDATE course SET Usual =$score WHERE CID=1379";
                  }
                  if($course == $sp){
                     $sql = "UPDATE course SET Usual =$score WHERE CID=1380";
                  }
                  if($course == $cm){
                     $sql = "UPDATE course SET Usual =$score WHERE CID=1381";
                  }
               }
               if($type == $mid){
                  if($course == $db){
                     $sql = "UPDATE course SET Midterm =$score WHERE CID=1377";
                  }
                  if($course == $pns){
                     $sql = "UPDATE course SET Midterm =$score WHERE CID=1378";
                  }
                  if($course == $sa){
                     $sql = "UPDATE course SET Midterm =$score WHERE CID=1379";
                  }
                  if($course == $sp){
                     $sql = "UPDATE course SET Midterm =$score WHERE CID=1380";
                  }
                  if($course == $cm){
                     $sql = "UPDATE course SET Midterm =$score WHERE CID=1381";
                  }
               }
               if($type == $final){
                  if($course == $db){
                     $sql = "UPDATE course SET Final =$score WHERE CID=1377";
                  }
                  if($course == $pns){
                     $sql = "UPDATE course SET Final =$score WHERE CID=1378";
                  }
                  if($course == $sa){
                     $sql = "UPDATE course SET Final =$score WHERE CID=1379";
                  }
                  if($course == $sp){
                     $sql = "UPDATE course SET Final =$score WHERE CID=1380";
                  }
                  if($course == $cm){
                     $sql = "UPDATE course SET Final =$score WHERE CID=1381";
                  }
               }
            
            
               if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            }     
            $sql = "UPDATE course SET FinalScore =( SELECT ( (COALESCE(Usual, 0)) * 0.1 
            +(COALESCE(Quiz, 0)) * 0.3 +(COALESCE(Midterm, 0)) * 0.3 +(COALESCE(Final, 0)) * 0.3 ))";
            if($conn->query($sql) === TRUE){
               echo "update finalscore";
            }
            
            $sql = "UPDATE course SET Pass =( SELECT 60-FinalScore)";
            $conn->query($sql);
            ?>
            
         <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "project";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if (!$conn) {
            	die("連線失敗：" . mysqli_connect_error()); 
            }
            $sql = "SELECT Usual,Quiz,Midterm,Final,FinalScore,Pass FROM course";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            $us = array();
            $qz = array();
            $mt = array();
            $f = array();
            $fs = array();
            $p = array();
            	while ($row = mysqli_fetch_assoc($result)) {
                    $us[$i] = $row["Usual"];
                    $qz[$i] = $row["Quiz"];
                    $mt[$i] = $row["Midterm"];
                    $f[$i] = $row["Final"];
                    $fs[$i] = $row["FinalScore"];
                    $p[$i] = $row["Pass"];
                    $i = $i +1;		
            	}
            

            ?>
         <div class="grid">
            <div class="painel">
               <div class="painel-header">
                  <h4 class="painel-title"> Test Plus</h4>
               </div>
               <div class="painel-body">
                  <div class="alert alert-success"> 平時日常表現分預設為滿分，我們相信你是乖學生！</div>
                  <table class="zebra">
                     <tr>
                        <th>科目</th>
                        <th>平時分數</th>
                        <th>小考成績</th>
                        <th>期中成績</th>
                        <th>期末成績</th>
                        <th>目前累計分數</th>
                        <th>離Pass的距離</th>
                        <th>編輯</th>
                     </tr>
                     <tr>
                        <td>資料庫</td>
                        <td><?php echo $us[0];?>分</td>
                        <td><?php echo $qz[0];?>分</td>
                        <td><?php echo $mt[0];?>分</td>
                        <td><?php echo $f[0];?>分</td>
                        <td><?php echo $fs[0];?>分</td>
                        <td><?php
                        if($fs[0] < 60){
                           echo "剩餘".$p[0]."分";
                        }else{
                           echo "恭喜你PASS了!";
                        }?></td>
                        <td>
                           <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>機率與統計</td>
                        <td><?php echo $us[1];?>分</td>
                        <td><?php echo $qz[1];?>分</td>
                        <td><?php echo $mt[1];?>分</td>
                        <td><?php echo $f[1];?>分</td>
                        <td><?php echo $fs[1];?>分</td>
                        <td><?php 
                        if($fs[1] < 60){
                           echo "剩餘".$p[1]."分";
                        }else{
                           echo "恭喜你PASS了!";
                        }?></td>
                        <td>
                           <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>系統分析</td>
                        <td><?php echo $us[2];?>分</td>
                        <td><?php echo $qz[2];?>分</td>
                        <td><?php echo $mt[2];?>分</td>
                        <td><?php echo $f[2];?>分</td>
                        <td><?php echo $fs[2];?>分</td>
                        <td><?php
                        if($fs[2] < 60){
                           echo "剩餘".$p[2]."分";
                        }else{
                           echo "恭喜你PASS了!";
                        }?></td>
                        <td>
                           <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>系統程式</td>
                        <td><?php echo $us[3];?>分</td>
                        <td><?php echo $qz[3];?>分</td>
                        <td><?php echo $mt[3];?>分</td>
                        <td><?php echo $f[3];?>分</td>
                        <td><?php echo $fs[3];?>分</td>
                        <td><?php
                        if($fs[3] < 60){
                           echo "剩餘".$p[3]."分";
                        }else{
                           echo "恭喜你PASS了!";
                        }?></td>
                        <td>
                           <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>組合數學</td>
                        <td><?php echo $us[4];?>分</td>
                        <td><?php echo $qz[4];?>分</td>
                        <td><?php echo $mt[4];?>分</td>
                        <td><?php echo $f[4];?>分</td>
                        <td><?php echo $fs[4];?>分</td>
                        <td><?php 
                        if($fs[4] < 60){
                           echo "剩餘".$p[4]."分";
                        }else{
                           echo "恭喜你PASS了!";
                        }
                        ?></td>
                        <td>
                           <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </main>
      <script src="/web/js/home.js"></script>
   </body>
</html>

<?php mysql_close($con)?>