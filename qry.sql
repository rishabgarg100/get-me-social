create database dbsocial
use dbsocial

create table tbuser(
userid varchar(50) primary key,
uname varchar(50),
pwd varchar(50),
gender varchar(10),
sques varchar(50),
sans varchar(50),
imgname varchar(50),
about varchar(200),
hobbies varchar(200),
interests varchar(200),
qualification varchar(50),
sports varchar(200)
)

create table tbfriend(
sno int primary key,
userid varchar(50),
friendid varchar(50),
status int,
foreign key(userid) references tbuser(userid),
foreign key(friendid) references tbuser(userid)
)

create table tbmsg(
msgid int primary key,
msgdesc varchar(200),
frmusrid varchar(50),
tousrid varchar(50),
date varchar(20),
time varchar(20),
foreign key(frmusrid) references tbuser(userid),
foreign key (tousrid) references tbuser(userid)
)

create table tbgroup(
groupid int primary key,
gname varchar(50),
ownerid varchar(50),
gdesc varchar(500),
gimg varchar(50),
gdate varchar(10),
foreign key (ownerid) references tbuser(userid)
)

create table tbgroupmember(
sno int primary key,
userid varchar(50),
groupid int,
foreign key (userid) references tbuser(userid),
foreign key(groupid) references tbgroup(groupid)
)

create table tbgrouptopic(
topicid int primary key,
groupid int,
topicname varchar(200),
userid varchar(200),
date varchar(20),
time varchar(20),
foreign key (groupid) references tbgroup(groupid),
foreign key (userid) references tbuser(userid)
)

create table tbtopicmsg(
msgid int primary key,
topicid int,
msg varchar(200),
postedby varchar(50),
date varchar(20),
time varchar(20),
foreign key (topicid) references tbgrouptopic(topicid),
foreign key (postedby) references tbuser(userid)
)
