<div class="hidden-xs div-botoes-laterais" id="div-botoes-laterais">
  <a href="http://coronavirus.ivaipora.pr.gov.br/" target="_blank">
    <div class="div-botao-lateral">
      <img class="img-botao-lateral" src="<?=$CAMINHO?>/images/covid-19.png" alt="Covid-19">
      <p class="p-botao-lateral">COVID-19</p>
    </div>
  </a>
</div>
</div>

<style>
.div-botoes-laterais {
  position: fixed;
  right: -40px;
  top: 210px;
  /* display: none; */
  z-index: 99;
}

.div-botoes-laterais2 {
  position: fixed;
  right: -40px;
  top: 320px;
  /* display: none; */
  z-index: 99;
}
.div-botao-lateral {
  border: 1px solid #0F436F;
  width: 145px;
  margin-top: 15px;
  border-radius: 10px 0 0 10px;
  height: 100px;
}


.img-botao-lateral {
  width: 45px;
  margin: 9px 0 0 34px;
}

.img-botao-lateral2 {
  width: 80px;
  margin: 4px 0 0 15px;
}

.p-botao-lateral{
  text-align: center;
  font-family: 'Fira Sans Extra Condensed';
  letter-spacing: 0px;
  font-weight: 600;
  font-size: 18px;
  color: #136165;
  opacity: 1;
  width: 110px;
  text-align: center;
  margin: 6px 0 0 0;
  height: 36px;
  align-items: center;
  justify-content: center;
  display: flex;
}

.p-botao-lateral2{
  text-align: center;
  font-family: 'Fira Sans Extra Condensed';
  letter-spacing: 0px;
  font-weight: 600;
  font-size: 18px;
  color: #136165;
  opacity: 1;
  width: 110px;
  text-align: center;
  margin: 6px 0 0 0;
  font-size: 10px;
  height: 36px;
  align-items: center;
  justify-content: center;
  display: flex;
}

</style>

<script>
  function myFunction() {
    document.getElementById("div-botoes-laterais").style.display = "block";
  }
</script>