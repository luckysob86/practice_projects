<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>google_homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="centered"> 
            <div id="logo">
                <img src="https://www.google.com/images/srpr/logo11w.png" alt="google-logo" height="95" width="269">
            </div>
            <div id="search-fields">
                <form>
                    <input type="search" name="search">
                    <div id="g_microphone"></div>
                    <input type="submit" value="Google Search">
                    <input type="submit" value="I'm Feeling Lucky">
                </form>
            </div>
        </div>
        <div id="footer">
            <div id="left_side">
                <a href="#">Advertising</a>
                <a href="#">Business</a>
                <a href="#">About</a>
            </div>
            <div id="right_side">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Settings</a>
            </div>
        </div>
    </body>
</html>
<style>
    #footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
        height: 40px;
        background: #E4E4E4;
        line-height: 40px;
    }
    
    #left_side {
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding-left: 27px;
    }
    
    #right_side {
        position: absolute;
        bottom: 0px;
        right: 0px;
        padding-right: 27px;
    }
    
    div a {
        position: relative;
        text-align: center;

    }
    
    a {
        color: #666;
        margin: 15px 15px 15px 15px;
        text-decoration: none;
        font-family: arial,sans-serif;
        font-size: small;
    }
    
    #centered {
        width: 800px;
        height: 500px;
        position: fixed;
        top: 40%;
        left: 50%;
        margin-left: -400px;
        margin-top: -250px;
    }
    
    #logo {
        position: relative;
        height: 180px;
    }
    
    #logo img{
        position: absolute; 
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    input:first-of-type {
        width: 568px;
        height: 28px;
        display: block;
        margin: 0 auto !important;

    }
    
    #search-fields {
        position: relative;
    }
    
    #search-fields input:nth-of-type(2n+0){
        margin-top: 15px;
        margin-right: 15px;
        margin-left: 280px;
    }
    
    #g_microphone {
/*        background: url(./images/g_microphone.gif) no-repeat center;
        background-size: 14px 19px;
        height: 23px;
        width: 17px;*/
        display: none;
    }
</style>
