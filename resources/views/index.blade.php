<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8"/>
     <title>SISTEMA DE GESTION</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="css/login.css">
     <link rel="stylesheet" href="css/style.css">
      
</head>
<body class="login"> 

        <div class="logo">
            <img src="{{asset('/img/LOGO-TEC.png')}}" alt="Sistema de Actividades Complementarias">
            <p>Sistema de Actividades Complementarias</p>
        </div>
        <div class="content">                         
      
        <form method="POST"  action="{{ route ('user.login')}}" >                         
              @csrf  
                <h4 class="form-title">Inicio de Sesión</h4>
                <div class="form-group">
                     <label class="control-label">USUARIO:</label>
                    <div class="input-icon">
                        <i class="fas fa-user-circle"></i>
                        <input class="form-control @error('name') is-invalid @enderror"  type="text"  placeholder="Ingrese usuario" id="name" name="name" value="{{old('name')}}"/>                        
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                     </div>
                </div>
                <div class="form-group">
                    <label class="control-label">CONTRASEÑA:</label>
                    <div class="input-icon">
                           <i class="fas fa-lock"></i>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Ingrese contraseña"  id="password" name="password"  value="{{old('password')}}"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>                

                <hr />
                <div class="form-actions">
                    <button class="btn btn-success btn-block">
                         Ingresar </button>
                </div>
            </form>    
            <script src="https://kit.fontawesome.com/f1f590edee.js" crossorigin="anonymous"></script>        
        </div>
</body>
</html>