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
      picture: [// {
        // author: '',
        // picture_name: '',
        // shop_id: 0,
        // price: 0.0,
        // entry_date: '2021-01-01',
        // url: 'https://via.placeholder.com/150',
        // comment: ''
        //  }
      ],
      pictureIn: [{
        autor: 'Pier Mondriaan',
        nombre_cuadro: "Composición en rojo, amarillo, marron y negro",
        file_name: './img/c001.jpg'
      }, {
        autor: 'Rafael',
        nombre_cuadro: 'Madonna Sixtina',
        file_name: './img/c002'
      }, {
        autor: 'Rembrandt',
        nombre_cuadro: 'Lección de anatomía del Dr. Nicolaes Tulp',
        file_name: './img/c003'
      }, {
        autor: 'Velazquez',
        nombre_cuadro: 'Las Meninas',
        file_name: './img/c004'
      }, {
        autor: 'Leonardo da Vince',
        nombre_cuadro: 'La Mona Lisa',
        file_name: './img/c005'
      }, {
        autor: 'Leonardo da Vince',
        nombre_cuadro: 'La ultima cena',
        file_name: './img/c006'
      }, {
        autor: 'Salvador Dali',
        nombre_cuadro: 'La persistencia de la memoria',
        file_name: './img/c007'
      }, {
        autor: 'Francisco de Goya',
        nombre_cuadro: 'Saturno devorando a su hijo',
        file_name: './img/c008'
      }, {
        autor: 'Van Eyck',
        nombre_cuadro: 'Retrato de Giovanni Arnolfini y su esposa',
        file_name: './img/c009'
      }, {
        autor: 'Picasso',
        nombre_cuadro: 'El Guernica',
        file_name: './img/c010'
      }]
    };
  },
  methods: {
    addShop: function addShop() {
      var _this = this;

      console.log(this.product, ':D'); //llamada a la api para añadir datos

      url = "api/shops/5/pictures"; //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      };
      axios.post(url, this.picture).then(function (response) {
        //evento al padre
        _this.$emit('add', response.data.product);

        _this.$route.push({
          name: 'Home'
        }); //redireccion a pagina index

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
    _c("h1", [_vm._v("Create picture")]),
    _vm._v(" "),
    _c(
      "form",
      {
        on: {
          submit: function ($event) {
            $event.preventDefault()
            return _vm.addShop()
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
          _c("label", { attrs: { for: "shop_id" } }, [_vm._v("Shop id:")]),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.picture.shop_id,
                expression: "picture.shop_id",
              },
            ],
            staticClass: "form-control",
            attrs: { type: "number", id: "shop_id" },
            domProps: { value: _vm.picture.shop_id },
            on: {
              input: function ($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.$set(_vm.picture, "shop_id", $event.target.value)
              },
            },
          }),
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
          _vm._m(0),
          _vm._v(" "),
          _c(
            "select",
            {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.selected,
                  expression: "selected",
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
                  _vm.selected = $event.target.multiple
                    ? $$selectedVal
                    : $$selectedVal[0]
                },
              },
            },
            _vm._l(_vm.pictureIn, function (picture) {
              return _c("option", { domProps: { value: picture.url } }, [
                _vm._v(
                  "\n                    " +
                    _vm._s(picture.autor) +
                    " - " +
                    _vm._s(picture.nombre_cuadro) +
                    " \n                "
                ),
              ])
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
        _vm._v(" "),
        _c("br"),
        _vm._v(_vm._s(_vm.picture) + "\n    "),
      ]
    ),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "url" } }, [
      _vm._v("Select a Gallery to "),
      _c("strong", [_vm._v("Image url")]),
      _vm._v(":  *(list select)"),
    ])
  },
]
render._withStripped = true



/***/ })

}]);