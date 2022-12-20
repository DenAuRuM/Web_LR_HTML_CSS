<html>
<head>
    <title>Магазин бытовой техники Фаренгейт - @yield('title')</title>
    <link rel="stylesheet" href="/style.css">
    <meta charset="utf-8">
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/jquery/external/jquery/jquery.js"></script>
    <script src="javascript.js"></script>
    <script src="/jquery/jquery-ui.min.js"></script>
    <script src="https://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="jquery.maskedinput-master/dist/jquery.maskedinput.js"></script>
    <script src="https://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>
    <style> 
        .leaf-fall-container
        {
          position: relative;
          display: flex;
          justify-content: center;
          max-width: 1000px;
          width: 100%;
          height: 100vh;
          overflow: hidden;
          margin: 0;
        }
        #leaf-fall 
        {
        position:absolute;
        top:0px;
        width:100%;
        height:100%;
        text-align: center;
        z-index:-10;
        }
        #leaf-fall hr 
        {
        display: inline-block;
        width: 100%;
        height: 200px;
        background: linear-gradient(to bottom right, #fc46aa, #fec6e5);
        transform: skew(20deg);
        border-radius: 5% 40% 70%;
        box-shadow: inset 0px 0px 1px rgb(255, 77, 225);
        border: 1px solid rgb(64, 17, 48);
        z-index: 1;
        -webkit-animation: falling 5s 0s infinite;
        }

        #leaf-fall hr:nth-of-type(2n) { -webkit-animation: falling2 5s 0s infinite; }
        #leaf-fall hr:nth-of-type(3n) { -webkit-animation: falling3 5s 0s infinite; }
        #leaf-fall hr:before 
        {
        position: absolute;
        content: '';
        top: 117px;
        right: 9px;
        height: 27px;
        width: 32px;
        transform: rotate(49deg);
        border-radius: 0% 15% 15% 0%;
        border-top: 1px solid #222;
        border-bottom: 1px solid #222;
        border-left: 0px solid #222;
        border-right: 1px solid #222;
        background: linear-gradient(to right, #fc46aa, #fec6e5);
        z-index: 1;
        }

        #leaf-fall hr:after {
        content: '';
        height: 125px;
        width: 10px;
        background: linear-gradient(to right, #fc46aa, #fec6e5);
        display: block;
        transform: rotate(125deg);
        position: absolute;
        left: 85px;
        border-radius:50%;
        }

        #leaf-fall hr:nth-of-type(n) { height:23px; width:30px; }
        #leaf-fall hr:nth-of-type(n):before { width:7px; height:5px; top:17px; right:1px; }
        #leaf-fall hr:nth-of-type(n):after { width:2px; height:17px; left: 12px; top:0px; }
        #leaf-fall hr:nth-of-type(2n+1) { height:11px; width:16px; }
        #leaf-fall hr:nth-of-type(2n+1):before { width:4px; height:3px; top:7px; right:0px; }
        #leaf-fall hr:nth-of-type(2n+1):after { width:2px; height:6px; left: 5px; top:1px; }
        #leaf-fall hr:nth-of-type(3n+2) { height:17px; width:23px; }
        #leaf-fall hr:nth-of-type(3n+2):before { height:4px; width:4px; top:12px; right:1px; }
        #leaf-fall hr:nth-of-type(3n+2):after { height:10px; width:2px; top:1px; left:8px; }
        #leaf-fall hr:nth-of-type(n) { -webkit-animation-delay: 1.9s;}
        #leaf-fall hr:nth-of-type(2n) { -webkit-animation-delay: 3.9s;}
        #leaf-fall hr:nth-of-type(3n) { -webkit-animation-delay: 2.3s;}
        #leaf-fall hr:nth-of-type(4n) { -webkit-animation-delay: 4.4s;}
        #leaf-fall hr:nth-of-type(5n) { -webkit-animation-delay: 5s; }
        #leaf-fall hr:nth-of-type(6n) { -webkit-animation-delay: 3.5s;}
        #leaf-fall hr:nth-of-type(7n) { -webkit-animation-delay: 2.8s;}
        #leaf-fall hr:nth-of-type(8n) { -webkit-animation-delay: 1.5s;}
        #leaf-fall hr:nth-of-type(9n) { -webkit-animation-delay: 3.3s;}
        #leaf-fall hr:nth-of-type(10n) { -webkit-animation-delay: 2.5s;}
        #leaf-fall hr:nth-of-type(11n) { -webkit-animation-delay: 1.2s;}
        #leaf-fall hr:nth-of-type(12n) { -webkit-animation-delay: 4.1s;}
        #leaf-fall hr:nth-of-type(13n) { -webkit-animation-delay: 1s; }
        #leaf-fall hr:nth-of-type(14n) { -webkit-animation-delay: 4.7s;}
        #leaf-fall hr:nth-of-type(15n) { -webkit-animation-delay: 3s; }
        #leaf-fall hr:nth-of-type(n) { background: linear-gradient(to bottom right, #fda4ba, #fc46ca); }
        #leaf-fall hr:nth-of-type(2n+2) { background: linear-gradient(to bottom right, #fa86c4, #fc46ca); }
        #leaf-fall hr:nth-of-type(4n+1) { background: linear-gradient(to bottom right, #f79ac0, #fc46ca); }
        #leaf-fall hr:nth-of-type(n) { opacity: .7;}
        #leaf-fall hr:nth-of-type(3n+1) { opacity: .5;}
        #leaf-fall hr:nth-of-type(3n+2) { opacity: .3;}
        #leaf-fall hr:nth-of-type(n) { transform: rotate(180deg);}
        #leaf-fall hr:nth-of-type(n) { -webkit-animation-timing-function:ease-in-out;}

        @-webkit-keyframes falling {
        0% {
        -webkit-transform:
        translate3d(0,0,0) rotate(0deg);
        }
        90% {
        -webkit-transform:
        translate3d(-350px,700px,0) rotate(90deg);
        opacity: 1;
        }
        100% {
        -webkit-transform:
        translate3d(-350px,700px,0) rotate(90deg);
        opacity: 0;
        }
        }
        @-webkit-keyframes falling3 {
        0% {
        -webkit-transform:
        translate3d(0,0,0) rotate(-20deg);
        }
        70% {
        -webkit-transform:
        translate3d(-230px,100vh,0) rotate(-70deg);
        opacity: 0.4;
        }
        90% {
        -webkit-transform:
        translate3d(-230px,100vh,0) rotate(-70deg);
        opacity: 0.1;
        }
        100% {
        -webkit-transform:
        translate3d(-230px,100vh,0) rotate(-70deg);
        opacity: 0;
        }
        }
        @-webkit-keyframes falling2 {
        0% {
        -webkit-transform:
        translate3d(0,0,0) rotate(90deg);
        }
        90% {
        -webkit-transform:
        translate3d(-400px,100vh,0) rotate(0deg);
        opacity: 1;
        }
        100% {
        -webkit-transform:
        translate3d(-400px,100vh,0) rotate(0deg);
        opacity: 0;
        }
        }
        </style>
    </head>
 <body style="position: relative;">
      <div id="leaf-fall">
        <hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
      </div>

  <table class="tbl" align="center" width="1000px" bgcolor="#7be382">
  <tbody>
    
  <a href="LR1index.html"><td width="200px" align="right"><img width="150" style="align-items: center"; src="/img/Farenheit.png"></td></a>
    <td height="100" align="center"><h1>Магазин бытовой техники</h1></td>
    <td align="left" width="250px">
          @auth
            <span style="color:black; font-weight:bold;">
              Здравствуй, {{ auth()->user()->nick}} <br/>
              <a href="{{route('auth.profile')}}">Профиль</a><br/>
              <a href="{{route('auth.logout')}}">Выйти</a><br/>
              @havePermission('izbrann')
              ТЫ ИЗБРАННЫЙ
              @endif
            </span>
          @else
          <form method="GET" action="{{route('auth.login.do' )}}">
            <table cellspacing="3px">
                <tr>
                    <td>
                        <div>
                            <input type="text" placeholder="Phone or email" name="email" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <input type="password" placeholder="Password" name="psw" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input">
                        <div>
                            <button type="submit">Войти</button>
                        </div>
                        <div>
                            <a href="{{ route ('auth.register')}}" target=iframe_a class="menu-link">Регистрация</a>
                        </div>
                    </td>
                </tr>
            
            </table>
          </form>
          @endauth
    </td>    
  </tbody>


 <table align="center" width="1000px" bgcolor="#98FB98">
  <tr>
    <td width="200px" align="center"><a href="/static-pages" target=iframe_a class="menu-link">Редактор типа</a></td>
    <td width="200px" align="center"><a href="{{ route ('shop.category.view', 2 )}}" target=iframe_a class="menu-link">Котельное оборудование</a></td>
    <td width="200px" align="center"><a href="{{ route ('shop.category.view', 3 )}}" target=iframe_a class="menu-link">Насосное оборудование</a></td>
    <td width="200px" align="center"><a href="{{ route ('shop.cart.view')}}" target=iframe_a class="menu-link">Корзина</a></td>
  </tr>
</table> 
<table align="center" height="20" width="1000px" bgcolor="transparent"><td></td></table>
<table align="center" height="700px" width="1000px" bgcolor="transparent">
  <tr>
    <td valign="top" width="150px" align="center" bgcolor="transparent">
      <a href="{{ route ('static_page', 'MainPage')}}" target=iframe_a>Главная</a><br>
      <a href="{{ route ('shop.category.view', 1 )}}" target=iframe_a>Радиаторы отопления</a><br>
      <a href="{{ route ('shop.category.view', 2 )}}" target=iframe_a>Котельное оборудование</a><br>
      <a href="{{  route ('shop.category.view', 4 )}}" target=iframe_a>Сантехника</a>
    </td>
    <td valign="top" width="500px" align="left" bgcolor="transparent">
        @yield('content')
    </td>

  </tr>
</table> 
@yield('scripts')
 </body>
 <footer>
  <hr/>
  <p><h4 align="center">(c) Все права защищены, Farenheit 2022 <a href = "{{ route ('static_page', 'map')}}" target=iframe_a>Найти нас на карте</href></h4></p>
</footer>

<script src="LR2script.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<script>
  $(()=>{
    $('[data-ajax]').click(()=>{
      var el = $(event.target);
      var after = el.data('ajax-after') != undefined ? el.data('ajax-after') : false;
      console.log(after);
      $.ajax(el.data('ajax'))
      .done((text)=>{
        $.notify(text, "success");
        if(after)
          eval(after);
      })
      .fail((xmlHttpRequest)=>{
        $.notify(xmlHttpRequest.statusText + ' ' + xmlHttpRequest.status, "error");
      });
    });
  });
</script>

</html>
