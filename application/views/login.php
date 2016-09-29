<body style="background-color:#0073B3 ">
<main class="flex-wrap flex-100 flex-center absolute" >
<section class="container flex-wrap center" style="margin-top: 10%;">
    <div class="login" style="background-color: #2EAAE1;margin-left: 24%;
    text-align: center;
    width: 50%;" >
       <h1>Inicio de sesión</h1>
        <form method="post" action="/principal/login">
         <div>
          <p><label for="">E-mail : </label><input type="text" name="email" value="" placeholder="email"></p>
          <p><label for="">Contraseña : </label><input type="password" name="password" value="" placeholder="Password"></p>
       
          </p>
         </div>
          <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
  </section>
  </main>
</body>