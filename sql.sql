-- sql for session
-- 进入数据库
mysql -h127.0.0.1 -uroot -proot

-- 创建数据库
create database session charset utf8;
use session;

-- 创建表
use session;
create table session(
sess_id char(32) not null,
sess_info text,
unique key(sess_id)
)charset utf8;

-- 修改表：增加字段
alter table session add column sess_expire int not null default 0;

-- 创建数据表
create table demo(
id int not null primary key auto_increment,
a_username varchar(10) not null comment '用户名',
a_password char(50) not null comment '密码,md5加密'
)charset utf8;

-- 添加一个字段cid
alter table demo add column cid int not null default 0;

-- 修改几个用户的cid
update demo set cid = 1  where id>3;
update demo set cid = 2  where id>7;
