<div class="container index-content">
<nav>
    <div class="cyan lighten-2 nav-wrapper">
      <div class="col s4">
        <a href="index.php" class="breadcrumb">首頁</a>
        <a href="#!" class="breadcrumb">會員註冊</a>
      </div>
    </div>
</nav>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="account" type="text" class="validate">
          <label for="account">帳號</label>
        </div>
        <div class="input-field col s6">
          <input id="e-mail" type="text" class="validate">
          <label for="e-mail">e-mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">密碼</label>
        </div>
        <div class="input-field col s6">
          <input id="studentid" type="text" class="validate">
          <label for="studentid">學號</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password2" type="password" class="validate">
          <label for="password2">確認密碼</label>
        </div>
        <div class="input-field col s6">
          <input id="name" type="text" class="validate">
          <label for="name">暱稱(可選)</label>
          已有帳號? <a href="login.php">登入</a>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
</div>