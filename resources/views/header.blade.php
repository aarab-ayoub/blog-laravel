<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>

<style>
    body {
        background: #F3F4F6;
        color: #404040;
        font: 12px/1.4 Arial;
        min-width: 1300px;
        position: relative;
    }

    a {
        color: #bebebe;
        text-decoration: none;
    }

    ul {
        list-style: none;
    }


    .horizontal-menu {
        background-color: #F3F4F6;
        color: #BEBEBE;
        display: block;
        height: 50px;
        margin: 20px auto;
        max-width: 600px;
    }


    .horizontal-menu.plain {
        display: block;
    }

    .horizontal-menu.plain li {
        float: left;
        height: 100%;
        width: 30%;
    }

    .horizontal-menu.plain li a {
        display: block;
        height: 100%;
        line-height: 50px;
        text-align: center;
        transition: background-position 0.2s ease 0s;
    }

    .horizontal-menu.plain li a {
        transition: background-position 0.1s ease 0s;
    }

    .horizontal-menu.plain li:not(.active):hover a {
        color: #FFF;
        background-position: 100% 0;
    }


    .horizontal-menu.plain li a {
        background: #2c2d2f linear-gradient(to left, #3B3D3F 50%, #2c2d2f 50%) repeat scroll 0 0 / 200% 100%;
    }

    .horizontal-menu.plain li.active a {
        background: #DB3839;
        color: #FFF;
    }

    .list-group-container {
        display: grid;
        grid-template-columns: auto auto;
        gap: 49px;
        column-gap: 3%;
        padding: 10px;
        margin-top: 5%;
    }

    .list-group-item {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        font-size: 10px;
        border-radius: 24px;
        height: 100%;
        font-size: 15px;

    }

    .list-group-item:hover {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        font-size: 10px;
        border-radius: 24px;
        height: 100%;
        font-size: 15px;
        box-shadow: 0px 8px 34px 0px rgb(114, 112, 112);
        transition: 582ms ease-out 202ms;
    }
    .show {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        font-size: 10px;
        border-radius: 24px;
        height: 50%;
        position: relative;
        left: 15%;
        width: 60%;
        font-size: 15px;
        padding: 5%;
    }

    .show:hover {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        font-size: 10px;
        border-radius: 24px;
        height: 50%;
        position: relative;
        left: 15%;
        width: 60%;
        font-size: 15px;
        box-shadow: 0px 8px 34px 0px rgb(114, 112, 112);
        transition: 582ms ease-out 202ms;
    }
    img{
        width: 14%;
        position: relative;
        bottom: 40%;
    }
    .show .pub{
        position: relative;
        right: 38%;
        bottom: 20%;
    }
    .show .cr{
        position: relative;
        bottom: 34%;
    }
    .show h3{
        position: relative;
        bottom: 34%;
    }
    .show section{
        position: relative;
        bottom: 34%;
    }
    .show h2{
        position: relative;
        right: 41%;
        bottom: 20%
    }

    .button-17 {
        align-items: center;
        appearance: none;
        background-color: #fff;
        border-radius: 24px;
        border-style: none;
        box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px, rgba(0, 0, 0, .14) 0 6px 10px 0, rgba(0, 0, 0, .12) 0 1px 18px 0;
        box-sizing: border-box;
        color: #3c4043;
        cursor: pointer;
        display: inline-flex;
        fill: currentcolor;
        font-family: "Google Sans", Roboto, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 48px;
        justify-content: center;
        letter-spacing: .25px;
        line-height: normal;
        max-width: 100%;
        overflow: visible;
        margin-bottom:10px;
        padding: 2px 24px;
        position: relative;
        left:150px;
        text-align: center;
        text-transform: none;
        transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1), opacity 15ms linear 30ms, transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: auto;
        will-change: transform, opacity;
        z-index: 0;
    }

    .button-17:hover {
        background: #F6F9FE;
        color: #174ea6;
    }

    .button-17:active {
        box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
        outline: none;
    }

    .button-17:focus {
        outline: none;
        border: 2px solid #4285f4;
    }

    .button-17:not(:disabled) {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
    }

    .button-17:not(:disabled):hover {
        box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
    }

    .button-17:not(:disabled):focus {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
    }

    .button-17:not(:disabled):active {
        box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
    }

    .button-17:disabled {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
    }
</style>
<header>
    <nav class="horizontal-menu plain">
        <ul>
            <li class="active"><a href='#'>posts</a></li>
            <li><a href='#'>services</a></li>
            <li><a href='#'>contact</a></li>
        </ul>
    </nav>
</header>
