"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_shop_Index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Index.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Index.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************/
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
      shops: {// {
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
        // }
      }
    };
  },
  mounted: function mounted() {
    //llama a la funcion cuando se carga el componente x inicializar.
    //console.log('montado... :D');
    this.showShops();
  },
  methods: {
    showShops: function showShops() {
      var _this = this;

      // console.log(this.product, ':D');
      console.log('Entra en show products :D'); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.get('/api/shops/').then(function (response) {
        //evento al array de datos
        console.log(response.data); //mostrar info retornada.

        _this.shops = response.data.shops; //listar galerias
      });
    },
    deleteShop: function deleteShop(delId) {
      var _this2 = this;

      // console.log(this.product, ':D');
      console.log('Borrado shop :-D' + delId);
      var urlSend = '/api/shops/delete/' + delId;
      console.log("url: " + urlSend); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.post(urlSend).then(function (response) {
        console.log(response.data.shops); //mostrar info retornada.

        _this2.shops = response.data.shops; //actuliar las galerias
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/shop/Index.vue":
/*!************************************************!*\
  !*** ./resources/js/components/shop/Index.vue ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Index_vue_vue_type_template_id_83cf5738___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=83cf5738& */ "./resources/js/components/shop/Index.vue?vue&type=template&id=83cf5738&");
/* harmony import */ var _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js& */ "./resources/js/components/shop/Index.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Index_vue_vue_type_template_id_83cf5738___WEBPACK_IMPORTED_MODULE_0__.render,
  _Index_vue_vue_type_template_id_83cf5738___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shop/Index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/shop/Index.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/shop/Index.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shop/Index.vue?vue&type=template&id=83cf5738&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/shop/Index.vue?vue&type=template&id=83cf5738& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_83cf5738___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_83cf5738___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_83cf5738___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=template&id=83cf5738& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Index.vue?vue&type=template&id=83cf5738&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Index.vue?vue&type=template&id=83cf5738&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Index.vue?vue&type=template&id=83cf5738& ***!
  \**********************************************************************************************************************************************************************************************************************/
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
      _c("table", { staticClass: "table" }, [
        _vm._m(1),
        _vm._v(" "),
        _c(
          "tbody",
          _vm._l(_vm.shops, function (shop) {
            return _c("tr", { key: shop.id }, [
              _c("td", { staticClass: "text-white bg-secondary" }, [
                _vm._v(
                  "\n                            " +
                    _vm._s(shop.id) +
                    "\n                        "
                ),
              ]),
              _vm._v(" "),
              _c("td", [
                _vm._v(
                  "\n                            " +
                    _vm._s(shop.name) +
                    "\n                        "
                ),
              ]),
              _vm._v(" "),
              _c("td", [
                _vm._v(
                  "\n                            " +
                    _vm._s(shop.address) +
                    "\n                        "
                ),
              ]),
              _vm._v(" "),
              _c("td", [
                _vm._v(
                  "\n                            " +
                    _vm._s(shop.max_capacity) +
                    "\n                        "
                ),
              ]),
              _vm._v(" "),
              _c(
                "td",
                [
                  _c(
                    "router-link",
                    {
                      staticClass: "btn btn-success",
                      attrs: {
                        to: { name: "ShowShop", params: { id: shop.id } },
                      },
                    },
                    [_vm._v("Detail")]
                  ),
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "td",
                [
                  _c(
                    "router-link",
                    {
                      staticClass: "btn btn-info",
                      attrs: {
                        to: { name: "EditShop", params: { id: shop.id } },
                      },
                    },
                    [_vm._v("Edit")]
                  ),
                ],
                1
              ),
              _vm._v(" "),
              _c("td", [
                _c(
                  "form",
                  {
                    on: {
                      submit: function ($event) {
                        $event.preventDefault()
                        return _vm.deleteShop(shop.id)
                      },
                    },
                  },
                  [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-danger",
                        attrs: { type: "submit" },
                      },
                      [_vm._v("Delete")]
                    ),
                  ]
                ),
              ]),
            ])
          }),
          0
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", { staticClass: "text-center h3 text-primary" }, [
      _c("span", { staticClass: "font-weight-bold" }, [_vm._v("Gallery ")]),
      _vm._v(" list:"),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { scope: "col" } }, [_vm._v("#")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Name:")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Address:")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Max capacity:")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Detail:")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Edit:")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Delete:")]),
      ]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);