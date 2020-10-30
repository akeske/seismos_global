@echo off
cls
WHERE git
IF %ERRORLEVEL% NEQ 0  start "" https://git-scm.com/download/win
git pull
pause