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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script defer src="/js/script.js"></script>
</head>
<body>
    <div id="search-results" style="display: none;">
        My Score.
    </div>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ol"></i></a>
            <a href="<?php echo 'login.php'; ?>" class="hidden-sm"><h1>Record Plus</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search"></i>
            </form>
            <div>
                <a href="#"><i class="fa fa-user"></i> Esther Yu </a>
                <a href="<?php echo 'login.php'; ?>"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
    </nav>
   
    <aside class="sidenav hidden-sm hidden-md" id="nav">
       <div class="list">
        <a href="<?php echo 'home.php'; ?>"><i class="fa fa-home"></i> HOME</a>
        <a href="<?php echo 'homework.php'; ?>"><i class="fa fa-book"></i> HOMEWORK +</a>
        <a href="<?php echo 'testplus.php'; ?>"><i class="fa fa-book"></i> TEST +</a>
        <a href="<?php echo 'allpasstool.php'; ?>"><i class="fa fa-award"></i> ALL PASS TOOL</a>
        <a href="<?php echo '#.php'; ?>"><i class="fa fa-cookie-bite"></i> POINT PLUS</a>
        </div>
   </aside>

   <main class="content">
      <div class="grid">
          <div class="mini-reports bg-blue">
                <div class="l">
                    <span>20</span>
                    <span>待完成任務</span>
                </div>
                <div class="r">
                    <i class="fa fa-bars c-blue"></i>
                </div>
          </div>
          <div class="mini-reports bg-orange">
                <div class="l">
                    <span>3</span>
                    <span>已完成任務</span>
                </div>
                <div class="r">
                    <i class="fa fa-check c-orange"></i>
                </div>
          </div>
          <div class="mini-reports bg-green">
            <div class="l">
                <span>56</span>
                <span>累積分數</span>
            </div>
            <div class="r">
                <i class="fa fa-check c-green"></i>
            </div>
      </div>
      </div>

      <div class="grid">
        <div class="painel">
            <div class="painel-header">
                <h4 class="painel-title">任務商店</h4>
            </div>
            <div class="painel-body">
                <div class="alert alert-danger">多多參與，多多獎勵！</div>
              <table class="zebra">
                  <tr>
                      <th>任務內容</th>
                      <th>我就要買它</th>
                  </tr>
                  <tr>
                      <td>頭像 #1</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>頭像 #2</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>頭像框 #2</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>主題 #1</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                    <td>主題 #2</td>
                    <td>
                        <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                    </td>
                </tr>
                  
              </table>
            </div>
        </div>

    </div>

      <div class="grid">
          <div class="painel">
              <div class="painel-header">
                  <h4 class="painel-title">待完成任務</h4>
                  <button data-modal-target="#modal"class="btn btn-green">一鍵領取</button>
                  <div class="modal" id="modal">
                    <div class="container">
                      <div class="header">
                          <h2>提示</h2>
                      </div>
                      <form id="form" class="form">
                          <div class="form-control">
                              <label for="subject">成功領取任務點！</label>
                          </div>
                          <div class="form-control">
                              <label for="subject">目前累積點數</label>
                              <span>52點</span>
                          </div>
                          <button data-close-button class="btn btn-gray">確定</button>
                      </form>
                    </div>
                  </div>
                <div id="overlay"></div>
              </div>
              <div class="painel-body">
                  <div class="alert alert-success">一天一任務，老師遠離你！</div>
                <table class="zebra">
                    <tr>
                        <th>任務內容</th>
                        <th>待完成任務</th>
                    </tr>
                    <tr>
                        <td>作業成功完成10項</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>考試成績到達及格分10次</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>創建任務50次</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>科目及格10科</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>本學期All Pass</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    
                </table>
              </div>
          </div>

      </div>

      <div class="grid">
        <div class="painel">
            <div class="painel-header">
                <h4 class="painel-title">已完成任務</h4>
            </div>
            <div class="painel-body">
                <div class="alert alert-info">謝謝你的一路堅持！</div>
              <table class="zebra">
                  <tr>
                      <th>任務內容</th>
                      <th>已完成任務</th>
                  </tr>
                  <tr>
                      <td>作業成功完成10項</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>考試成績到達及格分10次</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>創建任務50次</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>科目及格10科</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>本學期All Pass</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
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