<template>
   
    <Menu />
  
    <div id="tamplate">
      <h1 class="h1_Sauda_Nome">Olá, me chamo <br>Marco Antonio!!!</h1>

      <h4 class="h3_Intro">"Sou Desenvolvedor Front-End. Atualmente<br> 
      estou cursando Tecnologia em Sistemas para a
      internet <br>no IFSP. Sou apaixonado por criatividade e busco estar em 
      <br>constante evolução, sempre criando soluções inovadoras <br>para as pessoas"</h4>

      <img  class="foto_perfil"  src="../assets/img/foto_perfil.png" />
    </div>
    <!-- Div que eu quero mudar -->
    <div id="Info_Ocu">
        <h1 class="h1_ocupacao">Ocupação atual</h1>

          <img class="icon_ocu"  src="../assets/img/icon_work.png" />
          <h3 class="h3_cargo">Desenvolvedor<br>Front-End Pleno</h3>
        
          <h3 class="h3_nome_empresa">Empresa: T.I Gestor Software</h3>
          

        <div class="Info_Ocu_di">
          <!-- <h1 class="h1_ocupacao">Projetos desenvolvidos</h1> -->
        </div>
    </div>

    <div id="Area_Solucoes">

      <h1 class="h1_servicos">Serviços e soluções</h1>

      <div class="Area_img_solucoes">
      
        <div id="area_criacao_de_sites">

          <img  class="img_criacao_sites"  src="../assets/img/img_sites.png"  v-on:mouseover="exibirMensagem" v-on:mouseout="Limparmensagem">

          <div class="area_msg_site" v-if="mensagem.msg_site">
            <p>{{ mensagem.msg_site }}</p>
          </div>

        </div>
       
        <div id="area_criacao_de_loja">
          <img  class="img_criacao_loja"  src="../assets/img/e-commerce.png" v-on:mouseover="exibirMensagem_Loja" v-on:mouseout="Limparmensagem"> 

          <div class="area_msg" v-if="mensagem.msg_loja">
            <p>{{ mensagem.msg_loja }}</p>
          </div>
        
        </div>
       
        <div id="area_criacao_de_sistemas">
          <img  class="img_criacao_sistemas"  src="../assets/img/sistema-web.png" v-on:mouseover="exibirMensagem_Sistema" v-on:mouseout="Limparmensagem">

          <div class="area_msg" v-if="mensagem.msg_sistema">
            <p>{{ mensagem.msg_sistema }}</p>
          </div>

        </div>

        <div id="area_prototipo">
          <img  class="img_prototipo"  src="../assets/img/prototipagem.png" v-on:mouseover="exibirMensagemPrototipo" v-on:mouseout="Limparmensagem"/>

          <div class="area_msg" v-if="mensagem.msg_prototipo">
            <p>{{ mensagem.msg_prototipo }}</p>
          </div>

        </div>

      </div>

      <button  class="btn_saiba_mais" v-for="link in links" :href="link.url" :key="link.id" @click="handleClick">{{ link.text }}</button>
      

    </div>

    <div id="Skills">

      <h1 class="h1_skills">Minhas Skills e Power up's</h1>

      <div class="Info_Ocu_Skills">
              <h1 class="img_ux_ui" style="
              font-family: 'Inter', sans-serif; 
              font-size: 25px;
              margin-top: 48%;
              margin-left: 18%; ">UX\UI</h1>

              <img src="../assets/img/WordPress.png"  class="img_wordpress"/>
              <!-- <p>Sass</p> -->

              <img src="../assets/img/sass.png"  class="img_sass"/>
              <!-- <p>Sass</p> -->
               
              <img src="../assets/img/react.png"  class="img_react"/>
              <!-- <p>React</p> -->

              <img src="../assets/img/python.png"  class="img_python"/>
              <!-- <p>Python</p> -->
              
              <img src="../assets/img/vue.com.png"  class="img_vue_js"/>
              <!-- <p>VueJS</p> -->
              
      </div>

      <img src="../assets/img/rails.png" class="rails" />
      <!-- <p>Ruby on Rails</p> -->

      <img src="../assets/img/php.png"  class="img_php"/>
      <!-- <p>PHP</p> -->

      <img src="../assets/img/docker.png"  class="img_docker"/>
      <!-- <p>Docker</p> -->

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
  //import { handleClick } from './Menu.vue'
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
        mes: null,
        mensagem:{
          msg_site:'',
          msg_loja:'',
          msg_sistema: '',
          msg_prototipo: ''
        },
        links: [
            { id: 4, text: 'Saiba Mais', url: '#Contato' },
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
          this.Limparmensagem();
          this.mensagem.msg_site = "Criação de Sites"
        },

        exibirMensagem_Loja(){
          this.Limparmensagem();
          this.mensagem.msg_loja = "Criação de Lojas Virtuais"
        },

        exibirMensagem_Sistema(){
          this.Limparmensagem();
          this.mensagem.msg_sistema = "Criação de Sistemas"
        },

        exibirMensagemPrototipo(){
          this.Limparmensagem();
          this.mensagem.msg_prototipo = "Criação de Prototipo"
        },

        Limparmensagem(){
          
          this.mensagem.msg_site = ''
          this.mensagem.msg_loja = '' 
          this.mensagem.msg_sistema = ''
          this.mensagem.msg_prototipo = ''

        },

        handleClick(e){

          e.preventDefault()
          const target = e.target.getAttribute('href')
          const location = document.querySelector(target).offsetTop

          window.scrollTo({
              left: 0,
              top: location - -70,
          })

        }
      
      
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="./style.scss" lang="scss">
</style>
