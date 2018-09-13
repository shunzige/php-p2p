<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p借贷平台</title>
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">

</head>
<body>
   <header>

           <nav class="navbar navbar-inverse">
           <div class="container">
               <div class="container-fluid">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>

                   </div>
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav  navbar-right">
                            <li class="active"><a href="#">首页</a></li>
                            <li><a href="#">小强</a></li>
                            <li><a href="#">赶快充值</a></li>
                            <li><a href="#">注销</a></li>
                            <li><a href="#">帮助</a></li>
                            <li><a href="#">联系客服</a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </div><!-- /.container-fluid -->
                </nav>

           <nav class="navbar navbar-default">
               <div class="container">
                   <div class="navbar-header">
                   <a class="navbar-brand" href="#"><img src="./img/logo.png" class="img-responsive" alt="Responsive image"></a>
                    </div>
                  <div class="container-fluid">
                      <ul class="nav navbar-nav navbar-right">
                        <li  class="active"><a href="#">首页</a></li>
                        <li><a href="#">我要投资</a></li>
                        <li><a href="#">我要借款</a></li>
                        <li><a href="#">个人中心</a></li>
                        <li><a href="#">新手指引</a></li>
                        <li><a href="#">关于我们</a></li>
                      </ul>
                  </div><!-- /.container-fluid -->
              </div>
        </nav>
   </header>


   <!--轮播图-->
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
           <li data-target="#carousel-example-generic" data-slide-to="1"></li>

       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
           <div class="item active">
               <img src="./img/banner02.jpg" alt="...">
               <div class="carousel-caption">
               </div>
           </div>
           <div class="item">
               <img src="./img/banner01.jpg" alt="...">
               <div class="carousel-caption">
               </div>
           </div>

       </div>

       <!-- Controls -->
       <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

       </a>
       <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

       </a>
   </div>
   <!--网站特点-->
   <div class="container">
       <div class="row">
           <div class="col-md-4">
               <div class="touzi" style="display: inline-block">
                   <h2>投资理财</h2>
                   <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
               </div>
           </div>
           <div class="col-md-4">
               <div class="touzi" style="display: inline-block">
                   <h2>投资理财</h2>
                   <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
               </div>
           </div>
           <div class="col-md-4">
               <div class="touzi" style="display: inline-block">
                   <h2>投资理财</h2>
                   <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
               </div>
           </div>

       </div>
   </div>
   <div class="container">
       <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title">进行中借款</h3>
               <a>进入投资列表</a>
           </div>
           <div class="panel-body">
               <table class="table table-hover">
                   <thead>
                   <tr>
                       <th>借款人</th>
                       <th class="none">借款标题</th>
                       <th>年利率</th>
                       <th>金额</th>
                       <th class="none">还款方式</th>
                       <th>进度</th>
                       <th>操作</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <td>张三</td>
                       <td class="none">江湖救急</td>
                       <td>10.0%</td>
                       <td>2000.0</td>
                       <td class="none">按月分期付款</td>
                       <td>78.0%</td>
                       <td><button class="btn btn-danger">查看</button></td>
                   </tr>
                   <tr>
                       <td>张三</td>
                       <td class="none">江湖救急</td>
                       <td>10.0%</td>
                       <td>2000.0</td>
                       <td class="none">按月分期付款</td>
                       <td>78.0%</td>
                       <td><button class="btn btn-danger">查看</button></td>
                   </tr>
                   <tr>
                       <td>张三</td>
                       <td class="none">江湖救急</td>
                       <td>10.0%</td>
                       <td>2000.0</td>
                       <td class="none">按月分期付款</td>
                       <td>78.0%</td>
                       <td><button class="btn btn-danger">查看</button></td>
                   </tr>
                   </tbody>
               </table>
           </div>
       </div>
   </div>
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">企业新资讯</h3>
                       <a>更多资讯</a>
                   </div>
                   <div class="panel-body">
                       <table class="table table-hover">

                           <tbody>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">进行中借款</h3>
                       <a>进入投资列表</a>
                   </div>
                   <div class="panel-body">
                       <table class="table table-hover">

                           <tbody>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">企业新资讯</h3>
                       <a>更多资讯</a>
                   </div>
                   <div class="panel-body">
                       <table class="table table-hover">

                           <tbody>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">进行中借款</h3>
                       <a>进入投资列表</a>
                   </div>
                   <div class="panel-body">
                       <table class="table table-hover">

                           <tbody>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           <tr>
                               <td>央视力挺互联网金融</td>
                               <td class="pull-right">发表时间：2015-03-24</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <footer>
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                   <p>专业Java培训、PHP培训、UI培训、iOS培训、高级Web前端培训机构</p>
                   <p>版权所有： 2006-2015成都源代码教育咨询有限公司</p>
                   <p>地  址： 成都市高新区府城大道西段399号天府新谷1号楼620-625</p>
                   <p>电  话： 028-86261949  / 400-808-6840  邮箱： yuandaima@itsource.cn</p>
                   <p><a href="#">蜀ICP备14030149号-1</a>  <a href="#">蜀公网安备510114990541</a></p>
               </div>
               <div class="col-md-4 pull-right">
                   <div class="row">
                       <div class="col-md-6">
                           <span>官方微博：</span>
                           <img src="./img/tecent.png" class="img-responsive" alt="">
                           <img src="./img/sina.png" class="img-responsive" alt="">
                       </div>
                       <div class="col-md-6">
                           <span>官方微信：</span>
                           <img src="./img/wx.jpg" class="img-responsive" alt="">
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>

   <script src="./lib/jquery/jquery.min.js"></script>
   <script src="./lib/bootstrap/js/bootstrap.js"></script>

</body>
</html>