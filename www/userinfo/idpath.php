<?php
session_start();
print "Sessiion ID : " . session_id();
session_save_path('C:\temp');   # 저장 위치 변경 불가
print "세션의 저장 위치 : " . session_save_path();
?>