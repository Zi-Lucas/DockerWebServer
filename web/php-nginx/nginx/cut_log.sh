#!/bin/bash
#Filename:fenge.sh
d=$(date -d "-1 day" "+%Y%m%d")    #显示一天前的时间
logs_path="/var/log/nginx"
pid_path="/usr/local/nginx/logs/nginx.pid"
[ -d $logs_path ] || mkdir -p $logs_path   #创建日志文件目录
mv /usr/local/nginx/logs/access.log       #移动并重命名日志文件 ${logs_path}/test.com-access.log-$d
kill -USR1 $(cat $pid_path)       #重建新的日志文件
find $logs_path -mtime +30 | xargs rm -rf   #删除30天之前的日志文件