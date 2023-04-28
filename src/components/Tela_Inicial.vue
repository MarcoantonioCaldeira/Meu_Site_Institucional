<template>
    <div id="menu">
      <ul>
        <li>Inicio</li>
        <li>Serviços</li>
        <li>Meu contato</li>
      </ul>
    </div>

    <div id="tamplate">
      
    </div>
    <!-- Div que eu quero mudar -->
    <div :id="Info_Ocu">
        <h1 class="h1_ocupacao">Ocupação atual</h1>

        <div class="Info_Ocu_di">

        </div>
    </div>

    <div id="Area_Solucoes">

    </div>

    <div id="Skills">

      <h1 class="h1_skills">Minhas Skills e Power up's</h1>

      <div class="Info_Ocu_Skills">

      </div>
    </div>

    <div id="Contato">

    </div>
    <rodape />
</template>

<script>
  import rodape from './rodape.vue'

  export default {
    name: 'Tela_Inicial',
    components:{
      rodape
    },

    data(){
      return{
        scrollPosition: null 
      }
    },

    methods:{

        Alterar_Background: function(){
          
          var div_alterada = document.getElementById("#Info_Ocu");
          var ponto_maximo = '50';

          window.addEventListener('scroll', function(){

            if(window.scrollY > ponto_maximo){

              div_alterada.classList.add('mudar_estilo');
            }else{
              div_alterada.classList.remove('mudar_estilo');
            }
          })
        }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="./style.css">
</style>
