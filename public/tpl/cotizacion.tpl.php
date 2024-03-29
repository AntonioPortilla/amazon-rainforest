<div class="container bg-arp">
  <div class="row">
    <div id="cotiCarousel" class="carousel slide" data-ride="carousel">      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/<?php echo $lang['coti'] ?>.jpg" alt="cotizacion">          
        </div>
      </div>
    </div>      
  </div>
</div>
<div class="container cotizacion">
  <div class="row title">
    <div class="col-lg-12">
      <ul class="breadcrumb">
        <li>
          <a href="index.php"><?php echo $lang['inicio']; ?></a> <span class="divider"></span>
        </li>
        <li class="active"><?php echo $lang['cotizacion']; ?></li>
      </ul>
      <fieldset>
        <legend> <span><?php echo $lang['cotizacion']; ?></span> </legend>
      </fieldset>      
    </div>
  </div>
  <form class="form-horizontal" id="formContizacion">      
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  
        <h3><?php echo $lang['select_products']; ?></h3>          
        <div class="form-group form-group-sm encabezado">
          <label class="col-sm-6 control-label" for="nombres"><?php echo $lang['productos']; ?></label>
          <label class="col-sm-3 control-label" for="nombres"><?php echo $lang['cantidad']; ?> (Kg)</label>
          <label class="col-sm-3 control-label" for="nombres"><?php echo $lang['presentacion']; ?></label>          
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> <?php echo $lang['nomUnia']; ?>
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_unia" name="cant_unia">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_unia">
              <option value="<?php echo $lang['trozado']; ?>" selected><?php echo $lang['trozado']; ?></option>
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>
              <option value="<?php echo $lang['extracto']; ?>"><?php echo $lang['extracto']; ?></option>
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Chuchuhuasi
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_chuchuhuasi" name="cant_chuchuhuasi">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_chuchuhuasi">
              <option value="<?php echo $lang['trozado']; ?>" selected><?php echo $lang['trozado']; ?></option>
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>
              <option value="<?php echo $lang['extracto']; ?>"><?php echo $lang['extracto']; ?></option>
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Tahuari
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_tahuaru" name="cant_tahuaru">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_tahuaru">
              <option value="<?php echo $lang['trozado']; ?>" selected><?php echo $lang['trozado']; ?></option>
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>
              <option value="<?php echo $lang['extracto']; ?>"><?php echo $lang['extracto']; ?></option>
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Graviola
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_graviola" name="cant_graviola">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_graviola">
              <option value="<?php echo $lang['hojas']; ?>" selected><?php echo $lang['hojas']; ?></option>
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>              
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Chancapiedra
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_chancapiedra" name="cant_chancapiedra">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_chancapiedra">
              <option value="<?php echo $lang['hojas']; ?>" selected><?php echo $lang['hojas']; ?></option>
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>              
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Clavo Huasca
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_clavo" name="cant_clavo">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_clavo">              
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>              
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Jergon Sacha
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_sasha" name="cant_sasha">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_sasha">
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>              
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>              
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Abuta
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_abuta" name="cant_abuta">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_abuta">
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>              
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['triturado']; ?></option>
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>
        <div class="form-group form-group-sm">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Palo Santo
              </label>
            </div>
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="cant_palo" name="cant_palo">
          </div>
          <div class="col-sm-3">
            <select class="form-control" name="pre_palo">
              <option value="<?php echo $lang['hojas']; ?>" selected><?php echo $lang['trozado']; ?></option>
              <option value="<?php echo $lang['triturado']; ?>"><?php echo $lang['viruta']; ?></option>
              <option value="<?php echo $lang['pulverizado']; ?>"><?php echo $lang['pulverizado']; ?></option>              
              <option value="Conos">Conos</option>
              <option value="<?php echo $lang['otro']; ?>"><?php echo $lang['otro']; ?></option>
            </select>            
          </div>                    
        </div>        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h3><?php echo $lang['info_empresa']; ?></h3>
        <p>
        <span class="text-danger"> <?php echo $lang['requerido']; ?>  </span>
      </p>
        <div class="form-group form-group-sm contactar">
          <label class="col-sm-3 control-label" for="nombres"><?php echo $lang['nombres']; ?> (*)</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nombres" name="nombres" required>
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="empresa"><?php echo $lang['empresa']; ?></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="empresa" name="empresa" >
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="cargo"><?php echo $lang['pais']; ?> (*)</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="cargo" name="cargo" required>
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="correo"><?php echo $lang['correo']; ?> (*)</label>
          <div class="col-sm-9">
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
          </div>
        </div>    
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="telf"><?php echo $lang['telf']; ?></label>
          <div class="col-sm-9">
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>              
              <input type="tel" class="form-control" id="telf" name="telefono" minlength="7">
            </div>
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="comentario"><?php echo $lang['comentario']; ?> (*)</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="3" id="comentario" name="comentario" required></textarea>
          </div>
        </div>               
      </div>    
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-default btn-green btn-send" aria-label="Left Align">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $lang['enviar']; ?>
            </button>
          </div>
        </div> 
    </div>
  </div>
  </form>    
</div>


