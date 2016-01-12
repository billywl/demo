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
