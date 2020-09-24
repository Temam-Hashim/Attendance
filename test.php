<html>
<style>
    * {box-sizing: border-box}

    #header {
      background-color: #00a8ec;
      width: 100%;
      height: 30px;
      margin: 0;
      padding-right: 10px;
    }


    #nav {
      float: right;
    }

    .message-count {
      color: #fff;
      font-size: 10px;
      font-family: Arial, san-serif;
      font-weight: bold;
    }


    .badge {
      position: absolute;
      right: 0px;
      top: -5px;
      z-index: 10;
    }

    .messages img {
      width: 15px;
      height: auto;
    }

    .messages {
      width: 31px;
      height: 19px;
      background-image: url(https://i.imgur.com/aoXZqPc.gif);
      background-position: 0 0;
      background-repeat: no-repeat;
      display: inline-block;
      vertical-align: top;
      margin: 15% 0 0 0;
      position: relative;
    }

    .badge {
      background: radial-gradient( 5px -9px, circle, white 8%, #ed2324 26px );
      background: -moz-radial-gradient( 5px -9px, circle, white 8%, #ed2324 26px );
      background: -ms-radial-gradient( 5px -9px, circle, white 8%, #ed2324 26px );
      background: -o-radial-gradient( 5px -9px, circle, white 8%, #ed2324 26px );
      background: -webkit-radial-gradient( 5px -9px, circle, white 8%, #ed2324 26px );
      background-color: #ed2324;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      text-align: center;
      padding: 5% 5%;
      position: relative;
      right: -5.8px;
      top: -9px;
      float: right;
      display: block;
    }

    .message-count {
      position: relative;
      display: block;
      font: bold 14px/13px Helvetica, Verdana, Tahoma;
      text-align: center;
      margin: 0;
      top: 2px;
    }
</style>


<div id="header">
  <div id="nav">
    <div class="messages">
      <div class="badge">
        <div class="message-count">99</div>
      </div>
    <div>
  </div>
</div>
</html>