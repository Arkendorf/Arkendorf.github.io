@echo off

:: Specify source directory
set "src=src"
:: Specify distribution directory
set "dist=docs"
:: Specify CNAME
set "CNAME=amon.us"

:: Delete previous compiled folder
@RD /S /Q "%CD%\%dist%"

:: Copy over contents
robocopy "%CD%\%src%" "%CD%\%dist%" /E >nul

:: CD into folder
cd "%CD%\%dist%"

:: Execute all index.php files and create a index.html file in the same directory
for /f "tokens=* delims=" %%a in ('dir "*index.php" /s /b') do (
    php %%a > %%~dpa%%~na.html
)

:: Delete unnecessary files (PHP is no longer used after it generates HTML)
for /f "tokens=* delims=" %%a in ('dir "*.php" "*.bat" "*.cs" "*.lua" "*.kt" "*.svg" /s /b') do (
    DEL %%a
)
:: Delete the one .js file we don't actually want
DEL %CD%\code\samples\scroll.js

:: Minify all files
:: Minifier is from https://github.com/tdewolff/minify/tree/master/cmd/minify
%CD%\..\minify.exe -r %CD% -o %CD%\.. 

:: Delete empty folders
ROBOCOPY "." "." /S /MOVE >nul

:: Create CNAME file
echo|set /p="%CNAME%" > "%CD%\CNAME"

cd ..