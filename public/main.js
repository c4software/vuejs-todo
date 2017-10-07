var app = new Vue({
  el: '.container',
  data:{
    todos: []
  },
  created: function () {
    console.log("Démarrage TODO-APP");
  },
  beforeMount: function() {
    this.recupererListe();
  },
  methods:{
    ajout: function () {},
    recupererListe: function (){
      // Récupération des todos
      get_data("api/liste").then(function(todos){
        // Après la réussite de l’appel, sauvegarde des todos
        this.todos = todos;
      }).catch(function(e){
        console.log(e);
      })
    },
    terminer: function(){},
    supprimer: function(){}
  }
});

/**
 * GET Ajax
 */
function get_data(uri){
  return new Promise(function(resolve, reject){
    fetch(uri).then(function(response){
      // On décode le JSON, et on continue
      return response.json();
    }).then(function(response) {
      resolve(response);
    }).catch(function(error) {
      reject(error);
    });
  });
}

/**
 * POST Ajax
 */
function post_data(uri, data){
  // Construction des parametres pour la requete.
  var form = new FormData();
  for(var k in data){
    form.append(k, data[k]);
  }

  return new Promise(function(resolve, reject){
    fetch("api/creation.php", {
      method: "POST",
      body: form
    })
    .then(function(response){
      return response.json();
    })
    .then(function(response) {
      resolve(response);
    })
    .catch(function(error) {
      reject(error);
    });
  })
}
