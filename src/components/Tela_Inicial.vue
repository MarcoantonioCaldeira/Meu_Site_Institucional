<template>
   
    <Menu />

    <div id="tamplate">
      <h1 class="h1_Sauda_Nome">Olá, me chamo <br>Marco Antonio!!!</h1>

      <h4 class="h3_Intro">Sou Desenvolvedor Web Front-End. Atualmente<br> 
      estou cursando Tecnologia em Sistemas para a
      internet <br>no IFSP. Sou muito criativo e gosto de estar
      sempre em constante <br>evolução, criando novas soluções para as pessoas</h4>
    </div>
    <!-- Div que eu quero mudar -->
    <div id="Info_Ocu">
        <h1 class="h1_ocupacao">Ocupação atual</h1>

          <img class="icon_ocu"  src="../assets/img/icon_work.png" />
          <h3 class="h3_cargo">Desenvolvedor<br>Front-End Pleno</h3>
          <h3 class="h3_nome_empresa">Empresa: T.I Gestor Software</h3>

        <div class="Info_Ocu_di">

        </div>
    </div>

    <div id="Area_Solucoes">
      <h1 class="h1_servicos">Serviços e soluções</h1>
    </div>

    <div id="Skills">

      <h1 class="h1_skills">Minhas Skills e Power up's</h1>

      <div class="Info_Ocu_Skills">

      </div>
    </div>

    <div id="Contato">

      <h1 class="h1_contato">Entre em contato</h1>

      <div id="area_inputs">
        <Contato />
      </div>

      <button class="btn_enviar">Enviar</button>

    </div>
    <rodape />
</template>

<script>
  import Menu from './Menu.vue'
  import rodape from './rodape.vue'
  import Contato from './Contato/Contato.vue'

  export default {
    name: 'Tela_Inicial',
    components:{
      rodape,
      Contato,
      Menu
    },

    data(){
      return{
      
      }
    },

    methods:{

        // Alterar_Background: function(){
          
        //   var div_alterada = document.getElementById("#aInfo_Ocu");
        //   var ponto_maximo = '50';

        //   window.addEventListener('scroll', function(){

        //     if(window.scrollY > ponto_maximo){

        //       div_alterada.classList.add('mudar_estilo');
        //     }else{
        //       div_alterada.classList.remove('mudar_estilo');
        //     }
        //   })
        // },

        // topFunction(){

        //   var mybutton = document.getElementsByClassName(li)

        //   window.onscroll = function() {scrollFunction()};

        //   function scrollFunction() {
            
        //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //       mybutton.style.display = "block";
        //     } else {
        //       mybutton.style.display = "none";
        //     }
        //   }

        // }
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="./style.css">
</style>
