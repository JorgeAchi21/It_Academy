"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_pictures_Create_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Create.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Create.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      shops: [],
      picture: {},
      //     //ejemplo para pruebas estaticas:
      //     {
      //     author: '',
      //     picture_name: '',
      //     shop_id: 0,
      //     price: 0,
      //     entry_date: '2021-01-01',
      //     url: 'https://via.placeholder.com/150',
      //     comment: ''
      //     }
      //array con la lista de las 100 imagenes: autores, nombre cuadro y nombre y ruta del fichero.
      pictureIn: [{
        autor: 'Pier Mondriaan',
        nombre_cuadro: "Composición en rojo, amarillo, marron y negro",
        file_name: './img/c001.jpg'
      }, {
        autor: 'Rafael',
        nombre_cuadro: 'Madonna Sixtina',
        file_name: './img/c002.jpg'
      }, {
        autor: 'Rembrandt',
        nombre_cuadro: 'Lección de anatomía del Dr. Nicolaes Tulp',
        file_name: './img/c003.jpg'
      }, {
        autor: 'Velazquez',
        nombre_cuadro: 'Las Meninas',
        file_name: './img/c004.jpg'
      }, {
        autor: 'Leonardo da Vince',
        nombre_cuadro: 'La Mona Lisa',
        file_name: './img/c005.jpg'
      }, {
        autor: 'Leonardo da Vince',
        nombre_cuadro: 'La ultima cena',
        file_name: './img/c006.jpg'
      }, {
        autor: 'Salvador Dali',
        nombre_cuadro: 'La persistencia de la memoria',
        file_name: './img/c007.jpg'
      }, {
        autor: 'Francisco de Goya',
        nombre_cuadro: 'Saturno devorando a su hijo',
        file_name: './img/c008.jpg'
      }, {
        autor: 'Van Eyck',
        nombre_cuadro: 'Retrato de Giovanni Arnolfini y su esposa',
        file_name: './img/c009.jpg'
      }, {
        autor: 'Picasso',
        nombre_cuadro: 'El Guernica',
        file_name: './img/c010.jpg'
      }, {
        autor: 'Gustav Klimt',
        nombre_cuadro: 'El Beso',
        file_name: './img/c011.jpg'
      }, {
        autor: 'Johannes Vermeer',
        nombre_cuadro: 'La joven de la perla',
        file_name: './img/c012.jpg'
      }, {
        autor: 'Jacques-Louis David',
        nombre_cuadro: 'La muerte de Marat',
        file_name: './img/c013.jpg'
      }, {
        autor: 'Caspar David Friedrich',
        nombre_cuadro: 'El caminante sobre el mar de nubes',
        file_name: './img/c014.jpg'
      }, {
        autor: 'Emanuel Leutze',
        nombre_cuadro: 'Washington cruzando el Delaware',
        file_name: './img/c015.jpg'
      }, {
        autor: 'Sandro Botticelli',
        nombre_cuadro: 'El nacimiento de Venus',
        file_name: './img/c016.jpg'
      }, {
        autor: 'Edward Hopper',
        nombre_cuadro: 'Noctambulos',
        file_name: './img/c017.jpg'
      }, {
        autor: 'Miguel Angel',
        nombre_cuadro: 'La creacion de Adan',
        file_name: './img/c018.jpg'
      }, {
        autor: 'Francisco de Goya',
        nombre_cuadro: 'El tres de mayo',
        file_name: './img/c019.jpg'
      }, {
        autor: 'Théodore Géricault',
        nombre_cuadro: 'La balsa de la medusa',
        file_name: './img/c021.jpg'
      }, {
        autor: 'Paul Gauguin',
        nombre_cuadro: '¿De dónde venimos? ¿Quiénes somos? ¿Adónde vamos?',
        file_name: './img/c022.jpg'
      }, {
        autor: 'Van Gogh',
        nombre_cuadro: 'Noche Estrellada',
        file_name: './img/c023.jpg'
      }, {
        autor: 'Velazquez',
        nombre_cuadro: 'La rendicion de Breda',
        file_name: './img/c024.jpg'
      }, {
        autor: 'Van Gogh',
        nombre_cuadro: 'Terraza de cafe por la noche',
        file_name: './img/c025.jpg'
      }, {
        autor: 'El Bosco',
        nombre_cuadro: 'El Jardin de las Delicias',
        file_name: './img/c026.jpg'
      }, {
        autor: 'Johannes Vermeer van Delft',
        nombre_cuadro: 'La Lechera',
        file_name: './img/c027.jpg'
      }, {
        autor: 'Pieter Bruegel the Elder',
        nombre_cuadro: 'La Torre de Babel',
        file_name: './img/c028.jpg'
      }, {
        autor: 'Rafael Sanzio',
        nombre_cuadro: 'La Escuela de Atenas',
        file_name: './img/c029.jpg'
      }, {
        autor: 'Hans Holbein el Joven',
        nombre_cuadro: 'Los Embajadores',
        file_name: './img/c030.jpg'
      }, {
        autor: 'Eugene Delacroix',
        nombre_cuadro: 'La Libertad guiando al pueblo',
        file_name: './img/c031.jpg'
      }, {
        autor: 'Claude Monet',
        nombre_cuadro: 'Impresion, Sol Naciente',
        file_name: './img/c032.jpg'
      }, {
        autor: 'Edvard Munch',
        nombre_cuadro: 'El Grito',
        file_name: './img/c033.jpg'
      }, {
        autor: 'Jacques-Louis David',
        nombre_cuadro: 'Napoleon cruzando los Alpes',
        file_name: './img/c034.jpg'
      }, {
        autor: 'Camille Pissarro',
        nombre_cuadro: 'Boulevard Montmartre',
        file_name: './img/c035.jpg'
      }, {
        autor: 'Paolo Veronese',
        nombre_cuadro: 'Las Bodas de Cana',
        file_name: './img/c036.jpg'
      }, {
        autor: 'Edouard Manet',
        nombre_cuadro: 'El bar del Folies Bergère',
        file_name: './img/c037.jpg'
      }, {
        autor: 'Cezanne',
        nombre_cuadro: 'Mujeres Bañandose',
        file_name: './img/c038.jpg'
      }, {
        autor: 'Paul Gauguin',
        nombre_cuadro: 'Mujeres en Haiti',
        file_name: './img/c039.jpg'
      }, {
        autor: 'Jean-Honoré Fragonard',
        nombre_cuadro: 'El columpio',
        file_name: './img/c040.jpg'
      }, {
        autor: 'McNeill Whistler',
        nombre_cuadro: 'Retrato de la madre del artista',
        file_name: './img/c041.jpg'
      }, {
        autor: 'Théodore Géricault',
        nombre_cuadro: 'Derbi en Epsom',
        file_name: './img/c042.jpg'
      }, {
        autor: 'Jean-Léon Gérôme',
        nombre_cuadro: 'Pollice verso',
        file_name: './img/c043.jpg'
      }, {
        autor: 'Karl Pávlovich Briulov',
        nombre_cuadro: 'El último dia de Pompeya',
        file_name: './img/c044.jpg'
      }, {
        autor: 'Marc Chagall',
        nombre_cuadro: 'Sobrevolando la ciudad',
        file_name: './img/c045.jpg'
      }, {
        autor: 'El Greco',
        nombre_cuadro: 'Vista de Toledo',
        file_name: './img/c046.jpg'
      }, {
        autor: 'El Greco',
        nombre_cuadro: 'El entierro del conde de Orgaz',
        file_name: './img/c047.jpg'
      }, {
        autor: 'Henri Matisse',
        nombre_cuadro: 'La danza',
        file_name: './img/c048.jpg'
      }, {
        autor: 'Mijaíl Vrúbel',
        nombre_cuadro: 'Demonio sentado en el jardín',
        file_name: './img/c049.jpg'
      }, {
        autor: 'Juan Sánchez Cotán',
        nombre_cuadro: 'Bodegón de caza,hortalizas y frutas',
        file_name: './img/c050.jpg'
      }, {
        autor: 'Murillo',
        nombre_cuadro: 'Niños comiendo uvas y melon',
        file_name: './img/c051.jpg'
      }, {
        autor: 'Sorolla',
        nombre_cuadro: 'Paseo a orillas del mar',
        file_name: './img/c052.jpg'
      }, {
        autor: 'Antonio Lopez',
        nombre_cuadro: 'La Gran Via',
        file_name: './img/c053.jpg'
      }, {
        autor: 'El greco',
        nombre_cuadro: 'Las lagrimas de San Pedro',
        file_name: './img/c054.jpg'
      }, {
        autor: 'Goya',
        nombre_cuadro: 'La familia de Carlos IV',
        file_name: './img/c055.jpg'
      }, {
        autor: 'Claude Monet',
        nombre_cuadro: 'La catedral de Rouen',
        file_name: './img/c056.jpg'
      }, {
        autor: 'Caravaggio',
        nombre_cuadro: 'Santo Entierro',
        file_name: './img/c057.jpg'
      }, {
        autor: 'Rogier van der Weyden',
        nombre_cuadro: 'Retrato de una mujer joven',
        file_name: './img/c058.jpg'
      }, {
        autor: 'Leonardo da Vinci',
        nombre_cuadro: 'Salvator Mundi',
        file_name: './img/c059.jpg'
      }, {
        autor: 'Leonardo da Vinci',
        nombre_cuadro: 'La dama del armiño',
        file_name: './img/c060.jpg'
      }, {
        autor: 'Rafael',
        nombre_cuadro: 'El triunfo de galatea',
        file_name: './img/c061.jpg'
      }, {
        autor: 'Rembrandt.',
        nombre_cuadro: 'El retorno del hijo pródigo',
        file_name: './img/c062.jpg'
      }, {
        autor: 'Leonardo da Vinci',
        nombre_cuadro: 'Madonna Litta',
        file_name: './img/c063.jpg'
      }, {
        autor: 'Kazimir Malevich',
        nombre_cuadro: 'Suprematist Composition',
        file_name: './img/c064.jpg'
      }, {
        autor: 'Francesco Hayez',
        nombre_cuadro: 'El beso',
        file_name: './img/c065.jpg'
      }, {
        autor: 'Peter Paul Rubens y Jan Wildens',
        nombre_cuadro: 'El rapto de las hijas de Leucipo',
        file_name: './img/c066.jpg'
      }, {
        autor: 'Andrea Mantegna',
        nombre_cuadro: 'Lamentación sobre Cristo muerto',
        file_name: './img/c067.jpg'
      }, {
        autor: 'Gustave Courbet',
        nombre_cuadro: 'El desesperado',
        file_name: './img/c068.jpg'
      }, {
        autor: 'Rembrandt',
        nombre_cuadro: 'La ronda de noche',
        file_name: './img/c069.jpg'
      }, {
        autor: 'John Singleton Copley',
        nombre_cuadro: 'Watson y el tiburón',
        file_name: './img/c070.jpg'
      }, {
        autor: 'Francisco de Goya',
        nombre_cuadro: 'La maja desnuda',
        file_name: './img/c071.jpg'
      }, {
        autor: 'El Greco',
        nombre_cuadro: 'El expolio',
        file_name: './img/c072.jpg'
      }, {
        autor: 'Dali',
        nombre_cuadro: 'La tentacion de San Antonio',
        file_name: './img/c073.jpg'
      }, {
        autor: 'Kanagawa',
        nombre_cuadro: 'La gran Ola',
        file_name: './img/c074.jpg'
      }, {
        autor: 'Jacques-Louis David',
        nombre_cuadro: 'El Juramento de los Horacios',
        file_name: './img/c075.jpg'
      }, {
        autor: 'Ivan Kramkoi',
        nombre_cuadro: 'Retrato de una dama desconocida',
        file_name: './img/c076.jpg'
      }, {
        autor: 'Iván Aivazovski',
        nombre_cuadro: 'La novena ola',
        file_name: './img/c077.jpg'
      }, {
        autor: 'Giorgione',
        nombre_cuadro: 'Venus durmiente',
        file_name: './img/c078.jpg'
      }, {
        autor: 'Dominique Ingres',
        nombre_cuadro: 'La gran odalisca',
        file_name: './img/c079.jpg'
      }, {
        autor: 'Edouard Manet',
        nombre_cuadro: 'Olympia',
        file_name: './img/c080.jpg'
      }, {
        autor: 'Caravaggio',
        nombre_cuadro: 'La decapitación de San Juan Bautista',
        file_name: './img/c081.jpg'
      }, {
        autor: 'Picasso',
        nombre_cuadro: 'El acrobata de la bola',
        file_name: './img/c082.jpg'
      }, {
        autor: 'Tizziano',
        nombre_cuadro: 'Amor sacro y amor profano',
        file_name: './img/c083.jpg'
      }, {
        autor: 'Vassily Kandinsky',
        nombre_cuadro: 'Composicion 7',
        file_name: './img/c084.jpg'
      }, {
        autor: 'Bouguereau',
        nombre_cuadro: 'Dante y Virgilio en el infierno',
        file_name: './img/c085.jpg'
      }, {
        autor: 'Edouard Manet',
        nombre_cuadro: 'El desayuno sobre la hierva',
        file_name: './img/c086.jpg'
      }, {
        autor: 'Millet',
        nombre_cuadro: 'Las espigadoras',
        file_name: './img/c087.jpg'
      }, {
        autor: 'Marinus Claeszoon van Reymerswaele',
        nombre_cuadro: 'El recaudador de impuestos y su mujer',
        file_name: './img/c088.jpg'
      }, {
        autor: 'Giuseppe Pellizza da Volpedo',
        nombre_cuadro: 'El cuarto estado',
        file_name: './img/c089.jpg'
      }, {
        autor: 'Dali',
        nombre_cuadro: 'Cristo de San Juan de la Cruz',
        file_name: './img/c090.jpg'
      }, {
        autor: 'Julio Romero de Torres',
        nombre_cuadro: 'La chiquita piconera',
        file_name: './img/c091.jpg'
      }, {
        autor: 'El Greco',
        nombre_cuadro: 'El caballero de la mano en el pecho',
        file_name: './img/c092.jpg'
      }, {
        autor: 'Rafael',
        nombre_cuadro: 'La transfiguracion',
        file_name: './img/c093.jpg'
      }, {
        autor: 'Pierre-Auguste Renoir',
        nombre_cuadro: 'Baile en el Moulin de la Galette',
        file_name: './img/c094.jpg'
      }, {
        autor: 'John William Waterhouse',
        nombre_cuadro: 'La dama de Shalott',
        file_name: './img/c095.jpg'
      }, {
        autor: 'Frederic Leighton',
        nombre_cuadro: 'Perseo y Andromeda',
        file_name: './img/c096.jpg'
      }, {
        autor: 'Van Gogh',
        nombre_cuadro: 'Los girasoles',
        file_name: './img/c097.jpg'
      }, {
        autor: 'John Everett Millais',
        nombre_cuadro: 'Ophelia',
        file_name: './img/c098.jpg'
      }, {
        autor: 'Rubens',
        nombre_cuadro: 'Las tres gracias',
        file_name: './img/c099.jpg'
      }, {
        autor: 'Dante Gabriel Rossetti',
        nombre_cuadro: 'Lady Lilith',
        file_name: './img/c100.jpg'
      }],
      pos: '',
      selected: '',
      selectedIndex: ''
    };
  },
  mounted: function mounted() {
    //llama a la funcion cuando se carga el componente x inicializar.
    //console.log('montado... :D');
    this.showShops();
  },
  methods: {
    addPicture: function addPicture() {
      var _this = this;

      console.log("Mostrar data:");
      var urlSend = "/api/shops/" + this.picture.shop_id + "/pictures"; //console.log("Shop id: " + url );
      //llamada a la api para añadir datos
      //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; // === checks               
      // console.log( urlSend );
      // console.log( this.picture.url );
      // this.picture.url = "pruebas";
      // console.log( this.picture.url );
      // console.log( this.picture);

      axios.post(urlSend, this.picture).then(function (response) {
        //console.log(response);
        _this.$router.push({
          name: 'SelectAGallery'
        }); //redireccion al indexshop

      });
    },
    showShops: function showShops() {
      var _this2 = this;

      //console.log(this.product, ':D');
      //console.log('Entra en show shops :D');
      //añadir token a la peticion
      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.get('/api/shops/').then(function (response) {
        //evento al array de datos
        //console.log(response.data)
        _this2.shops = response.data.shops;
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/pictures/Create.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/pictures/Create.vue ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Create_vue_vue_type_template_id_8c40628a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Create.vue?vue&type=template&id=8c40628a& */ "./resources/js/components/pictures/Create.vue?vue&type=template&id=8c40628a&");
/* harmony import */ var _Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Create.vue?vue&type=script&lang=js& */ "./resources/js/components/pictures/Create.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Create_vue_vue_type_template_id_8c40628a___WEBPACK_IMPORTED_MODULE_0__.render,
  _Create_vue_vue_type_template_id_8c40628a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/pictures/Create.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/pictures/Create.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/pictures/Create.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Create.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Create.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/pictures/Create.vue?vue&type=template&id=8c40628a&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/pictures/Create.vue?vue&type=template&id=8c40628a& ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_template_id_8c40628a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_template_id_8c40628a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_template_id_8c40628a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Create.vue?vue&type=template&id=8c40628a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Create.vue?vue&type=template&id=8c40628a&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Create.vue?vue&type=template&id=8c40628a&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Create.vue?vue&type=template&id=8c40628a& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "jumbotron" }, [
      _vm._m(0),
      _vm._v(" "),
      _c(
        "form",
        {
          on: {
            submit: function ($event) {
              $event.preventDefault()
              return _vm.addPicture()
            },
          },
        },
        [
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "author" } }, [_vm._v("Author:")]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.picture.author,
                  expression: "picture.author",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", id: "author" },
              domProps: { value: _vm.picture.author },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.picture, "author", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "picture_name" } }, [
              _vm._v("Picture name:"),
            ]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.picture.picture_name,
                  expression: "picture.picture_name",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", id: "picture_name" },
              domProps: { value: _vm.picture.picture_name },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.picture, "picture_name", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "shop_id" } }, [
              _vm._v("Select a existing Gallery:  *(list select)"),
            ]),
            _vm._v(" "),
            _c(
              "select",
              {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.picture.shop_id,
                    expression: "picture.shop_id",
                  },
                ],
                staticClass: "form-control",
                on: {
                  change: function ($event) {
                    var $$selectedVal = Array.prototype.filter
                      .call($event.target.options, function (o) {
                        return o.selected
                      })
                      .map(function (o) {
                        var val = "_value" in o ? o._value : o.value
                        return val
                      })
                    _vm.$set(
                      _vm.picture,
                      "shop_id",
                      $event.target.multiple ? $$selectedVal : $$selectedVal[0]
                    )
                  },
                },
              },
              _vm._l(_vm.shops, function (shop, index, key) {
                return _c(
                  "option",
                  { key: shop.id, domProps: { value: shop.id } },
                  [
                    _vm._v(
                      "\n                        " +
                        _vm._s(key) +
                        " - " +
                        _vm._s(index) +
                        " = " +
                        _vm._s(shop.id) +
                        " : " +
                        _vm._s(shop.name) +
                        "\n                    "
                    ),
                  ]
                )
              }),
              0
            ),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "price" } }, [_vm._v("Price:")]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.picture.price,
                  expression: "picture.price",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "number", id: "price" },
              domProps: { value: _vm.picture.price },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.picture, "price", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "entry_date" } }, [
              _vm._v("Entry date:"),
            ]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.picture.entry_date,
                  expression: "picture.entry_date",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "date", id: "entry_date" },
              domProps: { value: _vm.picture.entry_date },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.picture, "entry_date", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _vm._m(1),
            _vm._v(" "),
            _c(
              "select",
              {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.picture.url,
                    expression: "picture.url",
                  },
                ],
                staticClass: "form-control",
                on: {
                  change: function ($event) {
                    var $$selectedVal = Array.prototype.filter
                      .call($event.target.options, function (o) {
                        return o.selected
                      })
                      .map(function (o) {
                        var val = "_value" in o ? o._value : o.value
                        return val
                      })
                    _vm.$set(
                      _vm.picture,
                      "url",
                      $event.target.multiple ? $$selectedVal : $$selectedVal[0]
                    )
                  },
                },
              },
              _vm._l(_vm.pictureIn, function (cuadro) {
                return _c(
                  "option",
                  {
                    key: cuadro.nombre_cuadro,
                    domProps: { value: cuadro.file_name },
                  },
                  [
                    _vm._v(
                      "\n                        " +
                        _vm._s(cuadro.autor) +
                        " - " +
                        _vm._s(cuadro.nombre_cuadro) +
                        " - " +
                        _vm._s(cuadro.file_name) +
                        "\n                    "
                    ),
                  ]
                )
              }),
              0
            ),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "comment" } }, [_vm._v("Comment:")]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.picture.comment,
                  expression: "picture.comment",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", id: "url" },
              domProps: { value: _vm.picture.comment },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.picture, "comment", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c(
            "button",
            { staticClass: "btn btn-primary", attrs: { type: "submit" } },
            [_vm._v("Submit")]
          ),
        ]
      ),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h1", { staticClass: "text-primary text-center" }, [
      _c("span", { staticClass: "font-weight-bold" }, [_vm._v("Add")]),
      _vm._v(" a picture:"),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "url" } }, [
      _vm._v("Select a "),
      _c("strong", [_vm._v("Image url")]),
      _vm._v(":  *(list select)"),
    ])
  },
]
render._withStripped = true



/***/ })

}]);