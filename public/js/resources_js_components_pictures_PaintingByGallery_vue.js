"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_pictures_PaintingByGallery_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/PaintingByGallery.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/PaintingByGallery.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      paintings: []
    };
  },
  mounted: function mounted() {
    //llama a la funcion cuando se carga el componente x inicializar.
    //console.log('montando... :D');
    this.paintingsByShop();
  },
  methods: {
    paintingsByShop: function paintingsByShop() {
      var _this = this;

      var shop = 0;
      var url = ""; // console.log('painting by shop');
      // console.log('Parametro pasado:' + this.$route.params.id )

      this.shop = this.$route.params.id;
      this.url = '/api/shops/' + this.shop + '/pictures';
      console.log("url montada:" + this.url); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.get(this.url).then(function (response) {
        //obtener datos
        console.log(response.data);
        _this.paintings = response.data.paintingByShop;
      });
    },
    deletePicture: function deletePicture(delId) {
      var _this2 = this;

      console.log("Borrando cuadro: " + delId);
      var shop = 0;
      var url = ""; // // console.log('painting by shop');
      // // console.log('Parametro pasado:' + this.$route.params.id )
      // this.shop = this.$route.params.id

      url = '/api/show/picture/delete/' + delId;
      console.log("url montada:" + url); //añadir token a la peticion

      axios.defaults.headers.common = {
        Authorization: "Bearer " + localStorage.getItem("LoginToken")
      }; //llamada a la api para añadir datos

      axios.post(url).then(function (response) {
        //obtener datos
        console.log(response.data);

        _this2.$router.push({
          name: 'SelectAGallery'
        }); //redireccion a pagina index

      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/pictures/PaintingByGallery.vue":
/*!****************************************************************!*\
  !*** ./resources/js/components/pictures/PaintingByGallery.vue ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _PaintingByGallery_vue_vue_type_template_id_74d52c28___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PaintingByGallery.vue?vue&type=template&id=74d52c28& */ "./resources/js/components/pictures/PaintingByGallery.vue?vue&type=template&id=74d52c28&");
/* harmony import */ var _PaintingByGallery_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./PaintingByGallery.vue?vue&type=script&lang=js& */ "./resources/js/components/pictures/PaintingByGallery.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PaintingByGallery_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _PaintingByGallery_vue_vue_type_template_id_74d52c28___WEBPACK_IMPORTED_MODULE_0__.render,
  _PaintingByGallery_vue_vue_type_template_id_74d52c28___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/pictures/PaintingByGallery.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/pictures/PaintingByGallery.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/components/pictures/PaintingByGallery.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PaintingByGallery_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./PaintingByGallery.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/PaintingByGallery.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PaintingByGallery_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/pictures/PaintingByGallery.vue?vue&type=template&id=74d52c28&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/components/pictures/PaintingByGallery.vue?vue&type=template&id=74d52c28& ***!
  \***********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PaintingByGallery_vue_vue_type_template_id_74d52c28___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PaintingByGallery_vue_vue_type_template_id_74d52c28___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PaintingByGallery_vue_vue_type_template_id_74d52c28___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./PaintingByGallery.vue?vue&type=template&id=74d52c28& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/PaintingByGallery.vue?vue&type=template&id=74d52c28&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/PaintingByGallery.vue?vue&type=template&id=74d52c28&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/PaintingByGallery.vue?vue&type=template&id=74d52c28& ***!
  \**************************************************************************************************************************************************************************************************************************************/
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
      _c("h1", { staticClass: "text-primary text-center" }, [
        _vm._v("Paining by gallery:"),
      ]),
      _vm._v(" "),
      _c("h3", { staticClass: "text-primary text-center" }, [
        _vm._v("Gallery Number: " + _vm._s(_vm.$route.params.id)),
      ]),
      _vm._v(" "),
      _c("section", { staticClass: "jumbotron text-center" }, [
        _c("div", { staticClass: "container" }, [
          _c("h1", { staticClass: "jumbotron-heading" }, [_vm._v("PICTURES:")]),
          _vm._v(" "),
          _c("p"),
          _c("h6", [
            _vm._v("Total picture number: " + _vm._s(_vm.paintings.length)),
          ]),
          _c("p"),
        ]),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "album py-5 bg-light" }, [
        _c("div", { staticClass: "container" }, [
          _c(
            "div",
            { staticClass: "row" },
            _vm._l(_vm.paintings, function (painting) {
              return _c("div", { key: painting.id, staticClass: "col-md-4" }, [
                _c("div", { staticClass: "card mb-4 box-shadow" }, [
                  _c("img", {
                    staticClass: "card-img-top cuaImg rounded mx-auto",
                    attrs: { src: "../" + painting.url, alt: painting.url },
                  }),
                  _vm._v(" "),
                  _c("div", { staticClass: "card-body" }, [
                    _c("p", { staticClass: "h6" }, [_vm._v("Title:")]),
                    _vm._v(" "),
                    _c("p", { staticClass: "h5" }, [
                      _c("strong", [_vm._v(_vm._s(painting.picture_name))]),
                    ]),
                    _vm._v(" "),
                    _c("p", { staticClass: "h6" }, [_vm._v("Author:")]),
                    _vm._v(" "),
                    _c("p", { staticClass: "h5" }, [
                      _c("strong", [_vm._v(_vm._s(painting.author))]),
                    ]),
                    _vm._v(" "),
                    _c("p", { staticClass: "h6 card-text" }, [
                      _vm._v(_vm._s(painting.comment)),
                    ]),
                    _vm._v(" "),
                    _c("p", { staticClass: "small" }, [
                      _vm._v("Price: " + _vm._s(painting.price)),
                    ]),
                    _vm._v(" "),
                    _c("p", { staticClass: "small" }, [
                      _vm._v("Entry date: " + _vm._s(painting.entry_date)),
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      {
                        staticClass:
                          "d-flex justify-content-between align-items-center",
                      },
                      [
                        _c("div", { staticClass: "btn-group" }, [
                          _c(
                            "form",
                            {
                              on: {
                                submit: function ($event) {
                                  $event.preventDefault()
                                  return _vm.deletePicture(painting.id)
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
                      ]
                    ),
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "card-footer" }, [
                    _c("small", { staticClass: "text-muted small" }, [
                      _vm._v("id: " + _vm._s(painting.id)),
                    ]),
                    _vm._v(" "),
                    _c("small", { staticClass: "text-muted small" }, [
                      _vm._v("Gallery: " + _vm._s(painting.shop_id)),
                    ]),
                  ]),
                ]),
              ])
            }),
            0
          ),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);