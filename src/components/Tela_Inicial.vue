<template>
   
    <Menu />
  
    <div id="tamplate">
      <h1 class="h1_Sauda_Nome">Olá, me chamo <br>Marco Antonio!!!</h1>

      <h4 class="h3_Intro">Sou Desenvolvedor Web Front-End. Atualmente<br> 
      estou cursando Tecnologia em Sistemas para a
      internet <br>no IFSP. Sou muito criativo e gosto de estar
      sempre em  <br>constante evolução, criando novas soluções para as pessoas</h4>
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

      <div class="Area_img_solucoes">
      
        <div>
          <img  class="img_criacao_sites"  src="../assets/img/img_sites.png"  v-on:mouseover="exibirMensagem" v-on:mouseout="Limparmensagem"/>
          <p>{{ mensagem.msg_site }}</p>
          <!-- <h4>Criação de Sites</h4>-->
        </div>
       
        <div>
          <img  class="img_criacao_loja"  src="../assets/img/e-commerce.png" v-on:mouseover="exibirMensagem" v-on:mouseout="Limparmensagem"/>
          <p>{{  mensagem.msg_loja }}</p>
        <!-- <h4>Criação de Lojas virtuais</h4> -->
        </div>
        
        <img  class="img_criacao_sistemas"  src="../assets/img/sistema-web.png" />
        <!-- <h4>Criação de Sistemas Web</h4> -->
        <img  class="img_prototipo"  src="../assets/img/prototipagem.png" />
        <!-- <h4>Prototipagem</h4>  -->
      </div>
      <!-- <ul>
        <li><a class="btn_saiba_mais" :key="link_btn.id" v-click="$emit('handleClick') >{{ link_btn.text }}</a></li>
      </ul> -->

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

    </div>
    <rodape />
</template>

<script>
  import Menu from './Menu.vue'
  import rodape from './rodape.vue'
  import Contato from './Contato/Contato.vue'
// import { createElement } from 'react/cjs/react.production.min'


  export default {
    name: 'Tela_Inicial',
    components:{
      rodape,
      Contato,
      Menu
    },

    data(){
      return{
        mensagem:[
          {msg_site: ''},
          {msg_loja: ''}
        ],
        mes: null,
        imagens:[
          { caminho: '../assets/img/img_sites.png', exibirBalao: false, textoBalao: 'Criação de Sites' },
          { caminho: '../assets/img/e-commerce.png', exibirBalao: false, textoBalao: 'Criação de Lojas Virtuais' },
          { caminho: '../assets/img/sistema-web.png', exibirBalao: false, textoBalao: 'Criação de Sistemas Web' },
          { caminho: '../assets/img/prototipagem.png', exibirBalao: false, textoBalao: 'Prototipagem' },
        ]
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

        topFunction(){

          var mybutton = document.getElementsByClassName(li)

          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
            
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }

        },


        exibirMensagem(){
          this.mensagem.msg_site = "Criação de Sites"
          this.mensagem.msg_loja = "Criação de lojas Virtuais"
        },

        Limparmensagem(){
          this.mensagem = ''
        }
      
      
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="./style.scss" lang="scss">
</style>
