<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
<link rel="stylesheet" href="/css/app.css"> 
<body>
  <div class="container mt-5">
    <div class="card col-sm-6 mx-auto">
      <h1 class="text-center my-2">Encuesta Redes Sociales</h1>   
      <form method="POST" action="/store"> 
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group row">
            <label for="inputEmail3">Correo Electronico</label>
            <div>
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico">
            </div>
          </div>
          <div class="form-group row">
              <label for="range_ege">Rango de Edad</label>
              <div>
                <select name="range_ege" id="range_ege" class="form-control">
                  <option selected>Seleccione</option>
                  <option value="1">18 - 25</option>
                  <option value="2">26 - 33</option>
                  <option value="3">34 - 40</option>
                  <option value="4">40+</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="sexo">Sexo</label>
              <div>
                <select name="sexo" id="sexo" class="form-control">
                  <option selected>Seleccione</option>
                  <option value="F">Femenino</option>
                  <option value="M">Masculino</option>
                </select>
              </div>
            </div>
          <div class="form-group row">
            <label for="favorite_social_network">Red Social Favorita</label>
            <div>
              <input type="text" class="form-control" name="favorite_social_network" id="favorite_social_network" placeholder="Red Social Favorita">
            </div>
          </div>
          <div class="form-group row">
            <label for="time_facebook">Tiempo promedio al día en Facebook</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-facebook py-1"></i></div>
              </div>
              <input type="text" class="form-control" name="time_facebook" id="time_facebook" placeholder="Tiempo en horas">
            </div>
          </div>
          <div class="form-group row">
            <label for="time_whatsapp">Tiempo promedio al día en WhatsApp</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-whatsapp py-1"></i></div>
              </div>
              <input type="text" class="form-control" name="time_whatsapp" id="time_whatsapp" placeholder="Tiempo en horas">
            </div>
          </div>
          <div class="form-group row">
            <label for="time_twitter">Tiempo promedio al día en Twitter</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-twitter py-1"></i></div>
              </div>
              <input type="text" class="form-control" name="time_twitter" id="time_twitter" placeholder="Tiempo en horas">
            </div>
          </div>
          <div class="form-group row">
            <label for="time_instagram">Tiempo promedio al día en Instagram</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-instagram py-1"></i></div>
              </div>
              <input type="text" class="form-control" name="time_instagram" id="time_instagram" placeholder="Tiempo en horas">
            </div>
          </div>
          <div class="form-group row">
            <label for="time_tiktok">Tiempo promedio al día en TikTok</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-tiktok py-1"></i></div>
              </div>
              <input type="text" class="form-control" name="time_tiktok" id="time_tiktok" placeholder="Tiempo en horas">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10 my-2">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a class="btn btn-primary" href="/statistics">Estadisticas</a>
            </div>
          </div>
        </div> 
      </form>
    </div>
  </div>
</body>  
<script src="/js/app.js"></script>