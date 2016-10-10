@include('home.header')
<body>
<!-- login-->
<div class="login-demo" >
    <form method="post" action="/login/save">
        {{ csrf_field() }}
        <div class="form-group">
            <label>帐号:</label>
            <input type="text" name="phone" id="" placeholder="帐号" />
        </div>
        <div class="form-group">
            <label>密    码:</label>
            <input type="password" name="password" id="" value="密码" />
        </div>
        <div class="form-group">
            <input class="loginBut" type="submit" name="submit" id="" value="登录" />
        </div>
    </form>
</div>
</body>
</html>
