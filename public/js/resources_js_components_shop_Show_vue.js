"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_shop_Show_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Show.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Show.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      shop: {
        name: '',
        address: '',
        max_capacity: 0
      }
    };
  },
  mounted: function mounted() {
    //llama a la funcion cuando se carga el componente x inicializar.
    this.showIdShops();
  },
  methods: {
    showIdShops: function showIdShops() {
      var _this = this;

      console.log("Entra en edit/shop x Id"); // console.log("Id pasado:" + this.$route.params.id);

      var urlEdit = "/api/shops/info/" + this.$route.params.id;
      console.log("url: " + urlEdit); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.get(urlEdit).then(function (response) {
        console.log(response.data);
        console.log("---");
        _this.shop = response.data.shop;
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/shop/Show.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/shop/Show.vue ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Show_vue_vue_type_template_id_4ab3244a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Show.vue?vue&type=template&id=4ab3244a& */ "./resources/js/components/shop/Show.vue?vue&type=template&id=4ab3244a&");
/* harmony import */ var _Show_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Show.vue?vue&type=script&lang=js& */ "./resources/js/components/shop/Show.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Show_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Show_vue_vue_type_template_id_4ab3244a___WEBPACK_IMPORTED_MODULE_0__.render,
  _Show_vue_vue_type_template_id_4ab3244a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shop/Show.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/shop/Show.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/shop/Show.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Show_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Show.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Show.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Show_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shop/Show.vue?vue&type=template&id=4ab3244a&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/shop/Show.vue?vue&type=template&id=4ab3244a& ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Show_vue_vue_type_template_id_4ab3244a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Show_vue_vue_type_template_id_4ab3244a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Show_vue_vue_type_template_id_4ab3244a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Show.vue?vue&type=template&id=4ab3244a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Show.vue?vue&type=template&id=4ab3244a&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Show.vue?vue&type=template&id=4ab3244a&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/Show.vue?vue&type=template&id=4ab3244a& ***!
  \*********************************************************************************************************************************************************************************************************************/
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
      _c("h2", [_vm._v("id pasado: " + _vm._s(_vm.$route.params.id))]),
      _vm._v(" "),
      _c("dl", { staticClass: "row" }, [
        _c("dt", { staticClass: "col-sm-3" }, [_vm._v("Gallery Name:")]),
        _vm._v(" "),
        _c("dd", { staticClass: "col-sm-9" }, [_vm._v(_vm._s(_vm.shop.name))]),
        _vm._v(" "),
        _c("dt", { staticClass: "col-sm-3" }, [_vm._v("Address:")]),
        _vm._v(" "),
        _c("dd", { staticClass: "col-sm-9" }, [
          _vm._v(_vm._s(_vm.shop.address)),
        ]),
        _vm._v(" "),
        _c("dt", { staticClass: "col-sm-3" }, [_vm._v("Num max of pictures:")]),
        _vm._v(" "),
        _c("dd", { staticClass: "col-sm-9" }, [
          _vm._v(_vm._s(_vm.shop.max_capacity)),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h1", { staticClass: "text-success" }, [
      _vm._v("Show "),
      _c("span", { staticClass: "font-weight-bold" }, [_vm._v("detail:")]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);