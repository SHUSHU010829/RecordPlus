<?php
    session_start();
?>

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
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <script defer src="/js/script.js"></script>
</head>
<body>
    <div id="search-results" style="display: none;">
        My Score.
    </div>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ol"></i></a>
            <a href="<?php echo 'index.php'; ?>" class="hidden-sm"><h1>Record Plus</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search"></i>
            </form>
            <div>
                <button data-modal-target="#modal"class="btn btn-yellow">Esther Yu</button>
                    <div class="modal" id="modal">
                        <div class="wrapper">
                            <div class="profile_card">
                                <div class="profile_wrap">
                                    <div class="profile_img">
                                        <img src="/pic/user2.jpg" alt="profile_pic">
                                        <p class="name">Esther Yu</p>
                                        <p class="place">
                                            <span class="icon">
                                                <i class="fas fa-map-pin"></i>
                                            </span>
                                            <span class="place_name">Shanghai</span>
                                        </p>
                                    </div>
                        
                                    <div class="profile_icons">
                                        <div class="profile_item">
                                            <div class="icon"><i class="fas fa-check"></i></div>
                                            <div class="title">School</div>
                                            <div class="num">FCU</div>
                                        </div>
                                        <div class="profile_item">
                                        </div>
                                        <div class="profile_item">
                                            <div class="icon"><i class="fas fa-book"></i></div>
                                            <div class="title">Grade</div>
                                            <div class="num">U3</div>
                                        </div>
                                        <div class="profile_item">
                                        </div>
                                        <div class="profile_item">
                                            <div class="icon"><i class="fas fa-star"></i></div>
                                            <div class="title">B-Day</div>
                                            <div class="num">12-18</div>
                                        </div>
                                    </div>
                        
                                    <button data-close-button class="btn btn-yellow">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <div id="overlay"></div>
            </div>
        </div>
    </nav>
   
    <aside class="sidenav hidden-sm hidden-md" id="nav">
       <div class="list">
        <a href="<?php echo 'home.php'; ?>"><i class="fa fa-home"></i> HOME</a>
        <a href="<?php echo 'homework.php'; ?>"><i class="fa fa-book"></i> HOMEWORK +</a>
        <a href="<?php echo 'testplus'; ?>"><i class="fa fa-check"></i> TEST +</a>
        <a href="<?php echo '#'; ?>"><i class="fa fa-award"></i> ALL PASS TOOL</a>
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
                <form action="#" class="inline-form" method="post">
                    <div class="group">
                        <label for="#"> 科目</label>
                        <select name="" id="">
                            <option value="">系統分析</option>
                            <option value="">資料庫</option>
                            <option value="">系統程式</option>
                            <option value="">組合數學</option>
                            <option value="">機率與統計</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="#"> 成績登入</label>
                        <select name="" id="">
                            <option value="">小考成績</option>
                            <option value="">作業成績</option>
                            <option value="">期中成績</option>
                            <option value="">期末成績</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="#">成績輸入</label>
                        <input type="score" name="" id="" placeholder="score">
                    </div>

                    <div class="group">
                        <p>&nbsp;</p>
                        <input type="submit" class="btn btn-green" style="width: 40%;" value="確定">
                    </div>
                    
               </form>
              </div>
          </div>
      </div>
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
                      <td>系統程式</td>
                      <td>70分</td>
                      <td>50分</td>
                      <td>70分</td>
                      <td>未知</td>
                      <td>54分</td>
                      <td>剩餘35分</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                      </td>
                  </tr>
                  <tr>
                    <td>機率與概論</td>
                    <td>45分</td>
                    <td>60分</td>
                    <td>55分</td>
                    <td>未知</td>
                    <td>50分</td>
                    <td>剩餘35分</td>
                    <td>
                        <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>組合數學</td>
                    <td>60分</td>
                    <td>40分</td>
                    <td>70分</td>
                    <td>未知</td>
                    <td>40分</td>
                    <td>剩餘50分</td>
                    <td>
                        <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
              </table>
            </div>
        </div>

    </div>
   </main>
   <script src="/js/home.js"></script>
</body>
</html>