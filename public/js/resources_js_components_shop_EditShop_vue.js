"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_shop_EditShop_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/EditShop.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/EditShop.vue?vue&type=script&lang=js& ***!
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

      console.log("Entra en edit/shop");
      console.log("Id pasado:" + this.$route.params.id);
      var urlEdit = "/api/shops/info/" + this.$route.params.id;
      console.log("url: " + urlEdit); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.get(urlEdit).then(function (response) {
        console.log(response.data);
        _this.shop = response.data.shop;
        console.log("---");
      });
    },
    editShop: function editShop() {
      var _this2 = this;

      console.log("Entra en edit/shop/guarda..");
      var dirEdit = "";
      dirEdit = '/api/shops/edit/' + this.$route.params.id; //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      };
      console.log("Datos de shop:---");
      console.log(this.shop);
      console.log("url: " + dirEdit); //llamada a la api para añadir datos

      axios.put(dirEdit, this.shop).then(function (response) {
        //evento al array de datos
        console.log("Datos retorno:");
        console.log(response.data.shop);

        _this2.$router.push({
          name: 'IndexShop'
        }); //redireccion al indexshop


        console.log("---");
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/shop/EditShop.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/shop/EditShop.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _EditShop_vue_vue_type_template_id_034f1e7e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./EditShop.vue?vue&type=template&id=034f1e7e& */ "./resources/js/components/shop/EditShop.vue?vue&type=template&id=034f1e7e&");
/* harmony import */ var _EditShop_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./EditShop.vue?vue&type=script&lang=js& */ "./resources/js/components/shop/EditShop.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _EditShop_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _EditShop_vue_vue_type_template_id_034f1e7e___WEBPACK_IMPORTED_MODULE_0__.render,
  _EditShop_vue_vue_type_template_id_034f1e7e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shop/EditShop.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/shop/EditShop.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/shop/EditShop.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditShop_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./EditShop.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/EditShop.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditShop_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shop/EditShop.vue?vue&type=template&id=034f1e7e&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/shop/EditShop.vue?vue&type=template&id=034f1e7e& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditShop_vue_vue_type_template_id_034f1e7e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditShop_vue_vue_type_template_id_034f1e7e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditShop_vue_vue_type_template_id_034f1e7e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./EditShop.vue?vue&type=template&id=034f1e7e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/EditShop.vue?vue&type=template&id=034f1e7e&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/EditShop.vue?vue&type=template&id=034f1e7e&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/shop/EditShop.vue?vue&type=template&id=034f1e7e& ***!
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
      _vm._m(0),
      _vm._v(" "),
      _c("h2", [_vm._v("id pasado: " + _vm._s(_vm.$route.params.id))]),
      _vm._v(" "),
      _c(
        "form",
        {
          on: {
            submit: function ($event) {
              $event.preventDefault()
              return _vm.editShop()
            },
          },
        },
        [
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "name" } }, [_vm._v("Gallery name:")]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.shop.name,
                  expression: "shop.name",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", id: "name" },
              domProps: { value: _vm.shop.name },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.shop, "name", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "description" } }, [
              _vm._v("Address:"),
            ]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.shop.address,
                  expression: "shop.address",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", id: "description" },
              domProps: { value: _vm.shop.address },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.shop, "address", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("label", { attrs: { for: "price" } }, [_vm._v("Max capacity:")]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.shop.max_capacity,
                  expression: "shop.max_capacity",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", id: "price" },
              domProps: { value: _vm.shop.max_capacity },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.shop, "max_capacity", $event.target.value)
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
    return _c("h1", { staticClass: "text-primary" }, [
      _c("span", { staticClass: "font-weight-bold" }, [_vm._v("Edit")]),
      _vm._v(" shop:"),
    ])
  },
]
render._withStripped = true



/***/ })

}]);