"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_shop_BurnDown_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/BurnDown.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/BurnDown.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'IndexShops',
  data: function data() {
    return {
      shops: [// {
        //     id: 1,
        //     name: 'Galeria 1',
        //     address: 'bcn1',
        //     max_capacity: '21'
        // },
        // {
        //     id: 2,
        //     name: 'Galeria 2',
        //     address: 'bcn2',
        //     max_capacity: '22'
        // },
        // {
        //     id: 3,
        //     name: 'Galeria 3',
        //     address: 'bcn3',
        //     max_capacity: '23'
        // },
        // {
        //     id: 4,
        //     name: 'Galeria 4',
        //     address: 'bcn4',
        //     max_capacity: '24'
        // }
      ],
      selected: ''
    };
  },
  mounted: function mounted() {
    //llama a la funcion cuando se carga el componente x inicializar.
    //console.log('montado... :D');
    this.showShops();
  },
  methods: {
    BurnDown: function BurnDown() {
      var _this = this;

      var url = '/api/shops/' + this.selected + '/pictures';
      alert(url); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      };
      axios["delete"](url).then(function (response) {
        console.log(response);

        var pos = _this.products.map(function (product) {
          return product.id;
        }).indexOf(productId); //map=crea un nuevo array, indexof= retorna la posicin del elemento


        _this.products.splice(pos, 1); //quita un elemento del array
        //refrescar el navegador ??

      });
    },
    showShops: function showShops() {
      var _this2 = this;

      // console.log(this.product, ':D');
      console.log('Entra en show products :D'); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.get('/api/shops/').then(function (response) {
        // axios.get('https://jsonplaceholder.typicode.com/posts').then((response) => {
        //evento al array de datos
        console.log(response.data);
        _this2.shops = response.data.shops;
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/shop/BurnDown.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/shop/BurnDown.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _BurnDown_vue_vue_type_template_id_560900ef___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BurnDown.vue?vue&type=template&id=560900ef& */ "./resources/js/components/shop/BurnDown.vue?vue&type=template&id=560900ef&");
/* harmony import */ var _BurnDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BurnDown.vue?vue&type=script&lang=js& */ "./resources/js/components/shop/BurnDown.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _BurnDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _BurnDown_vue_vue_type_template_id_560900ef___WEBPACK_IMPORTED_MODULE_0__.render,
  _BurnDown_vue_vue_type_template_id_560900ef___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shop/BurnDown.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/shop/BurnDown.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/shop/BurnDown.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BurnDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./BurnDown.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/BurnDown.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BurnDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shop/BurnDown.vue?vue&type=template&id=560900ef&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/shop/BurnDown.vue?vue&type=template&id=560900ef& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BurnDown_vue_vue_type_template_id_560900ef___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BurnDown_vue_vue_type_template_id_560900ef___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BurnDown_vue_vue_type_template_id_560900ef___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./BurnDown.vue?vue&type=template&id=560900ef& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/BurnDown.vue?vue&type=template&id=560900ef&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/BurnDown.vue?vue&type=template&id=560900ef&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/BurnDown.vue?vue&type=template&id=560900ef& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
      _c(
        "form",
        {
          on: {
            submit: function ($event) {
              $event.preventDefault()
              return _vm.BurnDown()
            },
          },
        },
        [
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
              _vm._l(_vm.shops, function (shop) {
                return _c("option", { domProps: { value: shop.id } }, [
                  _vm._v(
                    "\n                        " +
                      _vm._s(shop.id) +
                      " " +
                      _vm._s(shop.name) +
                      " \n                    "
                  ),
                ])
              }),
              0
            ),
          ]),
          _vm._v(" "),
          _c("div", [
            _c("span", [_vm._v("Seleccionado: " + _vm._s(_vm.selected) + " ")]),
          ]),
          _vm._v(" "),
          _c(
            "button",
            { staticClass: "btn btn-primary", attrs: { type: "submit" } },
            [_vm._v("Burn Down...")]
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
    return _c("label", { attrs: { for: "galleryName" } }, [
      _vm._v("Select a Gallery to "),
      _c("strong", [_vm._v("burn down")]),
      _vm._v(":  *(list select)"),
    ])
  },
]
render._withStripped = true



/***/ })

}]);