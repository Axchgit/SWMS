# 学生选课系统
```
xkxt
├─css       		样式文件夹
├─xkxt.sql         数据库文件
├─README.md       README文件
├─files			    文件存放目录
│  ├─course_materiak     课程资料存放目录
│  ├─student_work      	  学生上交作业存放目录
│  └─teacher——work       教师作业发布存放目录 	  
├─front       		前台文件目录
├─images       		图片文件夹
├─old       		无用文件夹
├─style       		样式文件夹
├─admin_course_add_s.php       		课程添加-数据库操作
├─admin_course_add.php       		课程添加页面
├─admin_course_list.php      		管理员——课程列表页面
├─admin_course_update_s.php       	课程修改-数据库操作
├─admin_course_update.php       	课程修改页面
├─admin_index.php       		 	管理员主页面
├─admin_self...      		 		管理员添加、修改等，与课程模块相似
├─admin_student...       			学生模块同上
├─admin_teacher...      			教师模块同上。
├─conn.php       		数据库链接文件
├─del.php       		删除操作执行文件（管理员删除课程/删除学生/删除教师/删除管理员||学生退选/删除作业/删除资料）
├─function.php       	跳转操作执行文件
├─login.html       		登录界面
├─login.php       		登录验证
```
######以下为学生界面功能
```
├─student_cancel.select.php       学生退选
├─student_course_list.php         课程列表/选课入口
├─student_course_select.php       查询课程
├─student_index.php       		    学生主页	
├─student_info.php       		   学生个人信息
├─student_material_list.php       课程资料列表			
├─student_pw_save.php       	修改密码-数据库操作
├─student_pw_update.php       	修改密码	
├─student_select_course.php		学生选课-数据库操作
├─student_selected_list.php      已选课程列表		
├─student_twork_list.php      	作业列表	
├─student_upwork_list.php		已上交作业列表
├─student_work_upload.php  		上交作业
```
######以下为教师界面功能
```
├─teahcer_course_info.php		授课信息
├─teahcer_index.php				教师主页
├─teacher_material_list.php  	课程资料列表
├─teacher_material_upload.php 	课程资料上传
├─teacher_pw_save.php			修改密码-数据库操作
├─teacher_pw_update.php  		修改密码
├─teacher_student_cancle.php	使学生退选-数据库操作
├─teacher_student_list.php 		学生列表/学生评分
├─teacher_student_mark.php		学生评分打分页面
├─teahcer_swork_list.php  		学生作业列表/打分/下载
├─teahcer_swork_mark.php 		作业打分页面
├─teacher_work_list.php			已发布作业列表
└─teacher_work_upload.php  		发布作业
 
```