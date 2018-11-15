let Entity = function () {
    this.id = null;
    this.name = null;
    this.attributes = [];
    this.values = [];
    this.notes = [];
    this.tags = [];
};

/**
 *
 * @param {Object} json
 */
Entity.prototype.init = function (json) {
    this.id = json.id;
    this.name = json.name;
    this.attributes = json.attributes;
};

Entity.prototype.refresh = function () {

};

Entity.prototype.update = function () {

};

Entity.prototype.bind = function () {

};