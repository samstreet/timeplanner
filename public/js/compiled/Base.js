"use strict";
/**
 * Created by haxxor on 28/01/2018.
 */
var Base = /** @class */ (function () {
    function Base() {
    }
    Base.prototype.init = function () {
        console.log('init::called');
    };
    return Base;
}());
var base = new Base();
base.init();
//# sourceMappingURL=Base.js.map