<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 视口：为了使移动端适应PC端 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- 引入bootstrap.css文件 -->
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css"/>
    <!-- 引入自定义css文件 -->
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/extend.css"/>
    <!-- 条件注释:①让低版本浏览器能够兼容html5的新标签；②让低版本浏览器能够兼容CSS3的媒体查询。 -->
    <!--[if lt IE 9]>
    <script src="lib/html5shiv/html5shiv.min.js"></script>
    <script src="lib/respond/respond.min.js"></script>
    <![endif]-->
    <script src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>

<section class="topNav">
    <!-- 导航条 -->
    <nav class="navbar navbar-defined navbar-fixed-top">
        <div class="container">
            <a href="#">首页</a>
            <a href="fengcai.html">校友风采</a>
            <a href="jianjie.html">学校简介</a>
            <a href="liuyan.php">校友留言</a>
            <a href="tongxun.php">校友通讯</a>
            <a href="news.html">学校新闻</a>
      
        </div>
    </nav>
</section>
<section class="carousels clearfix">
    <div id="bg_change" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bg_change" data-slide-to="0" class="active"></li>
            <li data-target="#bg_change" data-slide-to="1"></li>
            <li data-target="#bg_change" data-slide-to="2"></li>
            <li data-target="#bg_change" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" data-lg-bg="../images/2.jpg" data-sm-bg="../images/2.jpg"></div>
            <div class="item" data-lg-bg="../images/3.jpg" data-sm-bg="../images/3.jpg"></div>
            <div class="item" data-lg-bg="../images/4.jpg" data-sm-bg="../images/4.jpg"></div>
            <div class="item" data-lg-bg="../images/5.jpg" data-sm-bg="../images/5.jpg"></div>
           
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#bg_change" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bg_change" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="message clearfix">
	
    <div class="container">
        <!-- 轮播图部分 -->
        <div class="message_left fl text-center">
            <div class="login">
               <div class="denglu" >
                  <!--<?php
if(@$_SESSION['user']!=""){
	$username=$_SESSION['user'];
	$sqla="select*from custom where username='$username'";
	$rsa=$link->query($sqla);
	$rowa=$link->fetch_array($rsa);
	$ida=$rowa['id'];
	echo $_SESSION['user']." "."欢迎您！"."<a href='xgmm.php?id=".$ida."'>修改密码</a>"." "."<a href='exit.php'>退出</a>";}
	else{echo "<a href='denglu.html'>登录</a>";}
	?>-->
               </div>
               <div class="admin">
                  <a href="./login/index.php">管理员入口</a>
               </div>
            </div>
        </div>
        <!-- 新闻部分 -->
        <div class="message_right hidden-xs fr">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading more">
                    <span class="fl">校友风采</span>
                    <a href="fengcai.html" class="fr">更多>></a>
                </div>
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="media">
                            <a href="fengcai.html">
                                <div class="media-body">
                                    <h4 class="media-heading btn btn-default">第1位 - 东西</h4>
                                    <p>他说，这是一个读图的时代，看小说的人更少，这是一种可怕的现象，在现代“快餐式文化”下，看电影已然成为人们的首选。自从《没有语言的生活》被改编为电影后，他逐渐走上了编剧之路，但是，他强调，“写小说是我的最爱，依然会把写小说当作是一种追求”          </p>
                           </p>
                                </div>
                                <div class="media-right">
                                    <img class="media-object" width="150px" height="150px" src="../images/dongxi.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <a href="fengcai.html">
                                <div class="media-body">
                                    <h4 class="media-heading btn btn-default">第2位 - 凡一平</h4>
                                    <p>       “命运的安排是奇妙的，”凡一平风趣地说：“就是这些人生的经历让他走上了文学探索之路。”在探索过程中，凡一平对文学有着自己的领悟：写作时情感得到最大程度的宣泄和发挥就是写小说的最大乐趣，文学可以给心灵带来慰藉，当觉得生活孤独乏味时，文学就如同一个朋友时刻陪伴在你的身边，文学可以释放理想，平息对生活的不满，甚至改变人生，这就是他一直没有放弃文学的原因。         </p>
                            </p>
                                </div>
                                <div class="media-right">
                                    <img class="media-object" width="150px" height="150px" src="../images/fyp.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <a href="fengcai.html">
                                <div class="media-body">
                                    <h4 class="media-heading btn btn-default">第3位- 陈真如</h4>
                                    <p> 据悉，“真如奖学金”是由美国华人陈真如女士捐款，于仁秋牵线搭桥，于2004年在河池学院设立。迄今已奖励该院学生195人，发放奖学金25.5万元。此外，陈真如、林泰奇夫妇还在河池学院捐款资助建立了“真如图书室”和“陈真如、林泰奇大学生活动中心”等。 </p>
                      </p>
                                </div>
                                <div class="media-right">
                                    <img class="media-object" width="150px" height="150px" src="../images/czr.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>
<section class="tail">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading more">
                <span class="fl">学院简介</span>
                <a href="jianjie.html" class="fr">更多>></a>
            </div>
            <div class="panel-body">
                <div class="tail_left fl">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" data-container="body" data-toggle="popover" data-placement="right" data-content="共建“一带一路”，顺应时代潮流，将促进经济要素有序自由流动、资源高效配置和市场深度融合，符合中国和国际社会的根本利益，有利于沿线各国实现多元、自主、平衡和可持续发展。因此，“一带一路”倡议提出后，应者云集。沿线国家中，已经有近６０个国家明确表示支持和积极参与建设。">
                                <img class="img-thumbnail" height="80px" width="320px" src="../images/16.jpg" alt=""/>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <img class="img-thumbnail" height="80px" width="320px" src="../images/17.jpg" alt=""/>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <img class="img-thumbnail" height="80px" width="320px" src="../images/18.jpg" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tail_right fr">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p> 河池学院坐落于广西宜州市，是桂西北地区一所普通本科院校。是在原河池师范高等专科学校的基础上，于2003年4月经教育部批准成立的一所全日制普通本科院校。学院实行"自治区与河池市共建，以自治区为主"的办学体制。

截至2015年5月，学校校园占地面积40多万平方米。学校校舍建筑总面积为28余万平方米，教学科研仪器设备总值1.2亿元，图书馆藏文献总量190万多册（含电子图书），校园网络覆盖东、西两个校区。

学校设有12个教学单位和图书馆、现代教育技术中心、继续教育学院。设有本科专业41个，有教职工650多人。生源来自全国19个省(自治区、直辖市)，有全日制本专科在校学生一万余人，另有成人教育在校学生1200多人。</p> </div>
                    <p>2003-2013年，学校教师承担科研项目603项，其中国家自 然科学基金项目4项，国家社会科学基金项目5项，全国教育科学"十二五"规划课题1项，省部级科研项目84项，地厅级项目235项，院级项目256项;在国内外学术刊物公开发表学术论文4336篇，其中全国中文核心期刊745篇，被SCI、EI、ISTP、CA收录124篇;出版专著、教材60部。获省部级教学成果奖7项，省部级科研优秀成果奖7项。</p>
                    <p>截至2013年，河池学院图书馆馆藏印本图书21.8万种，订购期刊中外文期刊1742种，报纸150种。订购各类中外数据库13种。电子资源折合电子图书共计54.25万册。收集了大量桂西北地方特色地方文献，并收藏有《四库全书》、《古今图书集成》、《四部丛刊》等古籍珍藏本和《申报》、《民国日报》等近现代报刊影印本。自主开发《刘三姐研究专题文献数据库》、《黄庭坚研究专题文献数据库》、《桂西北作家研究专题文献数据库》、《韦拔群研究文献数据库》、《仫佬族文献数据库》、《桑蚕文献数据库及网络资源导航系统》等9个自建数据库，收录各类资料11000余种。</p>
                    <p>学校先后被授予"全国绿化模范单位"、"全国学校艺术教育先 进单位"、"国家级语言文字规范化示范校"、"全国大学生暑期社会实践先进单位"、自治区级"文明单位"、自治区级"绿色大学"、"广西高校学生资助工作先进集体"、"广西高校毕业生就业工作先进集体"、"广西高校安全文明校园"、"广西语言文字规范化示范校"、广西高校大学生思想政治教育工作先进单位、自治区"和谐学校"、自治区军(警)民共建精神文明先进单位、自治区"卫生先进单位"等荣誉称号</p>
                    <p>学校设有学生联合会，在学院团委具体指导下开展工作。学联下辖文学与传媒学院、政治与历史文化学院、外国语学院、数学与统计学院、物理与机电工程学院、化学与生物工程学院、计算机与信息工程学院、体育学院、艺术学院、教师教育学院、经济与管理学院等12个二级学院学生会。学联设有办公室、学习部、外联部、文艺部、宣传部、生活部、体育部、纪检部、女生部、网络部等十个部门。</p>
                    </div>
            </div>
        </div>
            
            </div>
        </div>
</section>
<section class="meeting">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading more">
                <span class="fl">学校新闻</span>
                <a href="news.html" class="fr">更多>></a>
            </div>
            <div class="panel-body">
                <div class="p2_content_map clearfix" style="display:block;">
                 
                    <div class="meeting_content">
                        <a href="javascript:;" data-toggle="modal" data-target=".huiyi">
                            <h2>我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩 </h2>
                        </a>
                        <!-- 模态框 -->
                        <div class="modal fade huiyi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!-- 缩略图 -->
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="thumbnail">
                                                <div class="caption">
                                                    <h3>“一带一路”国际合作高峰论坛举行圆桌峰会 习近平主持会议并致辞</h3>
                                                    <img class="img-thumbnail" src="../images/xw.jpg" alt=""/>
                                                        各位国家元首，政府首脑，国际组织负责人：
                                                    　　<p>我宣布，“一带一路”国际合作高峰论坛圆桌峰会开幕！</p>
                                                    　　<p>欢迎大家来到雁栖湖畔出席“一带一路”国际合作高峰论坛圆桌峰会，共商推进国际合作、实现共赢发展大计。</p>
                                                    　　<p>“一带一路”建设是我在2013年提出的倡议。它的核心内容是促进基础设施建设和互联互通，对接各国政策和发展战略，深化务实合作，促进协调联动发展，实现共同繁荣。</p>
                                                    　　<p>这项倡议源于我对世界形势的观察和思考。当今世界正处在大发展大变革大调整之中。新一轮科技和产业革命正在孕育，新的增长动能不断积聚，各国利益深度融合，和平、发展、合作、共赢成为时代潮流。与此同时，全球发展中的深层次矛盾长期累积，未能得到有效解决。全球经济增长基础不够牢固，贸易和投资低迷，经济全球化遇到波折，发展不平衡加剧。战乱和冲突、恐怖主义、难民移民大规模流动等问题对世界经济的影响突出。</p>
                                                    　　<p>面对挑战，各国都在探讨应对之策，也提出很多很好的发展战略和合作倡议。但是，在各国彼此依存、全球性挑战此起彼伏的今天，仅凭单个国家的力量难以独善其身，也无法解决世界面临的问题。只有对接各国彼此政策，在全球更大范围内整合经济要素和发展资源，才能形成合力，促进世界和平安宁和共同发展。</p>
                                                    　　<p>“一带一路”建设根植于历史，但面向未来。古丝绸之路凝聚了先辈们对美好生活的追求，促进了亚欧大陆各国互联互通，推动了东西方文明交流互鉴，为人类文明发展进步作出了重大贡献。我们完全可以从古丝绸之路中汲取智慧和力量，本着和平合作、开放包容、互学互鉴、互利共赢的丝路精神推进合作，共同开辟更加光明的前景。</p>
                                                    　　<p>“一带一路”源自中国，但属于世界。“一带一路”建设跨越不同地域、不同发展阶段、不同文明，是一个开放包容的合作平台，是各方共同打造的全球公共产品。它以亚欧大陆为重点，向所有志同道合的朋友开放，不排除、也不针对任何一方。</p>
                                                    　　<p>在“一带一路”建设国际合作框架内，各方秉持共商、共建、共享原则，携手应对世界经济面临的挑战，开创发展新机遇，谋求发展新动力，拓展发展新空间，实现优势互补、互利共赢，不断朝着人类命运共同体方向迈进。这是我提出这一倡议的初衷，也是希望通过这一倡议实现的最高目标。</p>
                                                    　　<p>我高兴地看到，这一倡议提出以后，得到国际社会积极响应和广泛支持。100多个国家和国际组织参与其中，一大批合作项目陆续启动，有的已经落地生根。基础设施联通网络初步成型，沿线产业合作形成势头，各国政策协调不断加强，民众已经开始从合作中得到实惠，彼此距离进一步拉近。</p>
                                                    　　<p>在这个基础上，中方倡议主办这次高峰论坛，目的就是共商合作大计，共建合作平台，共享合作成果，让“一带一路”建设更好造福各国人民。</p>
                                                    　　<p>昨天的高级别会议上，各国领导人、国际组织负责人和官、产、学各界代表提出了很多有见地的想法和建议，签署了多项合作协议。希望大家通过今天的圆桌峰会，进一步凝聚共识，为“一带一路”建设国际合作指明方向，勾画蓝图。具体而言，我期待会议在以下方面取得积极成果。</p>
                                                    　　<p>第一，推动互利共赢，明确合作方向。大雁之所以能够穿越风雨、行稳致远，关键在于其结伴成行，相互借力。这为我们合作应对挑战、实现更好发展揭示了一个深刻道理。</p>
                                                    　　<p>我们要本着伙伴精神，牢牢坚持共商、共建、共享，让政策沟通、设施联通、贸易畅通、资金融通、民心相通成为共同努力的目标。要坚持在开放中合作，在合作中共赢，不画地为牢，不设高门槛，不搞排他性安排，反对保护主义。</p>
                                                    　　<p>“一带一路”建设需要和平稳定环境。各国要加强合作，对话化解分歧，协商解决争端，共同维护地区安全稳定。</p>
                                                    　　<p>第二，密切政策协调，对接发展战略。加强政策协调，不搞以邻为壑，是应对国际金融危机的重要经验，也是当前世界经济发展的客观要求。大家基于自身国情制定发展战略，它们各有特色，但目标一致，有很多联系点和相通之处，可以做到相辅相成、相互促进。</p>
                                                    　　<p>我们要以此为基础，建立政策协调对接机制，相互学习借鉴，并在这一基础上共同制定合作方案，共同采取合作行动，形成规划衔接、发展融合、利益共享局面。我们要把“一带一路”建设国际合作同落实联合国2030年可持续发展议程、二十国集团领导人杭州峰会成果结合起来，同亚太经合组织、东盟、非盟、欧亚经济联盟、欧盟、拉共体区域发展规划对接起来，同有关国家提出的发展规划协调起来，产生“一加一大于二”的效果。</p>
                                                    　　<p>第三，依托项目驱动，深化务实合作。路是走出来的，事业是干出来的。美好的蓝图变成现实，需要扎扎实实的行动。</p>
                                                    　　<p>在基础设施联通方面，要推进铁路、公路等陆上大通道建设，加快海上港口建设，完善油气管道、电力输送、通信网络。</p>
                                                    　　<p>在实体经济合作方面，要大力推进经济走廊建设，办好经贸、产业合作园区，进一步促进投资、聚合产业、带动就业，走创新发展之路。</p>
                                                    　　<p>在贸易和投资自由化便利化方面，要推动自由贸易区建设，加强规则和标准体系相互兼容，提供更好的营商环境和机制保障，充分释放互联互通的积极效应。</p>
                                                    　　<p>在金融合作方面，要拓展融资渠道，创新融资方式，降低融资成本，打通融资这一项目推进的关键环节。</p>
                                                    　　<p>民心相通是“一带一路”建设国际合作的重要内容。我们要深入开展人文领域交流合作，让合作更加包容，让合作基础更加坚实，让广大民众成为“一带一路”建设的主力军和受益者。</p>
                                                    　　<p>各位同事！</p>
                                                    　　<p>雁栖湖是一个有历史积淀的地方，是一个启迪思想的地方，也是一个开启合作征程的地方。很多人形象地比喻说，“一带一路”就像一对腾飞的翅膀。让我们以雁栖湖为新的起点，张开双翼，一起飞向辽阔的蓝天，飞向和平、发展、合作、共赢的远方！</p>
                                                    　　<p>谢谢大家。</p>
                                                    <p>
                                                        <strong>习近平致闭幕辞，总结会议达成的5点重要共识。</strong>
                                                    </p>
                                                    <p>
                                                        <strong>第一，致力于推动“一带一路”建设合作，携手应对世界经济面临的挑战。各方积极评价“一带一路”建设合作取得的进展，表示将继续努力，让各国政策沟通更有力，设施联通更高效，贸易更畅通，资金更融通，民心更相通。</strong>
                                                    </p>
                                                    <p>
                                                        <strong>第二，支持加强经济政策协调和发展战略对接，努力实现协同联动发展。各方同意加强经济、金融、贸易、投资等领域宏观政策协调；支持构建开放型世界经济，推动自由贸易区建设，促进贸易和投资自由化便利化；有效对接发展战略及合作规划，优势互补，协同并进；重视创新发展，培育新产业、新业态、新模式，挖掘增长新动力。</strong>
                                                    </p>
                                                    <p>
                                                        <strong>第三，推动各领域务实合作不断取得新成果。各方决定继续把互联互通作为重点，打造基础设施联通网络；继续积极推进经济走廊建设，推动实体经济更好更快发展；重视投资和融资合作，支持扩大相互金融市场开放，努力构建稳定、可持续、风险可控的金融保障体系。</strong>
                                                    </p>
                                                    <p>
                                                        <strong>第四，架设各国民间交往的桥梁。各方愿探讨多层次、宽领域的人文合作，营造多元互动、百花齐放的人文交流局面；加强环境保护、应对气候变化、反腐败等领域合作，便利人员往来。</strong>
                                                    </p>
                                                    <p>
                                                        <strong>第五，坚信“一带一路”建设是开放包容的发展平台，各国都是平等的参与者、贡献者、受益者。</strong>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /缩略图结束 -->
                                </div>
                            </div>
                        </div>
                        <!-- 自定义内容 -->
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="one img-circle"></div>
                                    <img class="img-circle" src="../images/xw.jpg" alt="我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩">
                                    <div class="caption">
                                        <h3><a href="news.html">我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩</a></h3>
                                        <p><a href="news.html">12月16日，“青聘果杯”2018年广西大学生职业生涯规划大赛总决赛在南宁职业技术学院圆满落幕。我校文学与传媒学院2017级汉语言174班陈泳宏、音乐舞蹈学院2016级音乐表演班周文瑜获得三等奖；文学与传媒学院2017级汉语国际教育班梁灵获得该项比赛的优胜奖。 </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="one img-circle"></div>
                                    <img class="img-circle" src="../images/xw1.jpg" alt="我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩">
                                    <div class="caption">
                                        <h3><a href="news.html">我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩</a></h3>
                                        <p><a href="news.html">职业生涯规划大赛自9月启动以来得到广大高校学子的积极响应，78所高校超过100万学生踊跃参与。经过层层选拔共40 名选手晋级总决赛。总决赛评审方式与片区赛基本一致，采取专家评审和网络投票的方式对参赛者予以评分，分数由基础理论、PPT展示、网络投票三部分组成。</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="one img-circle"></div>
                                    <img class="img-circle" src="../images/xw2.jpg" alt="我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩">
                                    <div class="caption">
                                        <h3><a href="news.html">我校3名学子在全区2018年大学生职业生涯规划总决赛中获佳绩</a></h3>
                                        <p><a href="news.html">职业生涯规划大赛自9月启动以来得到广大高校学子的积极响应，78所高校超过100万学生踊跃参与。经过层层选拔共40 名选手晋级总决赛。总决赛评审方式与片区赛基本一致，采取专家评审和网络投票的方式对参赛者予以评分，分数由基础理论、PPT展示、网络投票三部分组成。 </div>
                                </div>
                            </div>
                        </div>
                        <!-- 自定义内容 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="people">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading more">
                <span class="fl">领导人物</span>
                <a href="leader.html" class="fr">更多>></a>
            </div>
            <div class="panel-body">
                <div class="demo">
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld1.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld2.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld3.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld4.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld5.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld6.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld7.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld8.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld9.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld10.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld11.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld1.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld2.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld3.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="list">
                        <a href="#">
                            <img class="img-thumbnail" src="../images/ld4.jpg" alt=""/>
                        </a>
                        <div>
                            <img class="img-thumbnail" src="../images/ld5.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 带路利益 -->
<section class="guangxi">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading more">
                <span class="fl">最新通知</span>
                <a href="news.html" class="fr">更多>></a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="bd-dynamic-news">
                            <div class="news-list">
                                <div class="news-item">
                                    <div class="decoration">
                                        <div class="news-circle">
                                            <div class="solid-circle"></div>
                                        </div>
                                    </div>
                                    <div class="news-box">
                                        <a class="news-title" href="#content_1" data-toggle="tab" data-title="一带一路">
                                            （1）河池学院关于2018年职称重新确认结果的公示
                                        </a>
                                        <div class="news-time">
                                            2018-12-18
                                        </div>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <div class="decoration">
                                        <div class="news-circle">
                                            <div class="solid-circle"></div>
                                        </div>
                                    </div>
                                    <div class="news-box">
                                        <a href="#content_2" data-toggle="tab" data-title="一带一路" class="news-title">
                                            (2)河池学院关于组织申报2019年度国家自然科学基金项目的通知
                                        </a>
                                        <div class="news-time">
                                            2018-12-13
                                        </div>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <div class="decoration">
                                        <div class="news-circle">
                                            <div class="solid-circle"></div>
                                        </div>
                                    </div>
                                    <div class="news-box">
                                        <a href="#content_3" data-toggle="tab" data-title="一带一路" class="news-title">
                                            （3）河池学院关于2018年职称评审结果的公示
                                        </a>
                                        <div class="news-time">
                                            2018-11-30
                                        </div>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <div class="decoration">
                                        <div class="news-circle">
                                            <div class="solid-circle"></div>
                                        </div>
                                    </div>
                                    <div class="news-box">
                                        <a href="#content_4" data-toggle="tab" data-title="一带一路" class="news-title">
                                            （4）河池学院关于2018年职称认定结果的公示
                                        </a>
                                        <div class="news-time">
                                            2018-11-30
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           
                    <div class="col-lg-7">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="content_1">
                                <div class="list-group">
                                    <div class="bd-dynamic-topic">
                                        <div class="bd-topic-items">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="img-outer">
                                                        <div class="img-inner">
                                                            <img class="card-img lazy" data-original="/Public/img/apollo.jpg" alt="Card image" src="../images/20.jpg" width="250px" height="150px" style="display: inline;">
                                                            <div class="card-img-bottomlay">
                                                                图1
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="img-outer">
                                                        <div class="img-inner">
                                                            <img class="card-img lazy" data-original="/Public/img/ar.jpg" alt="Card image" src="../images/ld1.jpg" width="250px" height="150px" style="display: inline;">
                                                            <div class="card-img-bottomlay">
                                                                图2
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="img-outer">
                                                        <div class="img-inner">
                                                            <img class="card-img lazy" data-original="/Public/img/wurenche.jpg" alt="Card image" src="../images/ld4.jpg" width="250px" height="150px" style="display: inline;">
                                                            <div class="card-img-bottomlay">
                                                                图3
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="img-outer">
                                                        <div class="img-inner">
                                                            <img class="card-img lazy" data-original="/Public/img/duer.jpg" alt="Card image" src="../images/ld5.jpg" width="250px" height="150px" style="display: inline;">
                                                            <div class="card-img-bottomlay">
                                                                图4
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="content_2">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <p>丝绸之路是两汉时期中国古人开创的以洛阳、长安为起点，连接东西方文明的陆上贸易和文化交流通道，同时也是亚欧大陆经济整合战略。</p>
                                        <p>汉时期，张骞（约公元前164年―前114年）于（公元前138年―公元前126年）从长安（今陕西西安）出发，联络大月氏人，共同夹击匈奴。首次开拓丝绸之路，被称为“凿空之旅”。</p>
                                        <p>马人征服叙利亚的塞琉西帝国和埃及的托勒密王朝后，通过安息帝国、贵霜帝国和阿克苏姆帝国取得从丝绸之路上传来的中国丝绸，西汉末年，丝绸之路一度断绝。</p>
                                        <p>汉时期，班超从洛阳出发，再次出使西域，他到达了西域，他的随从到达了罗马。这是东西方文明的第一次对话。也是在东汉，印度僧人沿着丝绸之路到达洛阳，将佛教传入中国，从另一个角度拓展了丝绸之路。</p>
                                        <p>代，洛阳人 玄奘沿着丝绸之路历时19年到印度求取真经，促进了中华文明与印度文明的交流。写下了《大唐西域记》。</p>
                                        <p>绸之路是起始于中国，连接亚洲、非洲和欧洲的古代路上商业贸易路线。从运输方式上分为陆上丝绸之路和海上丝绸之路。 丝绸之路是一条东方与西方之间在经济、政治、文化进行交流的主要道路。它最初的作用是运输中国古代出产的丝绸、瓷器等商品。德国地理学家Ferdinand Freiherr von Richthofen 最早在19世纪70年代将之命名为“丝绸之路”。</p>
                                    </a>
                                </div>
                                <!-- /定制内容结束 -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="content_3">
                                <!-- 订制内容 -->
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <p>1、“一带一路”打开筑梦空间。</p>
                                        <p>2、 “一带一路”有利于将政治互信、地缘毗邻、经济互补等优势转化为务实合作、持续增长优势。</p>
                                        <p>3、通过“一带一路”建设，无论是“东出海”还是“西挺进”，将使中国与周边国家形成“五通”。</p>
                                        <p>4、“一带一路”战略合作中，经贸合作是基石。遵循和平合作、开放包容、互学互鉴、互利共赢的丝路精神，中国与沿线各国在交通基础设施、贸易与投资、能源合作、区域一体化、人民币国际化等领域，迎来共创共享的新时代。</p>
                                        <p>5、“一带一路”在平等的文化认同框架下谈合作，是国家的战略性决策，体现的是和平、交流、理解、包容、合作、共赢的精神。</p>
                                        <p>6、“一带一路”，是开放包容的经济合作倡议，不限国别范围，不是一个实体，不搞封闭机制，有意愿的国家和经济体均可参与进来，成为“一带一路”的支持者、建设者和受益者。</p>
                                    </a>
                                </div>
                                <!-- /定制内容结束 -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="content_4">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <p>中国提出两个符合欧亚大陆经济整合的大战略：</p>
                                        <p>1、丝绸之路经济带战略；</p>
                                        <p>2、21世纪海上丝绸之路经济带战略。</p>
                                        <p>即“一带一路”战略。</p>
                                        <p>丝绸之路经济带战略涵盖东南亚经济整合、涵盖东北亚经济整合，并最终融合在一起通向欧洲，形成欧亚大陆经济整合的大趋势。21世纪海上丝绸之路经济带战略从海上联通欧亚非三个大陆和丝绸之路经济带战略形成一个海上、陆地的闭环。</p>
                                        <p>边境地区作为连接中国与众多邻国的门户和纽带，在“一带一路”建设中具有独特的地位和作用。</p>
                                        <p>边境地区的和平稳定是“一带一路”建设向前推进的必要前提和保障。中国已同除印度、不丹外的12个陆上邻国解决了边界问题，未划定的中印、中不边界地区也总体保持稳定安宁。中国边境地区整体状况处于历史最好时期，邻国与中国加强合作的意愿普遍上升。</p>
                                        <p>边境地区互联互通，是“一带一路”建设的依托。边境口岸作为通道节点，在中国对外开放中的前沿窗口作用显现。中国开展亚洲公路网、泛亚铁路网规划和建设，与东北亚，中亚、南亚及东南亚国家开通公路通路13条，铁路8条。此外，油气管道、跨界桥梁、输电线路、光缆传输系统等基础设施建设取得成果。这些设施建设，为“一带一路”打下物质基础。其中最重要也是最现实可行的通道路线是：连接东北亚和欧盟这2个当今世界最发达经济体区域的以长吉图开发开放先导区为主体和中心的日本，韩国——日本海——扎鲁比诺港——珲春——吉林——长春——白城——蒙古国——俄罗斯——欧盟的高铁和高速公路规划。</p>
                                        <p>2014年8月，习近平出访蒙古国时，表示欢迎周边国家“搭便车”。</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 块结束 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <p>Copyright © </p>
</footer>

<script type="text/javascript">
    $('.meeting .thumbnail').on('mouseenter', function(){
        var that = $(this);
        // console.log(that.children('div.one'));
        that.children('div.one').addClass("img_color");
    }).on('mouseleave', function(){
        var that = $(this);
        that.children('div.one').removeClass("img_color");
    });
    $(".list").on("mouseenter mouseleave",function(e) {
        console.log(".list");
        var that = $(this);
        var w = $(this).width(); // 得到盒子宽度
        var h = $(this).height();// 得到盒子高度
        var x = (e.pageX - this.offsetLeft - (w / 2)) * (w > h ? (h / w) : 1);
        // 获取x值
        var y = (e.pageY - this.offsetTop - (h / 2)) * (h > w ? (w / h) : 1);
        // 获取y值
        var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4; //direction的值为“0,1,2,3”分别对应着“上，右，下，左”
        // 将点的坐标对应的弧度值换算成角度度数值
        if(e.type == 'mouseenter'){
            //  鼠标移入
            //  console.log(direction);  //  0 上方，1 右方，2 下方，3 左方

            //  通过direction的值来判断鼠标移入的方向，进行相应的操作
            switch(direction){
                case 0:  //  鼠标从上方进入
                    comeOn("top");
                    break;
                case 1:   //  鼠标从右方进入
                    comeOn("right");
                    break;
                case 2:   //  鼠标从下方进入
                    comeOn("bottom");
                    break;
                case 3:  //  鼠标从左方进入
                    comeOn("left");
                    break;
            }
        }else{
            //  鼠标移出
            switch(direction){
                case 0:  //  鼠标从上方进入
                    goOut("top");
                    break;
                case 1:   //  鼠标从右方进入
                    goOut("right");
                    break;
                case 2:   //  鼠标从下方进入
                    goOut("bottom");
                    break;
                case 3:  //  鼠标从左方进入
                    goOut("left");
                    break;
            }
        }

        //  鼠标移入要操作的函数comeOn
        function comeOn(str) {
            that.addClass("current");  //  图片旋转进入
            that.children("div").removeClass().addClass(str);  //  鼠标进入的方向不同，旋转的原点不同
            //  这里的removeClass()先清除前面的类，保留后面的类
        }

        //  鼠标移出要操作的函数goOut
        function goOut(str) {
            that.removeClass("current");  //  图片旋转出去
            that.children("div").removeClass().addClass(str);  //  鼠标出去的方向不同，旋转的原点不同
        }
    });
</script>
<!-- 引入bootstrap.js文件，由于bootstrap的所有js组件都依赖于jquery,所以需要先引入jquery.js文件 -->

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script>
<!-- 引入自定义js文件 -->
<script src="js/main.js"></script>
</body>
</html>
