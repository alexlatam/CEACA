@extends('perfil')


@section('head')
  <title>Ceaca | mi perfil</title>
@endsection

@section('content')
  <h2 class="pt-3">Bienvenido a tu perfil {{$user->name}}</h2>
  <hr>

  <div>
    <div class="row ml-4">
        <div class="col-6 mb-3">
          <h5>Nombre</h5>
          <input type="text" class="form-control" value="{{$user->name}}" disabled name="">
        </div>
        <div class="col-6">
          <h5>Email</h5>
          <input type="text" class="form-control" value="{{$user->email}}" disabled name="">
        </div>
        <div class="col-6 mb-3">
          <h5>País</h5>
          <input type="text" class="form-control" value="{{$user->pais}}" disabled name="">
        </div>
        <div class="col-6">
          <h5>Empresa</h5>
          <input type="text" class="form-control" value="{{$user->empresa}}" disabled name="">
        </div>
        <div class="col-6 mb-3">
          <h5>Planta</h5>
          <input type="text" class="form-control" value="{{$user->planta}}" disabled name="">
        </div>
        <div class="col-6">
          <h5>Cargo</h5>
          <input type="text" class="form-control" value="{{$user->cargo}}" disabled name="">
        </div>
        <div class="col-12 mb-3">
          <h5>Especialidad</h5>
          <input type="text" class="form-control" value="{{$user->especialidad}}" disabled name="">
        </div>

        <!-- TIPO CALDERA -->

        <div class="col-3 mb-3">
          <h5>Tipo de Caldera</h5>
          <div class="form-check">
              <input id="" type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="De calefaccion" required autocomplete="cargo"
              <?php if($user->tipo_caldera === 'calefacción') echo 'checked' ?>
              >
              <label class="form-check-label">
                  De calefaccion
              </label>
          </div>
          <div class="form-check">
              <input id="" type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="Pequeñas y medianas Pirotubulares" required autocomplete="cargo"
              <?php if($user->tipo_caldera === 'Pequeñas y medianas Pirotubulares') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Pequeñas y medianas Pirotubulares 
              </label>
          </div>
          <div class="form-check">
              <input id="" type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->tipo_caldera === 'Pequeñas y medianas Acuatubulares') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Pequeñas y medianas Acuatubulares
              </label>
          </div>
          <div class="form-check">
              <input id="" type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->tipo_caldera === 'Grandes Acuatubulares') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Grandes Acuatubulares 
              </label>
          </div>
        </div>


        <!-- ACTIVIDAD -->


        <div class="col-5">
          <h5>Área de actividad</h5>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Operación') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Operación
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Mantenimiento') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Mantenimiento 
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Reparación') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Reparación
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Inspección') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Inspección
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Ingeniería') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Ingeniería
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Combustión') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Combustión
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name=""   value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Tratamiento de agua') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Tratamiento de agua
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Eficiencia') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Eficiencia
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Análisis de falla - Confiabilidad') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Análisis de falla - Confiabilidad
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Suministros') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Suministros
              </label>
          </div>
          <div class="form-check">
              <input  type="radio" disabled  class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              <?php if($user->actividad === 'Operación') echo 'checked' ?>
              >
              <label class="form-check-label">
                  Profesor (a)
              </label>
          </div>
        </div>


        <!-- SECTOR -->


        <div class="col-4">
          <h5>Sector</h5>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror"  name="" value=""
               required autocomplete="cargo" disabled

               @foreach($checkboxs as $checkbox)
                <?php if($checkbox === 'Hoteles') echo 'checked' ?>
               @endforeach

              >
              <label class="form-check-label">
                  Hoteles 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo"
              disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Hoteles') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Hospitales 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Hoteles') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Farmacéutica 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Alimentos y bebidas') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Alimentos y bebidas 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Ingeniería') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Ingeniería 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Azúcar y/o Alcohol') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Azúcar y/o Alcohol  
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Pulpa & Papel') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Pulpa & Papel  
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled>
              <label class="form-check-label"
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Plásticos y Petroquímica') echo 'checked' ?>
              @endforeach
              >
                  Plásticos y Petroquímica 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Refinería de Petróleo') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Refinería de Petróleo 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Termoeléctricas') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Termoeléctricas 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Servicios') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Servicios 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Suministros y materiales') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Suministros y materiales 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Instituciones Reguladoras') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Instituciones Reguladoras 
              </label>
          </div>
          <div class="form-check">
              <input  type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="" value="" required autocomplete="cargo" disabled
              @foreach($checkboxs as $checkbox)
               <?php if($checkbox === 'Univerisidades - Academia') echo 'checked' ?>
              @endforeach
              >
              <label class="form-check-label">
                  Univerisidades - Academia 
              </label>
          </div>  
        </div>

    </div>
  </div>

@endsection